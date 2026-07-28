@extends('layouts.dashboard')

@section('content')

<div class="mb-8">

    <a href="{{ route('countries.index') }}"
       class="text-green-600 hover:text-green-800 font-semibold">

        ← Kembali ke Daftar Negara

    </a>

</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">

    <div class="bg-green-600 text-white p-8">

        <h1 class="text-4xl font-bold">

            🌍 {{ $country->country_name }}

        </h1>

        <p class="mt-2 text-green-100">

            {{ $country->country_code }}

        </p>

    </div>

    <div class="grid md:grid-cols-2 gap-6 p-8">

        <div>

            <h2 class="text-xl font-bold mb-4">

                Informasi Negara

            </h2>

            <table class="w-full">

                <tr>

                    <td class="py-2 font-semibold">Ibu Kota</td>

                    <td>{{ $country->capital ?? '-' }}</td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">Region</td>

                    <td>{{ $country->region ?? '-' }}</td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">Mata Uang</td>

                    <td>{{ $country->currency ?? '-' }}</td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">Bahasa</td>

                    <td>{{ $country->language ?? '-' }}</td>

                </tr>

            </table>

        </div>

        <div>

            <h2 class="text-xl font-bold mb-4">

                Risk Monitoring

            </h2>

            <table class="w-full">

                <tr>

                    <td class="py-2 font-semibold">

                        GDP

                    </td>

                    <td>

                        {{ $economic->gdp ?? '-' }}

                    </td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">

                        Inflasi

                    </td>

                    <td>

                        {{ $economic->inflation ?? '-' }}

                    </td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">

                        Populasi

                    </td>

                    <td>

                        {{ number_format($economic->population ?? 0) }}

                    </td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">

                        Suhu

                    </td>

                    <td>

                        {{ $weather->temperature ?? '-' }} °C

                    </td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">

                        Exchange Rate

                    </td>

                    <td>

                        {{ $exchange->exchange_rate ?? '-' }}

                    </td>

                </tr>

                <tr>

                    <td class="py-2 font-semibold">

                        Risk Score

                    </td>

                    <td>

                        @if($risk)

                            <span class="font-bold text-red-600">

                                {{ $risk->total_score }}

                                ({{ $risk->risk_level }})

                            </span>

                        @else

                            -

                        @endif

                    </td>

                </tr>

            </table>

        </div>

    </div>

</div>

<!-- Latest News -->

<div class="mt-8 bg-white rounded-xl shadow">

    <div class="border-b p-5">

        <h2 class="text-xl font-bold">

            📰 Latest News

        </h2>

    </div>

    <div class="divide-y">

        @forelse($news as $item)

            <div class="p-5">

                <h3 class="font-semibold">

                    {{ $item->title }}

                </h3>

                <p class="text-gray-500 text-sm mt-2">

                    {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}

                </p>

            </div>

        @empty

            <div class="p-6 text-center text-gray-500">

                Belum ada berita.

            </div>

        @endforelse

    </div>

</div>

@endsection