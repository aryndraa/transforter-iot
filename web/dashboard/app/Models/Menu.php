<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'menu_category_id',
        'price',
        'description',
        'image'
    ];

    public function menuCategory(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class);
    }

    public function additional(): BelongsToMany
    {
        return $this->belongsToMany(Additional::class, 'menu_additional', 'menu_id', 'additional_id');
    }
}
