<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalkinCustomer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
    ];

    public function bookings()
    {
        return $this->hasMany(FrontdeskBooking::class);
    }

    public function rentals()
    {
        return $this->hasMany(GearRental::class);
    }

    public function orders()
    {
        return $this->hasMany(ShopOrder::class);
    }

    public function checkins()
    {
        return $this->hasMany(ClassCheckin::class);
    }
}