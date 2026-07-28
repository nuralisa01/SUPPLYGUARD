@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            📈 Economic Data
        </h1>

        <p class="text-gray-500">
            Data ekonomi setiap negara.
        </p>

    </div>

    <div class="flex gap-3">

    <form action="{{ route('economic-data.sync') }}" method="POST" class="flex gap-2">

        @csrf

        <select
            name="country_id"
            class="border rounded-lg px-3 py-3"
            required>

            <option value="">
                -- Pilih Negara --
            </option>

            @foreach(\App\Models\Country::orderBy('country_name')->get() as $country)

                <option value="{{ $country->id }}">
                    {{ $country->country_name }}
                </option>

            @endforeach

        </select>

        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

            🔄 Sync World Bank

        </button>

    </form>

    <a href="{{ route('economic-data.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

        + Tambah Data

    </a>

</div>

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

                <th class="px-4 py-3 text-left">Negara</th>
                <th class="px-4 py-3 text-center">Tahun</th>
                <th class="px-4 py-3 text-right">GDP</th>
                <th class="px-4 py-3 text-right">Inflasi</th>
                <th class="px-4 py-3 text-right">Populasi</th>
                <th class="px-4 py-3 text-right">Ekspor</th>
                <th class="px-4 py-3 text-right">Impor</th>
                <th class="px-4 py-3 text-center">Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($economicData as $data)

            <tr class="border-b hover:bg-gray-50">

                <td class="px-4 py-3 font-medium">

                    {{ $data->country->country_name }}

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $data->year }}

                </td>

                <td class="px-4 py-3 text-right">

                    {{ number_format($data->gdp,2) }}

                </td>

                <td class="px-4 py-3 text-right">

                    {{ number_format($data->inflation,2) }} %

                </td>

                <td class="px-4 py-3 text-right">

                    {{ number_format($data->population) }}

                </td>

                <td class="px-4 py-3 text-right">

                    {{ number_format($data->exports,2) }}

                </td>

                <td class="px-4 py-3 text-right">

                    {{ number_format($data->imports,2) }}

                </td>

                <td class="px-4 py-3">

                    <div class="flex justify-center gap-2">

                        <!-- DETAIL -->

                        <a href="{{ route('economic-data.show', $data->id) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded">

                            Detail

                        </a>

                        <!-- EDIT -->

                        <a href="{{ route('economic-data.edit', $data->id) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

                            Edit

                        </a>

                        <!-- HAPUS -->

                        <form action="{{ route('economic-data.destroy', $data->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
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

                <td colspan="8"
                    class="text-center py-10 text-gray-500">

                    Belum ada data ekonomi.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $economicData->links() }}

</div>

@endsection