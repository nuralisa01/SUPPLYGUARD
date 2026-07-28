<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('country')
            ->latest()
            ->paginate(10);

        return view('news.index', compact('news'));
    }

    public function create()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('news.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_id'   => 'required|exists:countries,id',
            'title'        => 'required|max:255',
            'source'       => 'nullable|max:255',
            'url'          => 'required|url',
            'sentiment'    => 'nullable|max:50',
            'published_at' => 'nullable|date',
        ]);

        News::create($request->all());

        return redirect()
            ->route('news.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        $countries = Country::orderBy('country_name')->get();

        return view('news.edit', compact('news', 'countries'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'country_id'   => 'required|exists:countries,id',
            'title'        => 'required|max:255',
            'source'       => 'nullable|max:255',
            'url'          => 'required|url',
            'sentiment'    => 'nullable|max:50',
            'published_at' => 'nullable|date',
        ]);

        $news->update($request->all());

        return redirect()
            ->route('news.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()
            ->route('news.index')
            ->with('success', 'Berita berhasil dihapus.');
    }

    /**
     * ==========================
     * Sync News API
     * ==========================
     */
    public function sync(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id'
        ]);

        $country = Country::findOrFail($request->country_id);

        $apiKey = env('NEWS_API_KEY');

        $keyword = '"' . $country->country_name . '" AND ('
    . 'supply chain OR logistics OR export OR import OR shipping OR trade OR manufacturing OR port'
    . ')';

$url = "https://newsapi.org/v2/everything?"
    . http_build_query([
        'q' => $keyword,
        'language' => 'en',
        'sortBy' => 'publishedAt',
        'pageSize' => 10,
        'apiKey' => $apiKey,
    ]);

        $response = Http::get($url);

        if (!$response->successful()) {
            return back()->with('error', 'News API gagal diakses.');
        }

        $articles = $response->json()['articles'] ?? [];

        if (count($articles) == 0) {
            return back()->with('error', 'Tidak ada berita ditemukan.');
        }

        foreach ($articles as $article) {
             
        $text = strtolower(
    ($article['title'] ?? '') . ' ' .
    ($article['description'] ?? '')
);

$keywords = [
    'supply chain',
    'logistics',
    'shipping',
    'export',
    'import',
    'trade',
    'manufacturing',
    'factory',
    'cargo',
    'freight',
    'port',
];

$match = false;

foreach ($keywords as $word) {
    if (str_contains($text, $word)) {
        $match = true;
        break;
    }
}

if (!$match) {
    continue;
}

            News::updateOrCreate(
                [
                    'url' => $article['url']
                ],
                [
                    'country_id' => $country->id,
                    'title' => $article['title'] ?? '-',
                    'source' => $article['source']['name'] ?? '-',
                    'sentiment' => 'Neutral',
                    'published_at' => isset($article['publishedAt'])
                        ? date('Y-m-d H:i:s', strtotime($article['publishedAt']))
                        : now(),
                ]
            );
        }

        return redirect()
            ->route('news.index')
            ->with('success', 'Berita berhasil disinkronisasi.');
    }

    /**
     * REST API - Data News
     */
    public function api()
    {
        return response()->json(
            News::with('country')
                ->latest()
                ->get()
        );
    }
}
