@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            ⚠ Risk Score
        </h1>

        <p class="text-gray-500">
            Daftar nilai risiko supply chain berdasarkan masing-masing negara.
        </p>

    </div>

    <a href="{{ route('risk-scores.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

        + Tambah Risk Score

    </a>

</div>

@if(session('success'))

<div class="mb-5 bg-blue-100 border border-blue-300 text-blue-700 p-4 rounded-lg">

    {{ session('success') }}

</div>

@endif

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-blue-600 text-white">

            <tr>

    <th class="px-4 py-3 text-left">
        Negara
    </th>

    <th class="px-4 py-3 text-center">
        Weather
    </th>

    <th class="px-4 py-3 text-center">
        Economic
    </th>

    <th class="px-4 py-3 text-center">
        Currency
    </th>

    <th class="px-4 py-3 text-center">
        News
    </th>

    <th class="px-4 py-3 text-center">
        Port
    </th>

    <th class="px-4 py-3 text-center">
        Total Score
    </th>

    <th class="px-4 py-3 text-center">
        Risk Level
    </th>

    <th class="px-4 py-3 text-center">
        Tanggal
    </th>

    <th class="px-4 py-3 text-center">
        Status
    </th>

    <th class="px-4 py-3 text-center">
        Aksi
    </th>

</tr>

        </thead>

        <tbody>

        @forelse($riskScores as $risk)

            <tr class="border-b hover:bg-gray-50">

                <td class="px-4 py-3 font-medium">
    {{ $risk->country->country_name }}
</td>

<td class="px-4 py-3 text-center">
    {{ number_format($risk->weather_score,2) }}
</td>

<td class="px-4 py-3 text-center">
    {{ number_format($risk->economic_score,2) }}
</td>

<td class="px-4 py-3 text-center">
    {{ number_format($risk->currency_score,2) }}
</td>

<td class="px-4 py-3 text-center">
    {{ number_format($risk->news_score,2) }}
</td>

<td class="px-4 py-3 text-center">
    {{ number_format($risk->port_score,2) }}
</td>

<td class="px-4 py-3 text-center font-bold text-blue-600">
    {{ number_format($risk->total_score,2) }}
</td>

                <td class="px-4 py-3 text-center">

                    @if($risk->risk_level == 'Low')

                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-semibold">
                            🟢 Low
                        </span>

                    @elseif($risk->risk_level == 'Medium')

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full font-semibold">
                            🟡 Medium
                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full font-semibold">
                            🔴 High
                        </span>

                    @endif

                </td>

                <td class="px-4 py-3 text-center">
                    {{ \Carbon\Carbon::parse($risk->calculated_at)->format('d-m-Y') }}
                </td>

                <td class="px-4 py-3 text-center">

                    @if($risk->risk_level == 'High')

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full font-semibold">
                            🚨 Perlu Dipantau
                        </span>

                    @elseif($risk->risk_level == 'Medium')

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full font-semibold">
                            👀 Dipantau
                        </span>

                    @else

                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-semibold">
                            ✅ Aman
                        </span>

                    @endif

                </td>

                <td class="px-4 py-3">

                    <div class="flex flex-wrap justify-center gap-2">

                        <!-- Watchlist -->
                        <form action="{{ route('watchlists.add', $risk->country) }}"
                              method="POST">

                            @csrf

                            <button
                                type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded">

                                ⭐ Watchlist

                            </button>

                        </form>

                        <!-- Edit -->
                        <a href="{{ route('risk-scores.edit', $risk) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

                            Edit

                        </a>

                        <!-- Hapus -->
                        <form action="{{ route('risk-scores.destroy', $risk) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin ingin menghapus data ini?')"
                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="11"
                    class="text-center py-10 text-gray-500">

                    Belum ada data Risk Score.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $riskScores->links() }}

</div>

@endsection