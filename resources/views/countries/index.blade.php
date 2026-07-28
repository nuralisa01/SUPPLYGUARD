@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            🌍 Countries
        </h1>

        <p class="text-gray-500">
            Daftar seluruh negara yang tersimpan pada sistem.
        </p>

    </div>

    <div class="flex gap-3">

    <form action="{{ route('countries.sync') }}" method="POST">

        @csrf

        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

            🔄 Sync Countries

        </button>

    </form>

    <a href="{{ route('countries.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

        + Tambah Negara

    </a>

</div>

</div>

@if(session('success'))

<div class="mb-5 bg-blue-100 border border-blue-300 text-blue-700 p-4 rounded-lg">

    {{ session('success') }}

</div>

@endif

@if(session('error'))

<div class="mb-5 bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg">

    {{ session('error') }}

</div>

@endif

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-blue-600 text-white">

            <tr>

                <th class="px-5 py-3 text-left">
                    Kode
                </th>

                <th class="px-5 py-3 text-left">
                    Negara
                </th>

                <th class="px-5 py-3 text-left">
                    Ibu Kota
                </th>

                <th class="px-5 py-3 text-left">
                    Region
                </th>

                <th class="px-5 py-3 text-left">
                    Mata Uang
                </th>

                <th class="px-5 py-3 text-left">
                    Bahasa
                </th>

                <th class="px-5 py-3 text-center">
                    Aksi
                </th>

            </tr>

        </thead>

        <tbody>

        @forelse($countries as $country)

            <tr class="border-b hover:bg-gray-50">

                <td class="px-5 py-3">
                    {{ $country->country_code }}
                </td>

                <td class="px-5 py-3 font-medium">
                    {{ $country->country_name }}
                </td>

                <td class="px-5 py-3">
                    {{ $country->capital ?? '-' }}
                </td>

                <td class="px-5 py-3">
                    {{ $country->region ?? '-' }}
                </td>

                <td class="px-5 py-3">
                    {{ $country->currency ?? '-' }}
                </td>

                <td class="px-5 py-3">
                    {{ $country->language ?? '-' }}
                </td>

                <td class="px-5 py-3">

                    <div class="flex justify-center items-center gap-2 whitespace-nowrap">

                        <a href="{{ route('countries.show',$country) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded">

                            Detail

                        </a>

                        <a href="{{ route('countries.edit',$country) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

                            Edit

                        </a>

                        <form action="{{ route('countries.destroy',$country) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin ingin menghapus negara ini?')"
                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="7"
                    class="text-center py-10 text-gray-500">

                    Belum ada data negara.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $countries->links() }}

</div>

@endsection