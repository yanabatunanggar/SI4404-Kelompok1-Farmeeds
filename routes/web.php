<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('Home');
});

Route::get('/bibit', [BibitController::class, 'index']);

Route::get('/alat-tani', [AlatController::class, 'index']);

Route::get('/status', [OrderController::class, 'index']);