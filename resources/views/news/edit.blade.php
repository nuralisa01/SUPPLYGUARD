@extends('layouts.dashboard')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                ✏️ Edit Berita
            </h1>

            <p class="text-gray-500">
                Ubah data berita.
            </p>

        </div>

        <a href="{{ route('news.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-3 rounded-lg">

            ← Kembali

        </a>

    </div>

    @if ($errors->any())

        <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-6">

            <ul class="list-disc ml-5">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <div class="bg-white rounded-xl shadow p-8">

        <form action="{{ route('news.update', $news) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-semibold">
                        Negara
                    </label>

                    <select name="country_id" class="w-full border rounded-lg px-4 py-3">

                        @foreach($countries as $country)

                            <option
                                value="{{ $country->id }}"
                                {{ old('country_id', $news->country_id) == $country->id ? 'selected' : '' }}>

                                {{ $country->country_name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Sumber Berita
                    </label>

                    <input
                        type="text"
                        name="source"
                        value="{{ old('source', $news->source) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div class="col-span-2">

                    <label class="block mb-2 font-semibold">
                        Judul Berita
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title', $news->title) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div class="col-span-2">

                    <label class="block mb-2 font-semibold">
                        URL Berita
                    </label>

                    <input
                        type="url"
                        name="url"
                        value="{{ old('url', $news->url) }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Sentiment
                    </label>

                    <select name="sentiment" class="w-full border rounded-lg px-4 py-3">

                        <option value="positive" {{ old('sentiment', $news->sentiment) == 'positive' ? 'selected' : '' }}>
                            Positive
                        </option>

                        <option value="neutral" {{ old('sentiment', $news->sentiment) == 'neutral' ? 'selected' : '' }}>
                            Neutral
                        </option>

                        <option value="negative" {{ old('sentiment', $news->sentiment) == 'negative' ? 'selected' : '' }}>
                            Negative
                        </option>

                    </select>

                </div>

                <div>

                    <label class="block mb-2 font-semibold">
                        Tanggal Publish
                    </label>

                    <input
                        type="datetime-local"
                        name="published_at"
                        value="{{ old('published_at', $news->published_at ? \Carbon\Carbon::parse($news->published_at)->format('Y-m-d\TH:i') : '') }}"
                        class="w-full border rounded-lg px-4 py-3">

                </div>

            </div>

            <div class="mt-8">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                    💾 Update Berita

                </button>

            </div>

        </form>

    </div>

</div>

@endsection