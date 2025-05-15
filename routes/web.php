<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', function () {
    return view('home');  // This should render your homepage
});


// Contact form submission route
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
