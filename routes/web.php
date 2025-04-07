<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Formas de crear rutas con Middleware y Prefijo */
// Route::prefix('dashboard')->middleware('auth')->group(function () {
//     Route::resource('post', PostController::class);
//     Route::resource('category', CategoryController::class);
// });

// Route::middleware('auth')->prefix('dashboard')->group(function () {
//     Route::resource('post', PostController::class);
//     Route::resource('category', CategoryController::class);
// });

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

require __DIR__.'/auth.php';
