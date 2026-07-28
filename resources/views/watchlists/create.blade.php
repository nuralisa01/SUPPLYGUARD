@extends('layouts.dashboard')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                ⭐ Tambah Watchlist
            </h1>

            <p class="text-gray-500">
                Tambahkan negara yang ingin dipantau.
            </p>

        </div>

        <a href="{{ route('watchlists.index') }}"
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

        <form action="{{ route('watchlists.store') }}" method="POST">

            @csrf

            <div>

                <label class="block mb-2 font-semibold">

                    Negara

                </label>

                <select
                    name="country_id"
                    class="w-full border rounded-lg px-4 py-3">

                    <option value="">-- Pilih Negara --</option>

                    @foreach($countries as $country)

                    <option
                        value="{{ $country->id }}"
                        {{ old('country_id') == $country->id ? 'selected' : '' }}>

                        {{ $country->country_name }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div class="mt-8">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                    💾 Simpan Watchlist

                </button>

            </div>

        </form>

    </div>

</div>

@endsection