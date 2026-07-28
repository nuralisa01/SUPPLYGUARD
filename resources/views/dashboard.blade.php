<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-blue-700">
            🌍 Supply Chain Risk Monitoring System
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-6">

            {{-- Pesan Berhasil --}}
            @if(session('success'))
                <div class="mb-6 p-4 bg-blue-100 border border-blue-400 text-blue-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Statistik Dashboard --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-gray-500 text-lg">🌍 Total Negara</h3>
                    <p class="text-4xl font-bold mt-3 text-blue-600">
                        {{ $totalCountries }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-gray-500 text-lg">📈 Data Ekonomi</h3>
                    <p class="text-4xl font-bold mt-3 text-blue-600">
                        {{ $totalEconomic }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-gray-500 text-lg">🌦 Data Cuaca</h3>
                    <p class="text-4xl font-bold mt-3 text-orange-500">
                        {{ $totalWeather }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-gray-500 text-lg">💱 Nilai Tukar</h3>
                    <p class="text-4xl font-bold mt-3 text-purple-600">
                        {{ $totalExchangeRate }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-gray-500 text-lg">📰 Berita</h3>
                    <p class="text-4xl font-bold mt-3 text-red-500">
                        {{ $totalNews }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-gray-500 text-lg">⚠ Risk Score</h3>
                    <p class="text-4xl font-bold mt-3 text-yellow-500">
                        {{ $totalRiskScore }}
                    </p>
                </div>

            </div>

            {{-- Tombol Sinkronisasi --}}
            <div class="mt-8">
                <form action="{{ route('countries.sync') }}" method="POST">
                    @csrf

                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
                        🔄 Sinkronkan Data Negara
                    </button>
                </form>
            </div>

            {{-- Daftar Negara --}}
            <div class="mt-10 bg-white rounded-xl shadow-md overflow-hidden">

                <div class="px-6 py-4 border-b bg-gray-50">
                    <h2 class="text-xl font-bold">
                        🌍 Daftar Negara
                    </h2>
                </div>

                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-blue-600 text-white">

                            <tr>

                                <th class="px-6 py-3 text-left">
                                    Kode
                                </th>

                                <th class="px-6 py-3 text-left">
                                    Negara
                                </th>

                                <th class="px-6 py-3 text-left">
                                    Ibu Kota
                                </th>

                                <th class="px-6 py-3 text-left">
                                    Region
                                </th>

                                <th class="px-6 py-3 text-left">
                                    Mata Uang
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($countries as $country)

                                <tr class="border-b hover:bg-gray-100">

                                    <td class="px-6 py-4">
                                        {{ $country->country_code }}
                                    </td>

                                    <td class="px-6 py-4 font-medium">
                                        {{ $country->country_name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $country->capital }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $country->region }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $country->currency }}
                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5" class="text-center py-10 text-gray-500">

                                        Belum ada data negara.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>