<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'menu_category_id',
        'price',
        'description',
        'image'
    ];

    public function menuCategory()
    {
        return $this->belongsTo(MenuCategory::class);
    }
}
