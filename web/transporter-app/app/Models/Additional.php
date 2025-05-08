<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Additional extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function additionalVariants(): BelongsToMany
    {
        return $this->belongsToMany(Variant::class, 'additional_variant', 'additional_id', 'variant_id');
    }

    public function menuAdditional(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'menu_additional', 'additional_id', 'menu_id');
    }
}
