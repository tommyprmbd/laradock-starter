<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'login']);

        Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
        Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
});