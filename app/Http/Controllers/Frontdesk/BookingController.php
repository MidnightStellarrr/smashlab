<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('front-desk.bookings');  // If you create this view
    }
}
