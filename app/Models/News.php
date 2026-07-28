<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
        'country_id',
        'title',
        'source',
        'url',
        'sentiment',
        'published_at',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}