<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RiskScoreController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ExchangeRateController;

Route::get('/countries', [CountryController::class, 'api']);
Route::get('/risk', [RiskScoreController::class, 'api']);
Route::get('/news', [NewsController::class, 'api']);
Route::get('/currency', [ExchangeRateController::class, 'api']);