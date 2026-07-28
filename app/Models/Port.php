<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Port extends Model
{
    protected $fillable = [

        'country_id',

        'port_name',

        'port_code',

        'city',

        'latitude',

        'longitude',

        'status',

        'congestion_level',

        'description',

    ];

    /**
     * Relasi ke Country
     */

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}