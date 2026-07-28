<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    /**
     * Menampilkan semua Watchlist milik user.
     */
    public function index()
    {
        $watchlists = Watchlist::with('country')
            ->where('user_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view('watchlists.index', compact('watchlists'));
    }

    /**
     * Form tambah Watchlist.
     */
    public function create()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('watchlists.create', compact('countries'));
    }

    /**
     * Simpan Watchlist.
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
        ]);

        $cek = Watchlist::where('user_id', Auth::id())
            ->where('country_id', $request->country_id)
            ->exists();

        if ($cek) {
            return back()
                ->withErrors([
                    'country_id' => 'Negara tersebut sudah ada di Watchlist.'
                ])
                ->withInput();
        }

        Watchlist::create([
            'user_id' => Auth::id(),
            'country_id' => $request->country_id,
        ]);

        return redirect()
            ->route('watchlists.index')
            ->with('success', 'Watchlist berhasil ditambahkan.');
    }

    /**
     * Tambah Watchlist dari halaman Risk Score.
     */
    public function addFromRisk(Country $country)
    {
        $exists = Watchlist::where('user_id', Auth::id())
            ->where('country_id', $country->id)
            ->exists();

        if (!$exists) {

            Watchlist::create([
                'user_id' => Auth::id(),
                'country_id' => $country->id,
            ]);

            return redirect()
                ->route('watchlists.index')
                ->with('success', 'Negara berhasil ditambahkan ke Watchlist.');
        }

        return redirect()
            ->route('watchlists.index')
            ->with('success', 'Negara sudah ada di Watchlist.');
    }

    /**
     * Detail.
     */
    public function show(Watchlist $watchlist)
    {
        return redirect()->route('watchlists.index');
    }

    /**
     * Form edit.
     */
    public function edit(Watchlist $watchlist)
    {
        $countries = Country::orderBy('country_name')->get();

        return view('watchlists.edit', compact('watchlist', 'countries'));
    }

    /**
     * Update Watchlist.
     */
    public function update(Request $request, Watchlist $watchlist)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
        ]);

        $cek = Watchlist::where('user_id', Auth::id())
            ->where('country_id', $request->country_id)
            ->where('id', '!=', $watchlist->id)
            ->exists();

        if ($cek) {
            return back()
                ->withErrors([
                    'country_id' => 'Negara tersebut sudah ada di Watchlist.'
                ])
                ->withInput();
        }

        $watchlist->update([
            'country_id' => $request->country_id,
        ]);

        return redirect()
            ->route('watchlists.index')
            ->with('success', 'Watchlist berhasil diperbarui.');
    }

    /**
     * Hapus Watchlist.
     */
    public function destroy(Watchlist $watchlist)
    {
        $watchlist->delete();

        return redirect()
            ->route('watchlists.index')
            ->with('success', 'Watchlist berhasil dihapus.');
    }
}