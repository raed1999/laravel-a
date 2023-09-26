<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Clerk\ClerkHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



/* Guest */
// Routes implementing controllers
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile/{id?}/{dob?}', [ProfileController::class, 'show'])->name('profile');

Route::get('/about', [AboutController::class, 'index'])->name('about');


/* Multiple users route */

/* Admin */
Route::prefix('/admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::resource('/profile',AdminProfileController::class);
    });

/* Clerk */
Route::prefix('/clerk')
    ->name('clerk.')
    ->group(function () {

        Route::get('/home', [ClerkHomeController::class, 'index'])->name('home');
        Route::get('/profile/{id?}/{dob?}', [ClerkHomeController::class, 'show'])->name('profile');
    });
