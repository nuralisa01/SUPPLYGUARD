<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExchangeRateController extends Controller
{
    /**
     * Menampilkan daftar nilai tukar
     */
    public function index()
    {
        $exchangeRates = ExchangeRate::with('country')
            ->latest()
            ->paginate(10);

        return view('exchange-rates.index', compact('exchangeRates'));
    }

    /**
     * Form tambah nilai tukar
     */
    public function create()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('exchange-rates.create', compact('countries'));
    }

    /**
     * Simpan manual
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_id'      => 'required|exists:countries,id',
            'base_currency'   => 'required|max:10',
            'target_currency' => 'required|max:10',
            'exchange_rate'   => 'required|numeric',
            'rate_date'       => 'required|date',
        ]);

        ExchangeRate::create($request->all());

        return redirect()
            ->route('exchange-rates.index')
            ->with('success', 'Data nilai tukar berhasil ditambahkan.');
    }

    /**
     * Sync dari Frankfurter API
     */
    public function sync(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
        ]);

        $country = Country::findOrFail($request->country_id);

        $currency = strtoupper(trim(explode(',', $country->currency)[0]));

        if (empty($currency)) {

            return back()->with(
                'error',
                'Negara ini belum memiliki mata uang.'
            );
        }

        $response = Http::get(
            "https://api.frankfurter.app/latest?from=USD&to={$currency}"
        );

        if (!$response->successful()) {

    dd(
        $response->status(),
        $response->body()
    );

}

        $data = $response->json();

        if (!isset($data['rates'][$currency])) {

            return back()->with(
                'error',
                'Nilai tukar tidak ditemukan.'
            );
        }

        ExchangeRate::create([

            'country_id'      => $country->id,

            'base_currency'   => 'USD',

            'target_currency' => $currency,

            'exchange_rate'   => $data['rates'][$currency],

            'rate_date'       => $data['date']

        ]);

        return redirect()
            ->route('exchange-rates.index')
            ->with('success', 'Exchange Rate berhasil diambil dari Frankfurter API.');
    }

    /**
     * Detail
     */
    public function show(ExchangeRate $exchangeRate)
    {
        return view('exchange-rates.show', compact('exchangeRate'));
    }

    /**
     * Form edit
     */
    public function edit(ExchangeRate $exchangeRate)
    {
        $countries = Country::orderBy('country_name')->get();

        return view('exchange-rates.edit', compact('exchangeRate', 'countries'));
    }

    /**
     * Update
     */
    public function update(Request $request, ExchangeRate $exchangeRate)
    {
        $request->validate([
            'country_id'      => 'required|exists:countries,id',
            'base_currency'   => 'required|max:10',
            'target_currency' => 'required|max:10',
            'exchange_rate'   => 'required|numeric',
            'rate_date'       => 'required|date',
        ]);

        $exchangeRate->update($request->all());

        return redirect()
            ->route('exchange-rates.index')
            ->with('success', 'Data nilai tukar berhasil diperbarui.');
    }

    /**
     * Hapus
     */
    public function destroy(ExchangeRate $exchangeRate)
    {
        $exchangeRate->delete();

        return redirect()
            ->route('exchange-rates.index')
            ->with('success', 'Data nilai tukar berhasil dihapus.');
    }

    /**
    * REST API - Data Exchange Rate
    */
    public function api()
    {
        return response()->json(
            ExchangeRate::with('country')
                ->latest()
                ->get()
        );
    }
    
}