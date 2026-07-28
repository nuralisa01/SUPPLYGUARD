<?php

namespace App\Http\Controllers;

use App\Models\Port;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortController extends Controller
{
    /**
     * Menampilkan daftar pelabuhan
     */
    public function index(Request $request)
{
    $countries = Country::orderBy('country_name')->get();


    $query = Port::with('country')
        ->orderBy('port_name');


    if($request->country_id){

        $query->where('country_id',$request->country_id);

    }


    $ports = $query->paginate(10)
        ->withQueryString();


    return view('ports.index', compact(
        'ports',
        'countries'
    ));
}

    /**
     * Form tambah pelabuhan
     */
    public function create()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('ports.create', compact('countries'));
    }

    /**
     * Simpan pelabuhan
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'port_name' => 'required|max:255',
            'port_code' => 'nullable|max:20',
            'city' => 'nullable|max:100',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'status' => 'required',
            'congestion_level' => 'required',
            'description' => 'nullable'
        ]);

        Port::create($request->all());

        return redirect()
            ->route('ports.index')
            ->with('success', 'Data pelabuhan berhasil ditambahkan.');
    }

    /**
     * Detail pelabuhan
     */
    public function show(Port $port)
    {
        return view('ports.show', compact('port'));
    }

    /**
     * Form edit
     */
    public function edit(Port $port)
    {
        $countries = Country::orderBy('country_name')->get();

        return view('ports.edit', compact('port', 'countries'));
    }

    /**
     * Update pelabuhan
     */
    public function update(Request $request, Port $port)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'port_name' => 'required|max:255',
            'port_code' => 'nullable|max:20',
            'city' => 'nullable|max:100',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'status' => 'required',
            'congestion_level' => 'required',
            'description' => 'nullable'
        ]);

        $port->update($request->all());

        return redirect()
            ->route('ports.index')
            ->with('success', 'Data pelabuhan berhasil diperbarui.');
    }

    /**
     * Hapus pelabuhan
     */
    public function destroy(Port $port)
    {
        $port->delete();

        return redirect()
            ->route('ports.index')
            ->with('success', 'Data pelabuhan berhasil dihapus.');
    }

    /**
     * REST API
     */
    public function api()
    {
        return response()->json(
            Port::with('country')
                ->orderBy('port_name')
                ->get()
        );
    }
}