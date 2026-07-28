<?php

namespace App\Services;

use App\Models\Country;
use App\Models\EconomicData;
use App\Models\WeatherLog;
use App\Models\ExchangeRate;
use App\Models\News;

class RiskScoreService
{
    /**
     * Hitung Risk Score suatu negara
     */
    public function calculate(Country $country): array
    {
        $score = 0;

        /*
        |--------------------------------------------------------------------------
        | Economic Data
        |--------------------------------------------------------------------------
        */

        $economic = EconomicData::where('country_id', $country->id)
            ->latest('year')
            ->first();

        if ($economic) {

            // GDP
            if ($economic->gdp >= 1000000000000) {
                $score += 25;
            } elseif ($economic->gdp >= 500000000000) {
                $score += 18;
            } elseif ($economic->gdp >= 100000000000) {
                $score += 10;
            } else {
                $score += 5;
            }

            // Inflation
            if ($economic->inflation < 3) {
                $score += 20;
            } elseif ($economic->inflation < 6) {
                $score += 15;
            } elseif ($economic->inflation < 10) {
                $score += 8;
            } else {
                $score += 3;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | Weather
        |--------------------------------------------------------------------------
        */

        $weather = WeatherLog::where('country_id', $country->id)
            ->latest()
            ->first();

        if ($weather) {

            if ($weather->rainfall == 0) {

                $score += 20;

            } elseif ($weather->rainfall <= 10) {

                $score += 15;

            } elseif ($weather->rainfall <= 30) {

                $score += 10;

            } else {

                $score += 5;

            }

        }

        /*
        |--------------------------------------------------------------------------
        | Exchange Rate
        |--------------------------------------------------------------------------
        */

        $exchange = ExchangeRate::where('country_id', $country->id)
            ->latest()
            ->first();

        if ($exchange) {

            if ($exchange->exchange_rate > 0) {

                $score += 20;

            }

        }

        /*
        |--------------------------------------------------------------------------
        | News
        |--------------------------------------------------------------------------
        */

        $news = News::where('country_id', $country->id)
            ->latest()
            ->first();

        if ($news) {

            switch (strtolower($news->sentiment)) {

                case 'positive':
                    $score += 15;
                    break;

                case 'neutral':
                    $score += 10;
                    break;

                case 'negative':
                    $score += 3;
                    break;

                default:
                    $score += 10;
                    break;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | Maksimum 100
        |--------------------------------------------------------------------------
        */

        $score = min($score, 100);

        /*
        |--------------------------------------------------------------------------
        | Risk Level
        |--------------------------------------------------------------------------
        */

        if ($score >= 80) {

            $level = 'Low';

        } elseif ($score >= 60) {

            $level = 'Medium';

        } else {

            $level = 'High';

        }

        return [
            'score' => $score,
            'risk_level' => $level,
        ];
    }
}