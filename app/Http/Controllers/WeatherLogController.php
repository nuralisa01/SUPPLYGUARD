<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\WeatherLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherLogController extends Controller
{
    /**
     * Menampilkan daftar data cuaca
     */
    public function index()
    {
        $weatherLogs = WeatherLog::with('country')
            ->latest()
            ->paginate(10);

        return view('weather.index', compact('weatherLogs'));
    }

    /**
     * Form tambah data cuaca
     */
    public function create()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('weather.create', compact('countries'));
    }

    /**
     * Simpan data cuaca manual
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_id'          => 'required|exists:countries,id',
            'temperature'         => 'nullable|numeric',
            'rainfall'            => 'nullable|numeric',
            'wind_speed'          => 'nullable|numeric',
            'humidity'            => 'nullable|integer',
            'weather_code'        => 'nullable|integer',
            'weather_description' => 'nullable|max:255',
            'weather_date'        => 'required|date',
        ]);

        WeatherLog::create($request->all());

        return redirect()
            ->route('weather.index')
            ->with('success', 'Data cuaca berhasil ditambahkan.');
    }

    /**
     * Sinkronisasi dari Open-Meteo API
     */
    public function sync(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
        ]);

        $country = Country::findOrFail($request->country_id);

        if (!$country->latitude || !$country->longitude) {

            return back()->with(
                'error',
                'Negara ini belum memiliki Latitude dan Longitude.'
            );
        }

        $url = "https://api.open-meteo.com/v1/forecast";

        $response = Http::get($url, [

            'latitude' => $country->latitude,
            'longitude' => $country->longitude,

            'current' => implode(',', [
                'temperature_2m',
                'relative_humidity_2m',
                'rain',
                'wind_speed_10m',
                'weather_code'
            ])

        ]);

        if (!$response->successful()) {

            return back()->with(
                'error',
                'Gagal mengambil data dari Open-Meteo.'
            );
        }

        $data = $response->json();

        $current = $data['current'];

        $description = match ($current['weather_code']) {

            0 => 'Clear Sky',
            1,2,3 => 'Partly Cloudy',
            45,48 => 'Fog',
            51,53,55 => 'Drizzle',
            61,63,65 => 'Rain',
            71,73,75 => 'Snow',
            80,81,82 => 'Rain Shower',
            95 => 'Thunderstorm',

            default => 'Unknown'

        };

        WeatherLog::create([

            'country_id' => $country->id,

            'temperature' => $current['temperature_2m'],

            'rainfall' => $current['rain'],

            'wind_speed' => $current['wind_speed_10m'],

            'humidity' => $current['relative_humidity_2m'],

            'weather_code' => $current['weather_code'],

            'weather_description' => $description,

            'weather_date' => now()->toDateString()

        ]);

        return redirect()
            ->route('weather.index')
            ->with('success', 'Data cuaca berhasil diambil dari Open-Meteo API.');
    }

    /**
     * Detail data cuaca
     */
    public function show(WeatherLog $weather)
    {
        return view('weather.show', compact('weather'));
    }

    /**
     * Form edit data cuaca
     */
    public function edit(WeatherLog $weather)
    {
        $countries = Country::orderBy('country_name')->get();

        return view('weather.edit', compact('weather', 'countries'));
    }

    /**
     * Update data cuaca
     */
    public function update(Request $request, WeatherLog $weather)
    {
        $request->validate([
            'country_id'          => 'required|exists:countries,id',
            'temperature'         => 'nullable|numeric',
            'rainfall'            => 'nullable|numeric',
            'wind_speed'          => 'nullable|numeric',
            'humidity'            => 'nullable|integer',
            'weather_code'        => 'nullable|integer',
            'weather_description' => 'nullable|max:255',
            'weather_date'        => 'required|date',
        ]);

        $weather->update($request->all());

        return redirect()
            ->route('weather.index')
            ->with('success', 'Data cuaca berhasil diperbarui.');
    }

    /**
     * Hapus data cuaca
     */
    public function destroy(WeatherLog $weather)
    {
        $weather->delete();

        return redirect()
            ->route('weather.index')
            ->with('success', 'Data cuaca berhasil dihapus.');
    }
}