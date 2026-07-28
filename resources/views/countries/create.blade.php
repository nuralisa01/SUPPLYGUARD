<x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-2xl text-green-700">
            ➕ Tambah Negara
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-4xl mx-auto">

            <div class="bg-white shadow rounded-xl p-8">

                @if ($errors->any())

                    <div class="mb-5 bg-red-100 border border-red-400 text-red-700 p-4 rounded">

                        <ul class="list-disc ml-5">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="{{ route('countries.store') }}" method="POST">

                    @csrf

                    <div class="grid grid-cols-2 gap-6">

                        <div>

                            <label class="block mb-2 font-semibold">

                                Kode Negara

                            </label>

                            <input
                                type="text"
                                name="country_code"
                                value="{{ old('country_code') }}"
                                class="w-full border rounded-lg p-3">

                        </div>

                        <div>

                            <label class="block mb-2 font-semibold">

                                Nama Negara

                            </label>

                            <input
                                type="text"
                                name="country_name"
                                value="{{ old('country_name') }}"
                                class="w-full border rounded-lg p-3">

                        </div>

                        <div>

                            <label class="block mb-2 font-semibold">

                                Ibu Kota

                            </label>

                            <input
                                type="text"
                                name="capital"
                                value="{{ old('capital') }}"
                                class="w-full border rounded-lg p-3">

                        </div>

                        <div>

                            <label class="block mb-2 font-semibold">

                                Region

                            </label>

                            <input
                                type="text"
                                name="region"
                                value="{{ old('region') }}"
                                class="w-full border rounded-lg p-3">

                        </div>

                        <div>

                            <label class="block mb-2 font-semibold">

                                Mata Uang

                            </label>

                            <input
                                type="text"
                                name="currency"
                                value="{{ old('currency') }}"
                                class="w-full border rounded-lg p-3">

                        </div>

                        <div>

                            <label class="block mb-2 font-semibold">

                                Bahasa

                            </label>

                            <input
                                type="text"
                                name="language"
                                value="{{ old('language') }}"
                                class="w-full border rounded-lg p-3">

                        </div>

                    </div>

                    <div class="mt-8 flex gap-3">

                        <button
                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                            Simpan

                        </button>

                        <a
                            href="{{ route('countries.index') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                            Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>