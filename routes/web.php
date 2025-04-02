<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/LoginPage', [LoginController::class, 'index']);
Route::get('/RegisterPage', [SignUpController::class, 'index']);