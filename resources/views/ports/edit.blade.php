@extends('layouts.dashboard')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                ✏️ Edit Pelabuhan
            </h1>

            <p class="text-gray-500">
                Perbarui informasi pelabuhan untuk mendukung Supply Chain Risk Monitoring.
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

        <form action="{{ route('ports.update', $port) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6">

                <!-- Negara -->
                <div>

                    <label class="block font-semibold mb-2">
                        Negara
                    </label>

                    <select name="country_id"
                            class="w-full border rounded-lg px-4 py-3">

                        @foreach($countries as $country)

                            <option value="{{ $country->id }}"
                                {{ old('country_id', $port->country_id) == $country->id ? 'selected' : '' }}>

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
                        value="{{ old('port_name', $port->port_name) }}"
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
                        value="{{ old('port_code', $port->port_code) }}"
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
                        value="{{ old('city', $port->city) }}"
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
                        value="{{ old('latitude', $port->latitude) }}"
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
                        value="{{ old('longitude', $port->longitude) }}"
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

                        <option value="Active"
                            {{ old('status', $port->status) == 'Active' ? 'selected' : '' }}>
                            🟢 Active
                        </option>

                        <option value="Busy"
                            {{ old('status', $port->status) == 'Busy' ? 'selected' : '' }}>
                            🟡 Busy
                        </option>

                        <option value="Closed"
                            {{ old('status', $port->status) == 'Closed' ? 'selected' : '' }}>
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

                        <option value="Low"
                            {{ old('congestion_level', $port->congestion_level) == 'Low' ? 'selected' : '' }}>
                            Low
                        </option>

                        <option value="Medium"
                            {{ old('congestion_level', $port->congestion_level) == 'Medium' ? 'selected' : '' }}>
                            Medium
                        </option>

                        <option value="High"
                            {{ old('congestion_level', $port->congestion_level) == 'High' ? 'selected' : '' }}>
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
                    class="w-full border rounded-lg px-4 py-3">{{ old('description', $port->description) }}</textarea>

            </div>

            <div class="mt-8 flex justify-end gap-3">

                <a href="{{ route('ports.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                    Batal

                </a>

                <button
                    type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-3 rounded-lg shadow">

                    💾 Update Pelabuhan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection