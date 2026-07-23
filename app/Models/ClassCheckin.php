<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassCheckin extends Model
{
    protected $fillable = [
        'class_id',
        'customer_id',
        'checked_in_at',
    ];

    public function customer()
    {
        return $this->belongsTo(WalkinCustomer::class);
    }
}