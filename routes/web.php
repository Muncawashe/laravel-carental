<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarsController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
// Form Routes
Route::resource('/post', CarsController::class);