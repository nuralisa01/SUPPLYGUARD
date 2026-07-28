@extends('layouts.dashboard')

@section('content')

<div class="max-w-4xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                🤖 Generate Risk Score
            </h1>

            <p class="text-gray-500">
                Sistem akan menghitung Risk Score secara otomatis dari seluruh data yang tersedia.
            </p>

        </div>

        <a href="{{ route('risk-scores.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-3 rounded-lg">

            ← Kembali

        </a>

    </div>

    @if ($errors->any())

        <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-6">

            <ul class="list-disc ml-5">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <div class="bg-blue-50 border-l-4 border-blue-600 p-5 rounded-lg mb-6">

        <h3 class="font-bold text-blue-700 text-lg mb-3">

            Sistem Otomatis

        </h3>

        <ul class="list-disc ml-6 text-gray-700 space-y-2">

            <li>Weather Score diambil dari data cuaca.</li>

            <li>Economic Score diambil dari GDP & Inflation.</li>

            <li>Currency Score diambil dari Exchange Rate.</li>

            <li>News Score diambil dari Sentiment Berita.</li>

            <li>Total Risk Score dihitung otomatis.</li>

            <li>Risk Level dibuat otomatis.</li>

        </ul>

    </div>


    <div class="bg-white rounded-xl shadow p-8">

        <form action="{{ route('risk-scores.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-semibold">

                        🌍 Negara

                    </label>

                    <select
                        name="country_id"
                        class="w-full border rounded-lg px-4 py-3"
                        required>

                        <option value="">-- Pilih Negara --</option>

                        @foreach($countries as $country)

                            <option
                                value="{{ $country->id }}">

                                {{ $country->country_name }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <div>

                    <label class="block mb-2 font-semibold">

                        📅 Tanggal Perhitungan

                    </label>

                    <input
                        type="date"
                        name="calculated_at"
                        value="{{ date('Y-m-d') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

            </div>

            <div class="mt-8">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg shadow">

                    🤖 Generate Risk Score

                </button>

            </div>

        </form>

    </div>

</div>

@endsection