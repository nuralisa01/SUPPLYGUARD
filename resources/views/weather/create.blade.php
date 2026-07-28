@extends('layouts.dashboard')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                🌦 Tambah Data Cuaca
            </h1>

            <p class="text-gray-500">
                Tambahkan data cuaca suatu negara.
            </p>

        </div>

        <a href="{{ route('weather.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-3 rounded-lg">

            ← Kembali

        </a>

    </div>

    @if ($errors->any())

        <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded-lg mb-6">

            <ul class="list-disc ml-5">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <div class="bg-white rounded-xl shadow p-8">

        <form action="{{ route('weather.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-2 gap-6">

                <!-- Negara -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Negara
                    </label>

                    <select
                        name="country_id"
                        class="w-full border rounded-lg px-4 py-3">

                        <option value="">
                            -- Pilih Negara --
                        </option>

                        @foreach($countries as $country)

                            <option
                                value="{{ $country->id }}"
                                {{ old('country_id') == $country->id ? 'selected' : '' }}>

                                {{ $country->country_name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- Tanggal -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="weather_date"
                        value="{{ old('weather_date') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Suhu -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Suhu (°C)
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="temperature"
                        value="{{ old('temperature') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Curah Hujan -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Curah Hujan (mm)
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="rainfall"
                        value="{{ old('rainfall') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Kecepatan Angin -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Kecepatan Angin (km/h)
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="wind_speed"
                        value="{{ old('wind_speed') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Kelembaban -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Kelembaban (%)
                    </label>

                    <input
                        type="number"
                        name="humidity"
                        value="{{ old('humidity') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Weather Code -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Weather Code
                    </label>

                    <input
                        type="number"
                        name="weather_code"
                        value="{{ old('weather_code') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Deskripsi -->
                <div>

                    <label class="block mb-2 font-semibold">
                        Deskripsi Cuaca
                    </label>

                    <input
                        type="text"
                        name="weather_description"
                        value="{{ old('weather_description') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

            </div>

            <div class="mt-8">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                    💾 Simpan Data

                </button>

            </div>

        </form>

    </div>

</div>

@endsection