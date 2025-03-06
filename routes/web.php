<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/contact', function () {
    // return redirect('contact');
    // return redirect()->route('contact');
    return view('contact');
})->name('contact');

Route::get('/contact-dos', function () {
    return view('contact-dos');
});

