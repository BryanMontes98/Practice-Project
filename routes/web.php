<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

// Rutas de prueba
/* Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/contact', function () {
    // return redirect('contact');
    // return redirect()->route('contact');
    return view('contact');
})->name('contact');

Route::get('/contact-dos', function () {
    return view('contact-dos');
}); */

// Rutas de Dashboard
Route::resource('category', CategoryController::class);
Route::resource('post', PostController::class);
