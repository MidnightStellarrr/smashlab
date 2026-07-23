<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
use App\Models\FrontdeskBooking;
use App\Models\WalkinCustomer;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Sample data for dashboard
        $today = Carbon::today();
        
        $data = [
            'todayRevenue' => FrontdeskBooking::whereDate('booking_date', $today)->sum('total_amount'),
            'totalCheckins' => WalkinCustomer::count(),
            'occupiedCourts' => FrontdeskBooking::whereDate('booking_date', $today)
                ->where('status', 'confirmed')
                ->count(),
            'bookings' => FrontdeskBooking::with('customer')
                ->whereDate('booking_date', $today)
                ->get(),
        ];

        return view('front-desk.dashboard', $data);
    }
}