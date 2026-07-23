<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrontdeskBooking extends Model
{
    protected $fillable = [
        'customer_id',
        'court_id',
        'booking_date',
        'start_time',
        'end_time',
        'status',
        'payment_method',
        'total_amount',
        'notes',
    ];

    public function customer()
    {
        return $this->belongsTo(WalkinCustomer::class);
    }
}