<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $fillable = [
        'price_id',
        'code',
        'free_days',
        'was_used',
        'created_at',
        'updated_at',
    ];

    public function price()
    {
        return $this->belongsTo(CouponPrices::class);
    }
}
