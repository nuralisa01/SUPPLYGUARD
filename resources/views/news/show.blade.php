@extends('layouts.dashboard')

@section('content')

<div class="mb-6">

    <a href="{{ route('news.index') }}"
       class="text-green-600 hover:text-green-800 font-semibold">

        ← Kembali ke News

    </a>

</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">

    <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white p-8">

        <h1 class="text-3xl font-bold">
            📰 Detail News
        </h1>

        <p class="mt-2 text-green-100">

            {{ $news->country->country_name ?? '-' }}

        </p>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-8">

        <div class="bg-blue-50 rounded-lg p-5 border-l-4 border-blue-500">

            <p class="text-gray-500">🌍 Negara</p>

            <h2 class="text-2xl font-bold">

                {{ $news->country->country_name ?? '-' }}

            </h2>

        </div>

        <div class="bg-yellow-50 rounded-lg p-5 border-l-4 border-yellow-500">

            <p class="text-gray-500">🏢 Sumber Berita</p>

            <h2 class="text-2xl font-bold">

                {{ $news->source ?? '-' }}

            </h2>

        </div>

        <div class="md:col-span-2 bg-white rounded-lg p-5 border">

            <p class="text-gray-500 mb-2">📰 Judul Berita</p>

            <h2 class="text-xl font-bold">

                {{ $news->title }}

            </h2>

        </div>

        <div class="bg-purple-50 rounded-lg p-5 border-l-4 border-purple-500">

            <p class="text-gray-500">😊 Sentiment</p>

            @if($news->sentiment == 'positive')

                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-semibold">

                    Positive

                </span>

            @elseif($news->sentiment == 'negative')

                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full font-semibold">

                    Negative

                </span>

            @else

                <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full font-semibold">

                    Neutral

                </span>

            @endif

        </div>

        <div class="bg-cyan-50 rounded-lg p-5 border-l-4 border-cyan-500">

            <p class="text-gray-500">📅 Tanggal Publikasi</p>

            <h2 class="text-2xl font-bold">

                {{ $news->published_at ? \Carbon\Carbon::parse($news->published_at)->format('d M Y') : '-' }}

            </h2>

        </div>

        <div class="md:col-span-2 bg-green-50 rounded-lg p-5 border-l-4 border-green-500">

            <p class="text-gray-500 mb-2">🔗 Link Berita</p>

            <a href="{{ $news->url }}"
               target="_blank"
               class="text-blue-600 hover:underline break-all">

                {{ $news->url }}

            </a>

        </div>

    </div>

</div>

<div class="flex gap-3 mt-6">

    <a href="{{ route('news.edit', $news->id) }}"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg shadow">

        ✏ Edit

    </a>

    <a href="{{ $news->url }}"
       target="_blank"
       class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow">

        🌐 Buka Sumber Berita

    </a>

    <a href="{{ route('news.index') }}"
       class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-lg shadow">

        ← Kembali

    </a>

</div>

@endsection