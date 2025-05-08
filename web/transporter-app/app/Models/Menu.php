<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'category_menu_id',
        'status',
        'price',
        'photo',
    ];

    public function menuAdditional(): BelongsToMany
    {
        return $this->belongsToMany(Additional::class, 'menu_additional', 'menu_id', 'additional_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class);
    }
}
