<?php

namespace App\Http\Controllers;

use App\Models\EconomicData;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Services\WorldBankService;
use Illuminate\Support\Facades\Http;

class EconomicDataController extends Controller
{
    /**
     * Menampilkan daftar data ekonomi
     */
    public function index()
    {
        $economicData = EconomicData::with('country')
            ->latest()
            ->paginate(10);

        return view('economic-data.index', compact('economicData'));
    }

    /**
     * Form tambah data
     */
    public function create()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('economic-data.create', compact('countries'));
    }

    /**
     * Simpan data
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'year' => 'required|digits:4',
            'gdp' => 'nullable|numeric',
            'inflation' => 'nullable|numeric',
            'population' => 'nullable|numeric',
            'exports' => 'nullable|numeric',
            'imports' => 'nullable|numeric',
        ]);

        EconomicData::create($request->all());

        return redirect()
            ->route('economic-data.index')
            ->with('success', 'Data ekonomi berhasil ditambahkan.');
    }

    /**
 * Sinkronisasi data ekonomi dari World Bank API
 */
public function sync(Request $request, WorldBankService $service)
{
    $request->validate([
        'country_id' => 'required|exists:countries,id',
    ]);

    $country = Country::findOrFail($request->country_id);

    $data = $service->getEconomicData($country->country_code);

    EconomicData::updateOrCreate(

        [
            'country_id' => $country->id,
            'year' => $data['year'],
        ],

        [
            'gdp' => $data['gdp'],
            'inflation' => $data['inflation'],
            'population' => $data['population'],
            'exports' => $data['exports'],
            'imports' => $data['imports'],
        ]

    );

    return redirect()
        ->route('economic-data.index')
        ->with('success', 'Data ekonomi berhasil disinkronisasi.');
}

    /**
     * Detail data
     */
    public function show(EconomicData $economic_datum)
    {
        return view('economic-data.show', [
            'economicData' => $economic_datum
        ]);
    }

    /**
     * Form edit
     */
    public function edit(EconomicData $economic_datum)
    {
        $countries = Country::orderBy('country_name')->get();

        return view('economic-data.edit', [
            'economicData' => $economic_datum,
            'countries' => $countries
        ]);
    }

    /**
     * Update data
     */
    public function update(Request $request, EconomicData $economic_datum)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'year' => 'required|digits:4',
            'gdp' => 'nullable|numeric',
            'inflation' => 'nullable|numeric',
            'population' => 'nullable|numeric',
            'exports' => 'nullable|numeric',
            'imports' => 'nullable|numeric',
        ]);

        $economic_datum->update($request->all());

        return redirect()
            ->route('economic-data.index')
            ->with('success', 'Data ekonomi berhasil diperbarui.');
    }

    /**
     * Hapus data
     */
    public function destroy(EconomicData $economic_datum)
    {
        $economic_datum->delete();

        return redirect()
            ->route('economic-data.index')
            ->with('success', 'Data ekonomi berhasil dihapus.');
    }
}