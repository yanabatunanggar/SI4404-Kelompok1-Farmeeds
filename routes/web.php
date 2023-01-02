<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'loginView']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::get('/register', [UserController::class, 'registerView']);
Route::post('/register', [UserController::class, 'registerUser']);
Route::get('/profile/{id}', [UserController::class, 'profileViewDetail']);
Route::post('/profile/{id}', [UserController::class, 'updateProfile']);

Route::get('/ajukan-bibit', [ProductController::class, 'bibitView']);
Route::post('/ajukan-bibit', [ProductController::class, 'ajukanBibit']);
Route::get('/ajukan-alat', [ProductController::class, 'alatView']);
Route::post('/ajukan-alat', [ProductController::class, 'ajukanAlat']);

Route::get('/cart', [CartController::class, 'index']);
Route::get('/news', [UserController::class, 'showNews']);
Route::get('/news-detail', [UserController::class, 'showNewsDetail']);
Route::get('/status', [OrderController::class, 'status']);

Route::get('/', [UserController::class, 'userView']);
Route::get('/admin', [UserController::class, 'adminView']);
