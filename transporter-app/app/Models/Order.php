<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'table_id',
        'name',
        'price',
        'tax',
        'total',
    ];

    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }
}
