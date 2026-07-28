<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\EconomicData;
use App\Models\WeatherLog;
use App\Models\ExchangeRate;
use App\Models\News;
use App\Models\RiskScore;
use App\Models\Watchlist;
use App\Models\Port;

class DashboardController extends Controller
{
    public function index()
    {
        // ==========================
        // Statistik Dashboard
        // ==========================

        $countries = Country::count();
        $economy   = EconomicData::count();
        $weather   = WeatherLog::count();
        $exchange  = ExchangeRate::count();
        $news      = News::count();
        $risk      = RiskScore::count();
        $watchlist = Watchlist::count();

        // ==========================
        // Statistik Pelabuhan
        // ==========================

        $totalPorts = Port::count();

        $activePorts = Port::where('status', 'Active')->count();

        $busyPorts = Port::where('status', 'Busy')->count();

        $closedPorts = Port::where('status', 'Closed')->count();

        $highCongestion = Port::where('congestion_level', 'High')->count();

        // ==========================
        // Top 5 Risk Score
        // ==========================

        $topRisk = RiskScore::with('country')
            ->orderByDesc('total_score')
            ->take(5)
            ->get();

        // ==========================
        // 5 Berita Terbaru
        // ==========================

        $latestNews = News::with('country')
            ->latest()
            ->take(5)
            ->get();

        // ==========================
        // High Congestion Ports
        // ==========================

        $highCongestionPorts = Port::with('country')
            ->where('congestion_level', 'High')
            ->orderBy('status')
            ->take(5)
            ->get();

        // ==========================
        // 5 Watchlist Terbaru
        // ==========================

        $latestWatchlist = Watchlist::with('country')
            ->latest()
            ->take(5)
            ->get();

        // ==========================
        // Daftar Negara
        // ==========================

        $countryList = Country::orderBy('country_name', 'asc')->get();

        // ==========================
        // Data Grafik Risk Score
        // ==========================

        $riskChart = RiskScore::with('country')
            ->orderByDesc('total_score')
            ->take(10)
            ->get();

        // ==========================
        // Data Grafik GDP
        // ==========================

        $gdpChart = EconomicData::with('country')
            ->latest()
            ->take(10)
            ->get();

        // ==========================
        // Data Grafik Inflasi
        // ==========================

        $inflationChart = EconomicData::with('country')
            ->latest()
            ->take(10)
            ->get();

        // ==========================
        // Data Grafik Exchange Rate
        // ==========================

        $exchangeChart = ExchangeRate::with('country')
            ->latest()
            ->take(10)
            ->get();

        // ==========================
        // Data Map Risk
        // ==========================

        $mapRisk = RiskScore::with('country')->get();

        // ==========================
        // Data Map Port
        // ==========================

        $mapPorts = Port::with('country')->get();

        // ==========================
        // Data Pie Chart
        // ==========================

        $highCount = RiskScore::where('risk_level', 'High')->count();

        $mediumCount = RiskScore::where('risk_level', 'Medium')->count();

        $lowCount = RiskScore::where('risk_level', 'Low')->count();

        // ==========================
        // Kirim ke View
        // ==========================

        return view('dashboard.index', compact(
            'countries',
            'economy',
            'weather',
            'exchange',
            'news',
            'risk',
            'watchlist',

            'totalPorts',
            'activePorts',
            'busyPorts',
            'closedPorts',
            'highCongestion',
            'highCongestionPorts',

            'topRisk',
            'latestNews',
            'latestWatchlist',
            'countryList',
            'riskChart',
            'gdpChart',
            'inflationChart',
            'exchangeChart',
            'mapRisk',
            'mapPorts',
            'highCount',
            'mediumCount',
            'lowCount'
        ));
    }
}
