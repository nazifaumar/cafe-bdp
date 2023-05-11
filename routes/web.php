<?php

use App\Http\Controllers\CafeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', [CartController::class, 'index']);
// Route::get('/order', [CartController::class, 'order']);
// Route::get('/cart', [CartController::class, 'cart']);
// Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
// Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
// Route::delete('/remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');

Route::get('/index', [CartController::class, 'index']);
Route::get('/', [CartController::class, 'welcome']);
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');