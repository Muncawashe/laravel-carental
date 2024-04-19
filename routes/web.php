<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\BookingsController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/login', [HomeController::class, 'login'])->name('home.login');
Route::get('/register', [HomeController::class, 'register'])->name('home.register');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/vehicles', [HomeController::class, 'vehicles'])->name('cars.vehicles');
Route::get('/services', [HomeController::class, 'services'])->name('home.services');

// Form Routes
Route::resource('/cars', CarsController::class);
Route::resource('/bookings', BookingsController::class);
