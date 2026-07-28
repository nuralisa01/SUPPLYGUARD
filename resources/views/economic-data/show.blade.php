@extends('layouts.dashboard')

@section('content')

<div class="mb-6">

    <a href="{{ route('economic-data.index') }}"
       class="text-green-600 hover:text-green-800 font-semibold">

        ← Kembali ke Data Ekonomi

    </a>

</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">

    <!-- Header -->

    <div class="bg-gradient-to-r from-green-600 to-green-700 text-white p-8">

        <h1 class="text-3xl font-bold">

            📈 Detail Data Ekonomi

        </h1>

        <p class="mt-2 text-green-100">

            {{ $economicData->country->country_name }}

        </p>

    </div>

    <!-- Statistik -->

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 p-8">

        <div class="bg-blue-50 rounded-lg p-5 border-l-4 border-blue-500">

            <p class="text-gray-500">
                🌍 Negara
            </p>

            <h2 class="text-2xl font-bold">

                {{ $economicData->country->country_name }}

            </h2>

        </div>

        <div class="bg-yellow-50 rounded-lg p-5 border-l-4 border-yellow-500">

            <p class="text-gray-500">
                📅 Tahun
            </p>

            <h2 class="text-2xl font-bold">

                {{ $economicData->year }}

            </h2>

        </div>

        <div class="bg-green-50 rounded-lg p-5 border-l-4 border-green-500">

            <p class="text-gray-500">
                💰 GDP
            </p>

            <h2 class="text-2xl font-bold">

                {{ number_format($economicData->gdp,2) }}

            </h2>

        </div>

        <div class="bg-red-50 rounded-lg p-5 border-l-4 border-red-500">

            <p class="text-gray-500">
                📉 Inflasi
            </p>

            <h2 class="text-2xl font-bold">

                {{ number_format($economicData->inflation,2) }} %

            </h2>

        </div>

        <div class="bg-cyan-50 rounded-lg p-5 border-l-4 border-cyan-500">

            <p class="text-gray-500">
                👥 Populasi
            </p>

            <h2 class="text-2xl font-bold">

                {{ number_format($economicData->population) }}

            </h2>

        </div>

        <div class="bg-purple-50 rounded-lg p-5 border-l-4 border-purple-500">

            <p class="text-gray-500">
                🚢 Ekspor
            </p>

            <h2 class="text-2xl font-bold">

                {{ number_format($economicData->exports,2) }}

            </h2>

        </div>

        <div class="bg-pink-50 rounded-lg p-5 border-l-4 border-pink-500">

            <p class="text-gray-500">
                📦 Impor
            </p>

            <h2 class="text-2xl font-bold">

                {{ number_format($economicData->imports,2) }}

            </h2>

        </div>

    </div>

</div>

<!-- Tombol -->

<div class="flex gap-3 mt-6">

    <a href="{{ route('economic-data.edit',$economicData->id) }}"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg shadow">

        ✏ Edit

    </a>

    <a href="{{ route('economic-data.index') }}"
       class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg shadow">

        ← Kembali

    </a>

</div>

@endsection