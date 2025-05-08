<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
}
