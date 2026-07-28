@extends('layouts.dashboard')

@section('content')

<div class="max-w-4xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                ✏️ Edit Negara
            </h1>

            <p class="text-gray-500">
                Ubah data negara yang dipilih.
            </p>

        </div>

        <a href="{{ route('countries.index') }}"
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

        <form action="{{ route('countries.update', $country->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-semibold">
                        Kode Negara
                    </label>

                    <input
                        type="text"
                        name="country_code"
                        value="{{ old('country_code',$country->country_code) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Nama Negara
                    </label>

                    <input
                        type="text"
                        name="country_name"
                        value="{{ old('country_name',$country->country_name) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Ibu Kota
                    </label>

                    <input
                        type="text"
                        name="capital"
                        value="{{ old('capital',$country->capital) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Region
                    </label>

                    <input
                        type="text"
                        name="region"
                        value="{{ old('region',$country->region) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Mata Uang
                    </label>

                    <input
                        type="text"
                        name="currency"
                        value="{{ old('currency',$country->currency) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Bahasa
                    </label>

                    <input
                        type="text"
                        name="language"
                        value="{{ old('language',$country->language) }}"
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