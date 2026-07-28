<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EconomicData extends Model
{
    protected $table = 'economic_data';

    protected $fillable = [
        'country_id',
        'year',
        'gdp',
        'inflation',
        'population',
        'exports',
        'imports',
    ];

    /**
     * Relasi ke Country
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}