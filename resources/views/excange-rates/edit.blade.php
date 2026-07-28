@extends('layouts.dashboard')

@section('content')

<div class="max-w-4xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                💱 Edit Exchange Rate
            </h1>

            <p class="text-gray-500">
                Ubah data nilai tukar mata uang.
            </p>

        </div>

        <a href="{{ route('exchange-rates.index') }}"
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

        <form action="{{ route('exchange-rates.update', $exchangeRate->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6">

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
                                {{ old('country_id', $exchangeRate->country_id) == $country->id ? 'selected' : '' }}>

                                {{ $country->country_name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Base Currency
                    </label>

                    <input
                        type="text"
                        name="base_currency"
                        value="{{ old('base_currency', $exchangeRate->base_currency) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Target Currency
                    </label>

                    <input
                        type="text"
                        name="target_currency"
                        value="{{ old('target_currency', $exchangeRate->target_currency) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Exchange Rate
                    </label>

                    <input
                        type="number"
                        step="0.000001"
                        name="exchange_rate"
                        value="{{ old('exchange_rate', $exchangeRate->exchange_rate) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="rate_date"
                        value="{{ old('rate_date', $exchangeRate->rate_date) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

            </div>

            <div class="mt-8">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                    💾 Simpan Perubahan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection