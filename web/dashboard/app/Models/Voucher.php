<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voucher extends Model
{
    protected $fillable = [
        'code',
        'name',
        'description',
        'quantity',
        'discount',
        'expired_date'
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
