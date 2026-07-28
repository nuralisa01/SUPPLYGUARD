<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\RiskScore;
use App\Models\WeatherLog;
use App\Models\EconomicData;
use App\Models\ExchangeRate;
use App\Models\News;
use App\Models\Port;
use Illuminate\Http\Request;

class RiskScoreController extends Controller
{

    public function index()
    {
        $riskScores = RiskScore::with('country')
            ->latest()
            ->paginate(10);

        return view('risk-scores.index', compact('riskScores'));
    }


    public function create()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('risk-scores.create', compact('countries'));
    }



    public function store(Request $request)
    {

        $request->validate([

            'country_id'=>'required|exists:countries,id',

            'calculated_at'=>'required|date'

        ]);


        $countryId = $request->country_id;



        /*
        |--------------------------------------------------------------------------
        | WEATHER SCORE
        |--------------------------------------------------------------------------
        */

        $weather = WeatherLog::where('country_id', $countryId)
    ->latest()
    ->first();

$weatherScore = 100;

if ($weather) {

    if ($weather->temperature >= 40)
        $weatherScore -= 30;

    if ($weather->rainfall >= 100)
        $weatherScore -= 25;

    if ($weather->wind_speed >= 50)
        $weatherScore -= 25;

    if ($weather->humidity >= 90)
        $weatherScore -= 20;

} else {

    $weatherScore = 50;

}

$weatherScore = max($weatherScore,0);



        /*
        |--------------------------------------------------------------------------
        | ECONOMIC SCORE
        |--------------------------------------------------------------------------
        */

        $economic = EconomicData::where('country_id', $countryId)
    ->latest()
    ->first();

$economicScore = 100;

if ($economic) {

    // Inflasi tinggi = risiko naik
    if ($economic->inflation >= 10)
        $economicScore -= 35;

    // GDP rendah = risiko naik
    if ($economic->gdp <= 5000)
        $economicScore -= 25;

    // Impor lebih besar dari ekspor = risiko naik
    if ($economic->exports < $economic->imports)
        $economicScore -= 20;

} else {

    $economicScore = 50;

}

$economicScore = max($economicScore, 0);



        /*
        |--------------------------------------------------------------------------
        | CURRENCY SCORE
        |--------------------------------------------------------------------------
        */

        $exchange = ExchangeRate::where('country_id', $countryId)
    ->latest()
    ->first();

$currencyScore = 100;

if ($exchange) {

    /*
    |--------------------------------------------------------------------------
    | Nilai tukar terhadap USD
    |--------------------------------------------------------------------------
    | Semakin besar nilainya berarti mata uang semakin lemah terhadap USD.
    */

    if ($exchange->exchange_rate > 20000) {

        $currencyScore -= 30;

    } elseif ($exchange->exchange_rate > 10000) {

        $currencyScore -= 20;

    } elseif ($exchange->exchange_rate > 5000) {

        $currencyScore -= 10;

    }

} else {

    $currencyScore = 50;

}

$currencyScore = max($currencyScore, 0);



        /*
        |--------------------------------------------------------------------------
        | NEWS SCORE
        |--------------------------------------------------------------------------
        */

        $totalNews = News::where('country_id', $countryId)
    ->count();

$negativeNews = News::where('country_id', $countryId)
    ->where('sentiment', 'Negative')
    ->count();

$positiveNews = News::where('country_id', $countryId)
    ->where('sentiment', 'Positive')
    ->count();

if ($totalNews > 0) {

    $negativePercentage = ($negativeNews / $totalNews) * 100;

    $positivePercentage = ($positiveNews / $totalNews) * 100;

    $newsScore = 100;

    // berita negatif mengurangi skor
    $newsScore -= $negativePercentage;

    // berita positif sedikit menaikkan skor
    $newsScore += ($positivePercentage * 0.2);

} else {

    $newsScore = 50;

}

// Batasi nilai antara 0 - 100
$newsScore = min(max(round($newsScore, 2), 0), 100);

/*
|--------------------------------------------------------------------------
| PORT SCORE
|--------------------------------------------------------------------------
*/

$port = Port::where('country_id', $countryId)
    ->latest()
    ->first();

$portScore = 100;

if ($port) {

    if ($port->status == 'Closed') {

        $portScore = 20;

    } elseif ($port->status == 'Busy') {

        $portScore = 70;

    }

    if ($port->congestion_level == 'High') {

        $portScore -= 30;

    } elseif ($port->congestion_level == 'Medium') {

        $portScore -= 15;

    }

} else {

    $portScore = 50;

}

$portScore = max($portScore, 0);



        /*
        |--------------------------------------------------------------------------
        | TOTAL RISK SCORE
        |--------------------------------------------------------------------------
        */

        $totalScore = round(
(
    ($weatherScore * 0.25) +
    ($economicScore * 0.25) +
    ($currencyScore * 0.15) +
    ($newsScore * 0.15) +
    ($portScore * 0.20)
), 2);



        /*
        |--------------------------------------------------------------------------
        | RISK LEVEL
        |--------------------------------------------------------------------------
        */

        if ($totalScore >= 80) {

    $riskLevel = "Low";

} elseif ($totalScore >= 60) {

    $riskLevel = "Medium";

} else {

    $riskLevel = "High";

}



        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATA
        |--------------------------------------------------------------------------
        */

        RiskScore::create([

            'country_id'=>$countryId,

            'weather_score'=>$weatherScore,

            'economic_score'=>$economicScore,

            'currency_score'=>$currencyScore,

            'news_score'=>$newsScore,

            'port_score' => $portScore,

            'total_score'=>$totalScore,

            'risk_level'=>$riskLevel,

            'calculated_at'=>$request->calculated_at

        ]);



        return redirect()
            ->route('risk-scores.index')
            ->with(
                'success',
                'Risk Score berhasil dihitung otomatis.'
            );

    }



    public function show(RiskScore $riskScore)
    {

        return redirect()
            ->route('risk-scores.index');

    }



    public function edit(RiskScore $riskScore)
    {

        $countries = Country::orderBy('country_name')
            ->get();

        return view(
            'risk-scores.edit',
            compact(
                'riskScore',
                'countries'
            )
        );

    }



    public function update(Request $request,RiskScore $riskScore)
    {

        return redirect()
            ->route('risk-scores.index')
            ->with(
                'success',
                'Risk Score dihitung otomatis dari data terbaru.'
            );

    }



    public function destroy(RiskScore $riskScore)
    {

        $riskScore->delete();

        return redirect()
            ->route('risk-scores.index')
            ->with(
                'success',
                'Risk Score berhasil dihapus.'
            );

    }

    /**
     * REST API - Data Risk Score
     */
    public function api()
    {
        return response()->json(
            RiskScore::with('country')
                ->latest()
                ->get()
        );
    }

}