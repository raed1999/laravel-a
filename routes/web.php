<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// Return view
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile/{id?}/{dob?}', [ProfileController::class, 'show'])->name('profile');

Route::get('/about', [AboutController::class, 'index'])->name('about');
