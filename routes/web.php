<?php

use Illuminate\Support\Facades\Route;
use Nidavellir\Backend\Http\Controllers\Auth\LoginController;
use Nidavellir\Backend\Http\Controllers\HomeController;

// Login form
Route::get(
    'login',
    [LoginController::class, 'showLoginForm']
)
    ->name('login');

// Execute login
Route::post(
    'login',
    [LoginController::class, 'login']
);

// Show the dashboard
Route::get(
    '/',
    [HomeController::class, 'index']
)
    ->middleware('auth')
    ->name('home');
