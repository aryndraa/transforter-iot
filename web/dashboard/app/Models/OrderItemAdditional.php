<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderItemAdditional extends Model
{
    protected $fillable = [
        'order_item_id',
        'additional_id',
    ];

    public function orderItem(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function additional(): BelongsTo
    {
        return $this->belongsTo(Additional::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(OrderItemAdditionalVariant::class);
    }
}
