<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewRecipeController;
use App\Http\Controllers\RecipeDetailController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/LoginPage', [LoginController::class, 'index'])->name('login');
Route::post('/LoginPage', [LoginController::class, 'store']);

Route::post('/Logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/RegisterPage', [SignUpController::class, 'index'])->name('Register');
Route::post('/RegisterPage', [SignUpController::class, 'store']);

Route::get('/NewRecipe', [NewRecipeController::class, 'index'])->name('NewRecipe');
Route::post('/NewRecipe', [NewRecipeController::class, 'store']);

Route::post('/Image', [ImageController::class, 'store'])->name('Image');

Route::get('/About', [AboutController::class, 'index']);

Route::get('/RecipeDetail/{recip_id}', [RecipeDetailController::class, 'show'])->name('recipes.show');

