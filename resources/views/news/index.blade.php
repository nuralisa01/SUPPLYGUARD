@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            📰 News
        </h1>

        <p class="text-gray-500">
            Daftar berita dari setiap negara.
        </p>

    </div>

    <div class="flex items-center gap-3">

        <form action="{{ route('news.sync') }}" method="POST" class="flex gap-3">

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

                📰 Sync News

            </button>

        </form>

        <a href="{{ route('news.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

            + Tambah Berita

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

                <th class="px-4 py-3 text-left">
                    Judul Berita
                </th>

                <th class="px-4 py-3 text-left">
                    Sumber
                </th>

                <th class="px-4 py-3 text-center">
                    Sentiment
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

        @forelse($news as $item)

            <tr class="border-b hover:bg-gray-50">

                <td class="px-4 py-3 font-medium">

                    {{ $item->country->country_name ?? '-' }}

                </td>

                <td class="px-4 py-3">

                    <a
                        href="{{ $item->url }}"
                        target="_blank"
                        class="text-blue-600 hover:underline">

                        {{ \Illuminate\Support\Str::limit($item->title,60) }}

                    </a>

                </td>

                <td class="px-4 py-3">

                    {{ $item->source }}

                </td>

                <td class="px-4 py-3 text-center">

                    @if($item->sentiment=='Positive')

                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">

                            Positive

                        </span>

                    @elseif($item->sentiment=='Negative')

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">

                            Negative

                        </span>

                    @else

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">

                            Neutral

                        </span>

                    @endif

                </td>

                <td class="px-4 py-3 text-center">

                    {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}

                </td>

                <td class="px-4 py-3">

                    <div class="flex justify-center gap-2">

                        <a href="{{ route('news.show',$item) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded">

                            Detail

                        </a>

                        <a href="{{ route('news.edit',$item) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

                            Edit

                        </a>

                        <form
                            action="{{ route('news.destroy',$item) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin ingin menghapus berita ini?')"
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

                    Belum ada data berita.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $news->links() }}

</div>

@endsection