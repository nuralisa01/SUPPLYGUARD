@extends('layouts.dashboard')

@section('content')

<div class="mb-6">

    <a href="{{ route('weather.index') }}"
       class="text-green-600 hover:text-green-800 font-semibold">

        ← Kembali ke Data Cuaca

    </a>

</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">

    <!-- Header -->

    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white p-8">

        <h1 class="text-3xl font-bold">

            🌦 Detail Data Cuaca

        </h1>

        <p class="mt-2 text-cyan-100">

            {{ $weather->country->country_name }}

        </p>

    </div>

    <!-- Isi -->

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 p-8">

        <div class="bg-green-50 rounded-lg p-5 border-l-4 border-green-500">

            <p class="text-gray-500">
                🌍 Negara
            </p>

            <h2 class="text-2xl font-bold">

                {{ $weather->country->country_name }}

            </h2>

        </div>

        <div class="bg-blue-50 rounded-lg p-5 border-l-4 border-blue-500">

            <p class="text-gray-500">
                📅 Tanggal
            </p>

            <h2 class="text-2xl font-bold">

                {{ \Carbon\Carbon::parse($weather->weather_date)->format('d M Y') }}

            </h2>

        </div>

        <div class="bg-orange-50 rounded-lg p-5 border-l-4 border-orange-500">

            <p class="text-gray-500">
                🌡 Suhu
            </p>

            <h2 class="text-2xl font-bold">

                {{ $weather->temperature }} °C

            </h2>

        </div>

        <div class="bg-cyan-50 rounded-lg p-5 border-l-4 border-cyan-500">

            <p class="text-gray-500">
                🌧 Curah Hujan
            </p>

            <h2 class="text-2xl font-bold">

                {{ $weather->rainfall }} mm

            </h2>

        </div>

        <div class="bg-purple-50 rounded-lg p-5 border-l-4 border-purple-500">

            <p class="text-gray-500">
                💨 Kecepatan Angin
            </p>

            <h2 class="text-2xl font-bold">

                {{ $weather->wind_speed }} km/h

            </h2>

        </div>

        <div class="bg-pink-50 rounded-lg p-5 border-l-4 border-pink-500">

            <p class="text-gray-500">
                💧 Humidity
            </p>

            <h2 class="text-2xl font-bold">

                {{ $weather->humidity }} %

            </h2>

        </div>

        <div class="bg-yellow-50 rounded-lg p-5 border-l-4 border-yellow-500 md:col-span-2 xl:col-span-3">

            <p class="text-gray-500">
                ☁ Kondisi Cuaca
            </p>

            <h2 class="text-2xl font-bold">

                {{ $weather->weather_description }}

            </h2>

        </div>

    </div>

</div>

<div class="flex gap-3 mt-6">

    <a href="{{ route('weather.edit',$weather->id) }}"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg shadow">

        ✏ Edit

    </a>

    <a href="{{ route('weather.index') }}"
       class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg shadow">

        ← Kembali

    </a>

</div>

@endsection