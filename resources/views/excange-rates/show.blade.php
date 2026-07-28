@extends('layouts.dashboard')

@section('content')

<div class="mb-6">

    <a href="{{ route('exchange-rates.index') }}"
       class="text-green-600 hover:text-green-800 font-semibold">

        ← Kembali ke Exchange Rate

    </a>

</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">

    <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white p-8">

        <h1 class="text-3xl font-bold">
            💱 Detail Exchange Rate
        </h1>

        <p class="mt-2 text-green-100">
            {{ $exchangeRate->country->country_name }}
        </p>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 p-8">

        <div class="bg-blue-50 rounded-lg p-5 border-l-4 border-blue-500">

            <p class="text-gray-500">🌍 Negara</p>

            <h2 class="text-2xl font-bold">

                {{ $exchangeRate->country->country_name }}

            </h2>

        </div>

        <div class="bg-yellow-50 rounded-lg p-5 border-l-4 border-yellow-500">

            <p class="text-gray-500">💵 Mata Uang Asal</p>

            <h2 class="text-2xl font-bold">

                {{ $exchangeRate->base_currency }}

            </h2>

        </div>

        <div class="bg-purple-50 rounded-lg p-5 border-l-4 border-purple-500">

            <p class="text-gray-500">💶 Mata Uang Tujuan</p>

            <h2 class="text-2xl font-bold">

                {{ $exchangeRate->target_currency }}

            </h2>

        </div>

        <div class="bg-green-50 rounded-lg p-5 border-l-4 border-green-500">

            <p class="text-gray-500">📈 Nilai Tukar</p>

            <h2 class="text-2xl font-bold">

                {{ number_format($exchangeRate->exchange_rate, 4) }}

            </h2>

        </div>

        <div class="bg-cyan-50 rounded-lg p-5 border-l-4 border-cyan-500">

            <p class="text-gray-500">📅 Tanggal</p>

            <h2 class="text-2xl font-bold">

                {{ \Carbon\Carbon::parse($exchangeRate->rate_date)->format('d M Y') }}

            </h2>

        </div>

    </div>

</div>

<div class="flex gap-3 mt-6">

    <a href="{{ route('exchange-rates.edit', $exchangeRate->id) }}"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg shadow">

        ✏ Edit

    </a>

    <a href="{{ route('exchange-rates.index') }}"
       class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg shadow">

        ← Kembali

    </a>

</div>

@endsection