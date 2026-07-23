<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
{
    return view('front-desk.customers');  // If you create this view
}
}
