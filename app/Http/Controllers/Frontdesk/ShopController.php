<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
{
    return view('front-desk.shop');  // If you create this view
}
}
