@extends('layouts.dashboard')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">

                🚢 Detail Pelabuhan

            </h1>

            <p class="text-gray-500">

                Informasi lengkap pelabuhan.

            </p>

        </div>

        <a href="{{ route('ports.index') }}"
           class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-3 rounded-lg">

            ← Kembali

        </a>

    </div>

    <div class="bg-white rounded-xl shadow p-8">

        <table class="w-full">

            <tr class="border-b">
                <td class="font-semibold py-3 w-1/3">Negara</td>
                <td>{{ $port->country->country_name }}</td>
            </tr>

            <tr class="border-b">
                <td class="font-semibold py-3">Nama Pelabuhan</td>
                <td>{{ $port->port_name }}</td>
            </tr>

            <tr class="border-b">
                <td class="font-semibold py-3">Kode Pelabuhan</td>
                <td>{{ $port->port_code ?? '-' }}</td>
            </tr>

            <tr class="border-b">
                <td class="font-semibold py-3">Kota</td>
                <td>{{ $port->city ?? '-' }}</td>
            </tr>

            <tr class="border-b">
                <td class="font-semibold py-3">Latitude</td>
                <td>{{ $port->latitude }}</td>
            </tr>

            <tr class="border-b">
                <td class="font-semibold py-3">Longitude</td>
                <td>{{ $port->longitude }}</td>
            </tr>

            <tr class="border-b">
                <td class="font-semibold py-3">Status</td>
                <td>

                    @if($port->status=="Active")

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                            🟢 Active
                        </span>

                    @elseif($port->status=="Busy")

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                            🟡 Busy
                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                            🔴 Closed
                        </span>

                    @endif

                </td>
            </tr>

            <tr class="border-b">
                <td class="font-semibold py-3">Congestion Level</td>
                <td>{{ $port->congestion_level }}</td>
            </tr>

            <tr>
                <td class="font-semibold py-3">Deskripsi</td>
                <td>{{ $port->description ?? '-' }}</td>
            </tr>

        </table>

    </div>

</div>

@endsection