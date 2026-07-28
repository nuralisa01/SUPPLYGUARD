<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\EconomicData;
use App\Models\WeatherLog;
use App\Models\ExchangeRate;
use App\Models\RiskScore;
use App\Models\News;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CountryController extends Controller
{

    /**
     * Menampilkan daftar negara
     */
    public function index()
    {
        $countries = Country::orderBy('country_name')->paginate(10);

        return view('countries.index', compact('countries'));
    }



    /**
     * Form tambah negara
     */
    public function create()
    {
        return view('countries.create');
    }



    /**
     * Simpan negara manual
     */
    public function store(Request $request)
    {
        $request->validate([

            'country_code' => 'required|max:5|unique:countries,country_code',

            'country_name' => 'required|max:100',

            'capital' => 'nullable|max:100',

            'region' => 'nullable|max:100',

            'currency' => 'nullable|max:50',

            'language' => 'nullable|max:100',

        ]);


        Country::create($request->all());


        return redirect()
            ->route('countries.index')
            ->with(
                'success',
                'Data negara berhasil ditambahkan.'
            );
    }



    /**
     * Detail negara
     */
    public function show(Country $country)
    {

        $economic = EconomicData::where(
            'country_id',
            $country->id
        )
        ->latest()
        ->first();



        $weather = WeatherLog::where(
            'country_id',
            $country->id
        )
        ->latest()
        ->first();



        $exchange = ExchangeRate::where(
            'country_id',
            $country->id
        )
        ->latest()
        ->first();



        $risk = RiskScore::where(
            'country_id',
            $country->id
        )
        ->latest()
        ->first();



        $news = News::where(
            'country_id',
            $country->id
        )
        ->latest()
        ->take(5)
        ->get();



        $watchlist = null;


        if(Auth::check()){

            $watchlist = Watchlist::where(
                'country_id',
                $country->id
            )
            ->where(
                'user_id',
                Auth::id()
            )
            ->first();

        }



        return view(
            'countries.show',
            compact(
                'country',
                'economic',
                'weather',
                'exchange',
                'risk',
                'news',
                'watchlist'
            )
        );

    }




    /**
     * Edit negara
     */
    public function edit(Country $country)
    {
        return view(
            'countries.edit',
            compact('country')
        );
    }





    /**
     * Update negara
     */
    public function update(Request $request, Country $country)
    {

        $request->validate([

            'country_code' =>
            'required|max:5|unique:countries,country_code,' . $country->id,

            'country_name' =>
            'required|max:100',

            'capital' =>
            'nullable|max:100',

            'region' =>
            'nullable|max:100',

            'currency' =>
            'nullable|max:50',

            'language' =>
            'nullable|max:100',

        ]);



        $country->update($request->all());



        return redirect()
            ->route('countries.index')
            ->with(
                'success',
                'Data negara berhasil diperbarui.'
            );

    }





    /**
     * Hapus negara
     */
    public function destroy(Country $country)
    {

        $country->delete();


        return redirect()
            ->route('countries.index')
            ->with(
                'success',
                'Data negara berhasil dihapus.'
            );

    }





    /**
 * Sinkronisasi Negara dari Countries.dev API
 */
public function sync()
{
    try {

        $response = Http::timeout(60)
            ->acceptJson()
            ->get('https://countries.dev/countries');

        if (!$response->successful()) {

            return redirect()
                ->route('countries.index')
                ->with('error', 'Gagal mengambil data dari Countries.dev API.');

        }

        $countries = $response->json();

        $count = 0;

        foreach ($countries as $item) {

            Country::updateOrCreate(

                [
                    'country_code' => $item['alpha2Code'] ?? '',
                ],

                [

                    'country_name' => $item['name'] ?? '-',

                    'capital' => $item['capital'] ?? '-',

                    'region' => $item['region'] ?? '-',

                    'currency' => isset($item['currencies'][0]['code'])
                        ? $item['currencies'][0]['code']
                        : '-',

                    'language' => isset($item['languages'])
                        ? implode(', ', array_column($item['languages'], 'name'))
                        : '-',

                    'latitude' => $item['latlng'][0] ?? null,

                    'longitude' => $item['latlng'][1] ?? null,

                    'flag' => $item['flags']['png'] ?? null,

                ]

            );

            $count++;

        }

        return redirect()
            ->route('countries.index')
            ->with('success', $count . ' negara berhasil disinkronisasi.');

    } catch (\Throwable $e) {

        return redirect()
            ->route('countries.index')
            ->with('error', $e->getMessage());

    }
}
}