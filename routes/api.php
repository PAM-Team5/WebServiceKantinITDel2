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

// WEB SERVICE

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// PRODUK 

Route::get('/produk', 'ProductController@indexAPI');

Route::get('/data-produk', 'ProductController@indexLamaAPI');

Route::get('/data-produk/makananKoperasi', 'ProductController@indexAPIMakananKoperasi');
Route::get('/data-produk/makananKantin', 'ProductController@indexAPIMakananKantin');

Route::get('/data-produk/minumanKoperasi', 'ProductController@indexAPIMinumanKoperasi');
Route::get('/data-produk/minumanKantin', 'ProductController@indexAPIMinumanKantin');

Route::get('/data-produk/ruanganKoperasi', 'ProductController@indexAPIRuanganKoperasi');
Route::get('/data-produk/ruanganKantin', 'ProductController@indexAPIRuanganKantin');

Route::get('/data-produk/pulsaKoperasi', 'ProductController@indexAPIPulsaKoperasi');
Route::get('/data-produk/pulsaKantin', 'ProductController@indexAPIPulsaKantin');

Route::get('/data-produk/barangKoperasi', 'ProductController@indexAPIBarangKoperasi');
Route::get('/data-produk/barangKantin', 'ProductController@indexAPIBarangKantin');


Route::post('/data-produk/tambah', 'ProductController@storeAPI');
Route::put('/data-produk/ubah/{id}', 'ProductController@updateAPI');
Route::delete('/data-produk/hapus/{id}', 'ProductController@destroyAPI');


// PEMESANAN

Route::get('/pemesanan', 'PemesananController@indexAPI')->name('pemesanan');
Route::post('/pemesanan/tambah', 'PemesananController@storeAPI');
Route::put('/pemesanan/ubah/{id}', 'PemesananController@updateAPI');
Route::delete('/pemesanan/hapus/{id}', 'PemesananController@destroyAPI');
Route::put('/pemesananBayar/ubah/{id}', 'PemesananController@updatePembelianAPI');
Route::put('/pemesananJumlah/ubah/{id}', 'PemesananController@updateJumlahAPI');

// PEMBELIAN

Route::get('/pembelian/{ID_User}', 'PembelianController@indexAPIByID')->name('pembelian');
Route::post('/pembelian/tambah', 'PembelianController@storeAPI');
Route::put('/pembelian/ubah/{id}', 'PembelianController@updateAPI');
Route::delete('/pembelian/hapus/{id}', 'PembelianController@destroyAPI');


// USER

Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');

//  PRODUCT

Route::get('/produk', 'ProductController@indexAPI');
