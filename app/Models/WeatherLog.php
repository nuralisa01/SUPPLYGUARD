<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WeatherLog extends Model
{
    protected $fillable = [
        'country_id',
        'temperature',
        'rainfall',
        'wind_speed',
        'humidity',
        'weather_code',
        'weather_description',
        'weather_date',
    ];

    /**
     * Relasi ke Country
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}