@extends('layouts.dashboard')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                ➕ Tambah Data Ekonomi
            </h1>

            <p class="text-gray-500">
                Tambahkan data ekonomi suatu negara.
            </p>

        </div>

        <a href="{{ route('economic-data.index') }}"
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

        <form action="{{ route('economic-data.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-2 gap-6">

                <div>

                    <label class="font-semibold block mb-2">

                        Negara

                    </label>

                    <select
                        name="country_id"
                        class="w-full border rounded-lg px-4 py-3">

                        <option value="">Pilih Negara</option>

                        @foreach($countries as $country)

                            <option value="{{ $country->id }}">

                                {{ $country->country_name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div>

                    <label class="font-semibold block mb-2">

                        Tahun

                    </label>

                    <input
                        type="number"
                        name="year"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="font-semibold block mb-2">

                        GDP

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="gdp"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="font-semibold block mb-2">

                        Inflasi

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="inflation"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="font-semibold block mb-2">

                        Populasi

                    </label>

                    <input
                        type="number"
                        name="population"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="font-semibold block mb-2">

                        Ekspor

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="exports"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="font-semibold block mb-2">

                        Impor

                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="imports"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

            </div>

            <div class="mt-8">

                <button
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                    💾 Simpan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection