<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'login'])->name('.login');
Route::post('login', [AuthController::class, 'login']);