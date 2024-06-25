<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route Home
Route::get('home', [HomeController::class, 'index'])->name('home');

// Route Profile
Route::get('profile', ProfileController::class)->name('profile');

// Resources Route
Route::resource('employees', EmployeeController::class);



