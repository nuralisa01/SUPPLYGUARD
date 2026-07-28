<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WorldBankService
{
    /**
     * Mengambil nilai indikator World Bank
     */
    private function getIndicator($countryCode, $indicator)
    {
        $url = "https://api.worldbank.org/v2/country/{$countryCode}/indicator/{$indicator}?format=json&per_page=1";

        $response = Http::timeout(30)->get($url);

        if (!$response->successful()) {
            return null;
        }

        $json = $response->json();

        if (!isset($json[1][0]['value'])) {
            return null;
        }

        return [
            'year' => $json[1][0]['date'],
            'value' => $json[1][0]['value'],
        ];
    }

    /**
     * Mengambil seluruh data ekonomi
     */
    public function getEconomicData($countryCode)
    {
        $gdp = $this->getIndicator($countryCode, 'NY.GDP.MKTP.CD');

        $inflation = $this->getIndicator($countryCode, 'FP.CPI.TOTL.ZG');

        $population = $this->getIndicator($countryCode, 'SP.POP.TOTL');

        $exports = $this->getIndicator($countryCode, 'NE.EXP.GNFS.CD');

        $imports = $this->getIndicator($countryCode, 'NE.IMP.GNFS.CD');

        return [

            'year' => $gdp['year']
                ?? $population['year']
                ?? now()->year,

            'gdp' => $gdp['value'] ?? null,

            'inflation' => $inflation['value'] ?? null,

            'population' => $population['value'] ?? null,

            'exports' => $exports['value'] ?? null,

            'imports' => $imports['value'] ?? null,

        ];
    }
}