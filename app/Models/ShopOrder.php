<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    protected $fillable = [
        'customer_id',
        'items',
        'total_amount',
        'payment_method',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    public function customer()
    {
        return $this->belongsTo(WalkinCustomer::class);
    }
}