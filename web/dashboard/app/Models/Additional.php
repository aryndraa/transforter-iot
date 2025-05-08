<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Additional extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function variants(): HasMany
    {
        return $this->hasMany(AdditionalVariant::class);
    }

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'menu_additional', 'additional_id', 'menu_id');
    }
}
