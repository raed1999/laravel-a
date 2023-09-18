<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


/* Version 1 */
// Return view
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile/{id?}/{dob?}', [ProfileController::class, 'show'])->name('profile');

Route::get('/about', [AboutController::class, 'index'])->name('about');

/* Admin Routes */
Route::prefix('/admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::get('/profile/{id?}/{dob?}', [AdminProfileController::class, 'show'])->name('profile');
    });

/* Clerk */


/* Student */
