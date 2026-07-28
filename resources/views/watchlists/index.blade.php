@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            ⭐ Watchlist
        </h1>

        <p class="text-gray-500">
            Daftar negara yang dipantau.
        </p>

    </div>

    <a href="{{ route('watchlists.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

        + Tambah Watchlist

    </a>

</div>

@if(session('success'))

<div class="mb-5 bg-blue-100 border border-blue-300 text-blue-700 p-4 rounded-lg">

    {{ session('success') }}

</div>

@endif

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-blue-600 text-white">

            <tr>

                <th class="px-4 py-3 text-center">
                    No
                </th>

                <th class="px-4 py-3 text-left">
                    Negara
                </th>

                <th class="px-4 py-3 text-center">
                    Ditambahkan
                </th>

                <th class="px-4 py-3 text-center">
                    Aksi
                </th>

            </tr>

        </thead>

        <tbody>

        @forelse($watchlists as $watchlist)

            <tr class="border-b hover:bg-gray-50">

                <td class="px-4 py-3 text-center">

                    {{ $loop->iteration + ($watchlists->firstItem() ?? 0) - 1 }}

                </td>

                <td class="px-4 py-3 font-medium">

                    {{ $watchlist->country->country_name }}

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $watchlist->created_at->format('d-m-Y') }}

                </td>

                <td class="px-4 py-3">

                    <div class="flex justify-center gap-2">

                        <a href="{{ route('watchlists.edit',$watchlist) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

                            Edit

                        </a>

                        <form action="{{ route('watchlists.destroy',$watchlist) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin ingin menghapus data ini?')"
                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="4"
                    class="text-center py-10 text-gray-500">

                    Belum ada negara di Watchlist.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $watchlists->links() }}

</div>

@endsection