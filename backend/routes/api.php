<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\API\DashboardController;

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (requires JWT token)
Route::middleware('jwt')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('api.admin.dashboard');

Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/admin/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');



Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::get('/admin/products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
// Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');


Route::get('/admin/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/admin/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/admin/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::put('/admin/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/admin/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('/admin/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/admin/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::get('/admin/payments/create', [PaymentController::class, 'create'])->name('payments.create');
Route::get('/admin/payments/{payment}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
Route::put('/admin/payments/{payment}', [PaymentController::class, 'update'])->name('payments.update');
Route::delete('/admin/payments/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy');
// Route::get('/admin/payments/{payment}', [PaymentController::class, 'show'])->name('payments.show');


Route::get('/admin/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/admin/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/admin/bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');
Route::put('/admin/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
Route::delete('/admin/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');



Route::get('/admin/addresses', [AddressController::class, 'index'])->name('addresses.index');
Route::delete('/admin/addresses/{address}', [AddressController::class, 'destroy'])->name('addresses.destroy');
Route::get('/admin/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
Route::post('/admin/addresses/store', [AddressController::class, 'store'])->name('addresses.store');
Route::get('/admin/addresses/{address}/edit', [AddressController::class, 'edit'])->name('addresses.edit');
Route::put('/admin/addresses/{address}', [AddressController::class, 'update'])->name('addresses.update');
// Optional: Route::get('/admin/addresses/{address}', [AddressController::class, 'show'])->name('addresses.show');


// Carts Routes
Route::get('/admin/carts', [CartController::class, 'index'])->name('carts.index');
Route::delete('/admin/carts/{cart}', [CartController::class, 'destroy'])->name('carts.destroy');
Route::get('/admin/carts/create', [CartController::class, 'create'])->name('carts.create');
Route::post('/admin/carts/store', [CartController::class, 'store'])->name('carts.store');
Route::get('/admin/carts/{cart}/edit', [CartController::class, 'edit'])->name('carts.edit');
Route::put('/admin/carts/{cart}', [CartController::class, 'update'])->name('carts.update');
// Route::get('/admin/carts/{cart}', [CartController::class, 'show'])->name('carts.show');


// Services Routes
Route::get('/admin/services', [ServiceController::class, 'index'])->name('services.index');
Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('services.store');
Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/admin/services/{service}', [ServiceController::class, 'update'])->name('services.update');
// Route::get('/admin/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Route::apiResource('products', ProductController::class)->names('products');
// Route::apiResource('categories', CategoryController::class)->names('categories');
// Route::apiResource('orders', OrderController::class)->names('orders');
// Route::apiResource('payments', PaymentController::class)->names('payments');
// Route::apiResource('bookings', BookingController::class)->names('bookings');
// Route::apiResource('addresses', AddressController::class)->names('addresses');
// Route::apiResource('carts', CartController::class)->names('carts');
// Route::apiResource('services', ServiceController::class)->names('services');
