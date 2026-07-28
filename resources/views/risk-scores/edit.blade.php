@extends('layouts.dashboard')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                ✏️ Edit Risk Score
            </h1>

            <p class="text-gray-500">
                Ubah data penilaian risiko supply chain berdasarkan negara.
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

    <div class="bg-white rounded-xl shadow p-8">

        <form action="{{ route('risk-scores.update',$riskScore) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6">

                {{-- Negara --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        Negara

                    </label>

                    <select
                        name="country_id"
                        class="w-full border rounded-lg px-4 py-3">

                        @foreach($countries as $country)

                        <option
                            value="{{ $country->id }}"
                            {{ old('country_id',$riskScore->country_id)==$country->id ? 'selected' : '' }}>

                            {{ $country->country_name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                {{-- Weather Score --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        Weather Score

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="100"
                        name="weather_score"
                        value="{{ old('weather_score',$riskScore->weather_score) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                {{-- Economic Score --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        Economic Score

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="100"
                        name="economic_score"
                        value="{{ old('economic_score',$riskScore->economic_score) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                {{-- Currency Score --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        Currency Score

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="100"
                        name="currency_score"
                        value="{{ old('currency_score',$riskScore->currency_score) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                {{-- News Score --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        News Score

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="100"
                        name="news_score"
                        value="{{ old('news_score',$riskScore->news_score) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                {{-- Total Score (readonly) --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        Total Score

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        value="{{ number_format($riskScore->total_score,2,'.','') }}"
                        readonly
                        class="w-full bg-gray-100 border rounded-lg px-4 py-3">

                </div>

                {{-- Risk Level (readonly) --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        Risk Level

                    </label>

                    <input
                        type="text"
                        value="{{ $riskScore->risk_level }}"
                        readonly
                        class="w-full bg-gray-100 border rounded-lg px-4 py-3">

                </div>

                {{-- Tanggal --}}

                <div>

                    <label class="block mb-2 font-semibold">

                        Tanggal Perhitungan

                    </label>

                    <input
                        type="date"
                        name="calculated_at"
                        value="{{ old('calculated_at',$riskScore->calculated_at) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

            </div>

            <div class="mt-8">

                <button
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                    💾 Simpan Perubahan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection