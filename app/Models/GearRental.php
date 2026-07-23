<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GearRental extends Model
{
    protected $fillable = [
        'customer_id',
        'gear_name',
        'rental_time',
        'return_time',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(WalkinCustomer::class);
    }
}