<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdditionalVariant extends Model
{
    protected $fillable = [
        'additional_id',
        'name',
        'image',
        'additional_price',
    ];

    public function additional(): BelongsTo
    {
        return $this->belongsTo(Additional::class);
    }


}
