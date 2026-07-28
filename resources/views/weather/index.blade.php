@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            🌦 Weather Data
        </h1>

        <p class="text-gray-500">
            Data cuaca setiap negara.
        </p>

    </div>

    <div class="flex gap-3">

        <form action="{{ route('weather.sync') }}" method="POST" class="flex gap-2">

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

                🌦 Sync Open-Meteo

            </button>

        </form>

        <a href="{{ route('weather.create') }}"
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

@if(session('error'))

<div class="mb-5 bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg">

    {{ session('error') }}

</div>

@endif

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-blue-600 text-white">

            <tr>

                <th class="px-4 py-3 text-left">Negara</th>

                <th class="px-4 py-3 text-center">Tanggal</th>

                <th class="px-4 py-3 text-center">Suhu (°C)</th>

                <th class="px-4 py-3 text-center">Curah Hujan</th>

                <th class="px-4 py-3 text-center">Kecepatan Angin</th>

                <th class="px-4 py-3 text-center">Humidity</th>

                <th class="px-4 py-3 text-center">Kondisi Cuaca</th>

                <th class="px-4 py-3 text-center">Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($weatherLogs as $weather)

            <tr class="border-b hover:bg-gray-50">

                <td class="px-4 py-3 font-medium">

                    {{ $weather->country->country_name }}

                </td>

                <td class="px-4 py-3 text-center">

                    {{ \Carbon\Carbon::parse($weather->weather_date)->format('d M Y') }}

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $weather->temperature }} °C

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $weather->rainfall }} mm

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $weather->wind_speed }} km/h

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $weather->humidity }} %

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $weather->weather_description }}

                </td>

                <td class="px-4 py-3">

                    <div class="flex justify-center gap-2">

                        <a href="{{ route('weather.show',$weather->id) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded">

                            Detail

                        </a>

                        <a href="{{ route('weather.edit',$weather->id) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

                            Edit

                        </a>

                        <form action="{{ route('weather.destroy',$weather->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin ingin menghapus data cuaca ini?')"
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

                    Belum ada data cuaca.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $weatherLogs->links() }}

</div>

@endsection