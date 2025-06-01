<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public routes
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('products', ProductController::class);

    Route::get('logout', [RegisterController::class, 'logout']);

});
