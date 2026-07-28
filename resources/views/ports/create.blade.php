@extends('layouts.dashboard')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                🚢 Tambah Pelabuhan
            </h1>

            <p class="text-gray-500">
                Tambahkan data pelabuhan untuk mendukung Supply Chain Risk Monitoring.
            </p>
        </div>

        <a href="{{ route('ports.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-3 rounded-lg">

            ← Kembali

        </a>

    </div>

    @if ($errors->any())

    <div class="mb-5 bg-red-100 border border-red-300 text-red-700 rounded-lg p-4">

        <ul class="list-disc ml-5">

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif

    <div class="bg-white rounded-xl shadow p-8">

        <form action="{{ route('ports.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-2 gap-6">

                <!-- Negara -->
                <div>

                    <label class="block font-semibold mb-2">
                        Negara
                    </label>

                    <select name="country_id"
                            class="w-full border rounded-lg px-4 py-3">

                        <option value="">
                            -- Pilih Negara --
                        </option>

                        @foreach($countries as $country)

                            <option value="{{ $country->id }}">

                                {{ $country->country_name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- Nama Pelabuhan -->
                <div>

                    <label class="block font-semibold mb-2">

                        Nama Pelabuhan

                    </label>

                    <input
                        type="text"
                        name="port_name"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Kode -->
                <div>

                    <label class="block font-semibold mb-2">

                        Kode Pelabuhan

                    </label>

                    <input
                        type="text"
                        name="port_code"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Kota -->
                <div>

                    <label class="block font-semibold mb-2">

                        Kota

                    </label>

                    <input
                        type="text"
                        name="city"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Latitude -->
                <div>

                    <label class="block font-semibold mb-2">

                        Latitude

                    </label>

                    <input
                        type="number"
                        step="0.0000001"
                        name="latitude"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Longitude -->
                <div>

                    <label class="block font-semibold mb-2">

                        Longitude

                    </label>

                    <input
                        type="number"
                        step="0.0000001"
                        name="longitude"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <!-- Status -->
                <div>

                    <label class="block font-semibold mb-2">

                        Status Pelabuhan

                    </label>

                    <select
                        name="status"
                        class="w-full border rounded-lg px-4 py-3">

                        <option value="Active">
                            🟢 Active
                        </option>

                        <option value="Busy">
                            🟡 Busy
                        </option>

                        <option value="Closed">
                            🔴 Closed
                        </option>

                    </select>

                </div>

                <!-- Congestion -->
                <div>

                    <label class="block font-semibold mb-2">

                        Tingkat Kemacetan

                    </label>

                    <select
                        name="congestion_level"
                        class="w-full border rounded-lg px-4 py-3">

                        <option value="Low">
                            Low
                        </option>

                        <option value="Medium">
                            Medium
                        </option>

                        <option value="High">
                            High
                        </option>

                    </select>

                </div>

            </div>

            <!-- Deskripsi -->

            <div class="mt-6">

                <label class="block font-semibold mb-2">

                    Deskripsi

                </label>

                <textarea
                    name="description"
                    rows="4"
                    class="w-full border rounded-lg px-4 py-3"></textarea>

            </div>

            <div class="mt-8 flex justify-end">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg shadow">

                    💾 Simpan Pelabuhan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection