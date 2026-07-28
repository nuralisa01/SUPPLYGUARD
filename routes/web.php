<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EconomicDataController;
use App\Http\Controllers\WeatherLogController;
use App\Http\Controllers\ExchangeRateController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RiskScoreController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\PortController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Countries
    |--------------------------------------------------------------------------
    */

    Route::resource('countries', CountryController::class);

    Route::get('/country-comparison', [CountryController::class, 'comparison'])
        ->name('countries.comparison');

    Route::post('/country-comparison', [CountryController::class, 'compare'])
        ->name('countries.compare');

    Route::post('/countries/sync', [CountryController::class, 'sync'])
        ->name('countries.sync');

    /*
    |--------------------------------------------------------------------------
    | Ports
    |--------------------------------------------------------------------------
    */

    Route::resource('ports', PortController::class);

    Route::get('/ports/filter/{country}', [PortController::class, 'filter'])
        ->name('ports.filter');

    /*
    |--------------------------------------------------------------------------
    | Economic Data
    |--------------------------------------------------------------------------
    */

    Route::resource('economic-data', EconomicDataController::class);

    Route::post('/economic-data/sync', [EconomicDataController::class, 'sync'])
        ->name('economic-data.sync');

    /*
    |--------------------------------------------------------------------------
    | Weather
    |--------------------------------------------------------------------------
    */

    Route::resource('weather', WeatherLogController::class);

    Route::post('/weather/sync', [WeatherLogController::class, 'sync'])
        ->name('weather.sync');

    /*
    |--------------------------------------------------------------------------
    | Exchange Rate
    |--------------------------------------------------------------------------
    */

    Route::resource('exchange-rates', ExchangeRateController::class);

    Route::post('/exchange-rates/sync', [ExchangeRateController::class, 'sync'])
        ->name('exchange-rates.sync');

    /*
    |--------------------------------------------------------------------------
    | News
    |--------------------------------------------------------------------------
    */

    Route::resource('news', NewsController::class);

    Route::post('/news/sync', [NewsController::class, 'sync'])
        ->name('news.sync');

    /*
    |--------------------------------------------------------------------------
    | Risk Score
    |--------------------------------------------------------------------------
    */

    Route::resource('risk-scores', RiskScoreController::class);

    /*
    |--------------------------------------------------------------------------
    | Watchlist
    |--------------------------------------------------------------------------
    */

    Route::resource('watchlists', WatchlistController::class);

    Route::post('/watchlists/add/{country}', [WatchlistController::class, 'addFromRisk'])
        ->name('watchlists.add');

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';