@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            💱 Exchange Rate
        </h1>

        <p class="text-gray-500">
            Data nilai tukar mata uang setiap negara.
        </p>

    </div>

    <div class="flex items-center gap-3">

        <form action="{{ route('exchange-rates.sync') }}" method="POST" class="flex gap-3">

            @csrf

            <select
                name="country_id"
                required
                class="border rounded-lg px-4 py-3">

                <option value="">
                    -- Pilih Negara --
                </option>

                @foreach(\App\Models\Country::orderBy('country_name')->get() as $country)

                    <option value="{{ $country->id }}">

                        {{ $country->country_name }}

                    </option>

                @endforeach

            </select>

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow">

                💱 Sync Exchange Rate

            </button>

        </form>

        <a href="{{ route('exchange-rates.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

            + Tambah Data

        </a>

    </div>

</div>

@if(session('success'))

<div class="mb-5 bg-blue-100 border border-blue-300 text-blue-700 p-4 rounded-lg">

    {{ session('success') }}

</div>

@endif

@if(session('error'))

<div class="mb-5 bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg">

    {{ session('error') }}

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
                    Base Currency
                </th>

                <th class="px-4 py-3 text-center">
                    Target Currency
                </th>

                <th class="px-4 py-3 text-center">
                    Exchange Rate
                </th>

                <th class="px-4 py-3 text-center">
                    Tanggal
                </th>

                <th class="px-4 py-3 text-center">
                    Aksi
                </th>

            </tr>

        </thead>

        <tbody>

        @forelse($exchangeRates as $rate)

            <tr class="border-b hover:bg-gray-50">

                <td class="px-4 py-3 font-medium">

                    {{ $rate->country->country_name }}

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $rate->base_currency }}

                </td>

                <td class="px-4 py-3 text-center">

                    {{ $rate->target_currency }}

                </td>

                <td class="px-4 py-3 text-center text-blue-600 font-bold">

                    {{ number_format($rate->exchange_rate,6) }}

                </td>

                <td class="px-4 py-3 text-center">

                    {{ \Carbon\Carbon::parse($rate->rate_date)->format('d M Y') }}

                </td>

                <td class="px-4 py-3">

                    <div class="flex justify-center gap-2">

                        <a href="{{ route('exchange-rates.show',$rate) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded">

                            Detail

                        </a>

                        <a href="{{ route('exchange-rates.edit',$rate) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

                            Edit

                        </a>

                        <form
                            action="{{ route('exchange-rates.destroy',$rate) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button
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

                <td colspan="6"
                    class="text-center py-10 text-gray-500">

                    Belum ada data Exchange Rate.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $exchangeRates->links() }}

</div>

@endsection