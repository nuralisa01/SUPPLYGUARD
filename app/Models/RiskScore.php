<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiskScore extends Model
{
    protected $fillable = [

        'country_id',

        'weather_score',

        'economic_score',

        'currency_score',

        'news_score',

        'port_score',

        'total_score',

        'risk_level',

        'calculated_at',

    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}