<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

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
Route::get('/admin', [UserController::class, 'adminView']);
Route::get('/tambahProduk', [ProductController::class, 'tambahProdukView']);
Route::post('/simpanProduk', [ProductController::class, 'simpanProduk']);
Route::delete('/hapusProduk/{id}', [ProductController::class, 'hapusProduk']);

Route::get('/cekBibit', [ProductController::class, 'showBibit']);
Route::put('/updateBibit/{id}', [ProductController::class, 'updateBibit']);
Route::get('/cekAlat', [ProductController::class, 'showAlat']);
Route::put('/cekAlat/{id}', [ProductController::class, 'updateAlat']);

Route::get('/login', [UserController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/loginPost', [UserController::class, 'loginUser']);
Route::get('/register', [UserController::class, 'registerView'])->middleware('guest');
Route::post('/registerPost', [UserController::class, 'registerUser']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/profile/{id}', [UserController::class, 'profileViewDetail'])->middleware('auth');
Route::post('/profile/{id}', [UserController::class, 'updateProfile']);

Route::get('/ajukan-bibit', [ProductController::class, 'bibitView'])->middleware('auth');
Route::post('/ajukan-bibit', [ProductController::class, 'ajukanBibit']);
Route::get('/ajukan-alat', [ProductController::class, 'alatView'])->middleware('auth');
Route::post('/ajukan-alat', [ProductController::class, 'ajukanAlat']);

Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::get('/news', [UserController::class, 'showNews']);
Route::get('/news-detail', [UserController::class, 'showNewsDetail']);
Route::get('/statusUser', [OrderController::class, 'statusUser'])->middleware('auth');

Route::get('/', [UserController::class, 'userView']);

