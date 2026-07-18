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
});

require __DIR__.'/auth.php';

