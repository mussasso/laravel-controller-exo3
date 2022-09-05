<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//  pour creer une nouvelle route 
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/store',[StoreController::class,'index'])->name('store');
Route::get('/products',[ProductsController::class,'index'])->name('products');
