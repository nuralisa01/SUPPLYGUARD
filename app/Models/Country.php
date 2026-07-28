<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    protected $fillable = [
        'country_code',
        'country_name',
        'capital',
        'region',
        'currency',
        'language',
        'latitude',
        'longitude',
        'flag',
    ];

    /**
     * Relasi ke data ekonomi
     */
    public function economicData(): HasMany
    {
        return $this->hasMany(EconomicData::class);
    }

    /**
     * Relasi ke data cuaca
     */
    public function weatherLogs(): HasMany
    {
        return $this->hasMany(WeatherLog::class);
    }

    /**
     * Relasi ke data kurs mata uang
     */
    public function exchangeRates(): HasMany
    {
        return $this->hasMany(ExchangeRate::class);
    }

    /**
     * Relasi ke data pelabuhan
     */
    public function ports(): HasMany
    {
        return $this->hasMany(Port::class);
    }

    /**
     * Relasi ke berita
     */
    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    /**
     * Relasi ke hasil risk scoring
     */
    public function riskScores(): HasMany
    {
        return $this->hasMany(RiskScore::class);
    }

    /**
     * Relasi many-to-many dengan User melalui watchlists
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'watchlists');
    }
}