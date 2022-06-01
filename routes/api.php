<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produk', 'ProductController@indexAPI');

Route::get('/data-produk', 'ProductController@indexLamaAPI');

Route::get('/data-produk/makanan', 'ProductController@indexAPIMakanan');
Route::get('/data-produk/minuman', 'ProductController@indexAPIMinuman');
Route::get('/data-produk/ruangan', 'ProductController@indexAPIRuangan');
Route::get('/data-produk/pulsa', 'ProductController@indexAPIPulsa');



Route::post('/data-produk/tambah', 'ProductController@storeAPI');
Route::put('/data-produk/ubah/{id}', 'ProductController@updateAPI');
Route::delete('/data-produk/hapus/{id}', 'ProductController@destroyAPI');








Route::get('/pemesanan', 'PemesananController@indexAPI')->name('pemesanan');
Route::post('/pemesanan/tambah', 'PemesananController@storeAPI');
Route::delete('/pemesanan/hapus/{id}', 'PemesananController@destroyAPI');

Route::get('/data-pembelian', 'PembelianController@indexAPI')->name('data-pembelian');
Route::post('/data-pembelian/tambah', 'PembelianController@storeAPI');
Route::put('/data-pembelian/ubah/{id}', 'PembelianController@updateAPI');
Route::delete('/data-pembelian/hapus/{id}', 'PembelianController@destroyAPI');

Route::get('/data-pembayaran', 'PembayaranController@indexAPI')->name('data-pembayaran');
Route::post('/data-pembayaran/tambah', 'PembayaranController@storeAPI');
Route::put('/data-pembayaran/ubah/{id}', 'PembayaranController@updateAPI');
Route::delete('/data-pembayaran/hapus/{id}', 'PembayaranController@destroyAPI');


// WEB SERVICE

// USER

Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');

//  PRODUCT

Route::get('/produk', 'ProductController@indexAPI');
