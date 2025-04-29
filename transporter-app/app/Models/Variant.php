<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Variant extends Model
{
    protected $fillable = [
        'name',
        'additional_price'
    ];

    public function additionalVariants(): BelongsToMany
    {
        return $this->belongsToMany(Additional::class, 'additional_variant', 'variant_id', 'additional_id');
    }
}
