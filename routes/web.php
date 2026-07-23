<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('user.app'); 
});

Route::get('/about_us', function () {
    return view('user.about_us');     
});

Route::get('/contact', function () {
    return view('user.contact');  
});

Route::get('/shop', function () {
    return view('user.shop');
})->name('shop');

Route::get('/classes', function () {
    return view('user.classes');
})->name('classes');

Route::get('/book_now', function () {
    return view('user.book_now');
})->name('book_now');

Route::get('/classes/beginner_class', function () {
    return view('user.classes.beginner_class');   
});

Route::get('/classes/intermediate_class', function () {
    return view('user.classes.intermediate_class');   
});

Route::get('/classes/advanced_class', function () {
    return view('user.classes.advanced_class');   
});

Route::get('/classes/enroll', function () {
    return view('user.classes.enroll');
})->name('classes.enroll');

Route::get('/classes/enroll/{class?}', function ($class = null) {
    return view('user.classes.enroll', compact('class'));
})->name('classes.enroll');

Route::get('/cart', function () {
    return view('user.cart');
})->name('cart');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    })->name('settings');

    Route::get('/help-support', function () {
        return Inertia::render('HelpSupport');
    })->name('help.support');

    Route::get('/mybookings', function () {
        return Inertia::render('MyBookings');
    })->name('mybookings');

    Route::get('/myclasses', function () {
        return Inertia::render('MyClasses');
    })->name('myclasses');
});

// Front Desk Routes
Route::prefix('frontdesk')->name('frontdesk.')->group(function () {
    // Login
    Route::get('/login', [App\Http\Controllers\Frontdesk\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Frontdesk\AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [App\Http\Controllers\Frontdesk\AuthController::class, 'logout'])->name('logout');

    // Protected Routes
    Route::middleware('auth:frontdesk')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Frontdesk\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/bookings', [App\Http\Controllers\Frontdesk\BookingController::class, 'index'])->name('bookings');
        Route::get('/customers', [App\Http\Controllers\Frontdesk\CustomerController::class, 'index'])->name('customers');
        Route::get('/shop', [App\Http\Controllers\Frontdesk\ShopController::class, 'index'])->name('shop');
        Route::get('/classes', [App\Http\Controllers\Frontdesk\ClassController::class, 'index'])->name('classes');
    });
});

// Front Desk Routes (separate from user routes)
Route::prefix('frontdesk')->name('frontdesk.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Frontdesk\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Frontdesk\AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [App\Http\Controllers\Frontdesk\AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:frontdesk')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Frontdesk\DashboardController::class, 'index'])->name('dashboard');
        // ... other routes
    });
});

require __DIR__.'/auth.php';