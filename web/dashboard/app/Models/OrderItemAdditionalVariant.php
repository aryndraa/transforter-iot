<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItemAdditionalVariant extends Model
{
    protected $fillable = [
        'order_item_additional_id',
        'additional_variant_id',
    ];

    public function variant(): BelongsTo
    {
        return $this->belongsTo(AdditionalVariant::class);
    }

    public function orderItemAdditional(): BelongsTo
    {
        return $this->belongsTo(OrderItemAdditional::class);
    }
}
