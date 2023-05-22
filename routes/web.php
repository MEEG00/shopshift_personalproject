<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class, 'home'])->name('homepage');
Route::get('/sell',[ProductController::class, 'sell'])->name('sell');
Route::post('/sell/store',[ProductController::class, 'store'])->name('store');
Route::get('items',[ProductController::class, 'index'])->name('products');