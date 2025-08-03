<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ServiceController;

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (requires JWT token)
Route::middleware('jwt')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});


Route::apiResource('users', UserController::class)->names('users');
Route::apiResource('products', ProductController::class)->names('products');
Route::apiResource('categories', CategoryController::class)->names('categories');
Route::apiResource('orders', OrderController::class)->names('orders');
Route::apiResource('payments', PaymentController::class)->names('payments');
Route::apiResource('bookings', BookingController::class)->names('bookings');
Route::apiResource('addresses', AddressController::class)->names('addresses');
Route::apiResource('carts', CartController::class)->names('carts');
Route::apiResource('services', ServiceController::class)->names('services');
