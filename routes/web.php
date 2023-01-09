<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
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
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'adminView'])->middleware('auth')->name('admin');
    Route::get('/tambahProduk', [ProductController::class, 'tambahProdukView'])->middleware('auth')->name('tambahProduk');
    Route::post('/simpanProduk', [ProductController::class, 'simpanProduk']);
    Route::delete('/hapusProduk/{id}', [ProductController::class, 'hapusProduk']);
    // Route::get('/filterBibit', [ProductController::class, 'filterBibit'])->middleware('auth')->name('');

    Route::get('/cekBibit', [ProductController::class, 'showBibit'])->middleware('auth')->name('cekBibit');
    Route::get('/cekAlat', [ProductController::class, 'showAlat'])->middleware('auth')->name('cekAlat');

    Route::get('/editBibit/{id}', [ProductController::class, 'editBibit'])->middleware('auth')->name('editBibit');
    Route::post('/updateBibit/{id}', [ProductController::class, 'updateBibit']);
    
    Route::get('/editAlat/{id}', [ProductController::class, 'editAlat'])->middleware('auth')->name('editAlat');
    Route::post('/updateAlat/{id}', [ProductController::class, 'updateAlat']);
    
    Route::get('/detailOrder/{id}', [AdminController::class, 'detailOrder'])->middleware('auth')->name('detailOrder');

    Route::get('/statusPesanan', [AdminController::class, 'statusPesanan'])->middleware('auth')->name('statusPesanan');
    Route::get('/pesanCustomer', [AdminController::class, 'pesanCustomer'])->middleware('auth')->name('pesanCustomer');

    Route::post('/ubahStatus/{id}', [AdminController::class, 'ubahStatus'])->middleware('auth')->name('ubahStatus');

});

Route::get('/login', [UserController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/loginPost', [UserController::class, 'loginUser']);

Route::get('/register', [UserController::class, 'registerView'])->middleware('guest');
Route::post('/registerPost', [UserController::class, 'registerUser']);

Route::post('/getkota', [RegionController::class, 'getkota'])->name('getkota');
Route::post('/getkecamatan', [RegionController::class, 'getkecamatan'])->name('getkecamatan');
Route::post('/getkelurahan', [RegionController::class, 'getkelurahan'])->name('getkelurahan');

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/tambahKeluhan', [UserController::class, 'addKeluhan'])->middleware('guest');

// profil
Route::get('/profile/{id}', [UserController::class, 'profileViewDetail'])->middleware('auth');
Route::get('/editProfile/{id}', [UserController::class, 'editProfile'])->middleware('auth');
Route::post('/updateProfile/{id}', [UserController::class, 'updateProfile']);

// pengajuan
Route::get('/pengajuan', [ProductController::class, 'pengajuanView'])->middleware('auth');

// status
Route::get('/status', [UserController::class, 'status'])->middleware('auth')->name('status');
Route::get('/detailOrder/{id}', [AdminController::class, 'detailOrder'])->middleware('auth')->name('detailOrder.user');


// detail bibit
Route::get('/ajukan-bibit', [ProductController::class, 'bibitView'])->middleware('auth');
Route::post('/ajukan-bibit-f', [ProductController::class, 'bibitView'])->middleware('auth');
Route::get('/ajukan-alat', [ProductController::class, 'alatView'])->middleware('auth');

Route::post('/ajukan-bibit', [ProductController::class, 'ajukanBibit']);
Route::post('/ajukan-alat', [ProductController::class, 'ajukanAlat']);

// cart
Route::get('/cart/{id}', [CartController::class, 'cartView'])->middleware('auth');
Route::post('/addCart', [CartController::class, 'tambahCart'])->middleware('auth');
// Route::post('/updateJumlah', [CartController::class, 'updateCart'])->middleware('auth');

// order
Route::get('/order', [orderController::class, 'orderView'])->middleware('auth');
Route::post('/tambahPesanan', [orderController::class, 'tambahPesanan'])->middleware('auth');

Route::get('/deleteCart/{id}', [CartController::class, 'deleteCart'])->middleware('auth');

Route::get('/news', [UserController::class, 'showNews']);
Route::get('/news-detail', [UserController::class, 'showNewsDetail']);
Route::get('/statusUser', [OrderController::class, 'statusUser'])->middleware('auth');

Route::get('/', [UserController::class, 'userView']);

