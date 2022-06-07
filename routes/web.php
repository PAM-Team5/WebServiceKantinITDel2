<?php

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
    return view('welcome');
});


Route::get('/produk', 'ProductController@index')->name('product');
Route::post('/produk/Simpan', 'ProductController@store');
Route::post('/produk/Kirim/{id}', 'ProductController@update');
Route::get('/produk/Hapus/{id}', 'ProductController@destroy');

Route::get('/pemesanan', 'PemesananController@index')->name('pesan');
Route::post('/pemesanan/Simpan', 'PemesananController@store');
Route::post('/pemesanan/Kirim/{id}', 'PemesananController@update');
Route::get('/pemesanan/Hapus/{id}', 'PemesananController@destroy');

Route::get('/pembelian', 'PembelianController@index')->name('beli');
Route::post('/pembelian/Simpan', 'PembelianController@store');
Route::post('/pembelian/Kirim/{id}', 'PembelianController@update');
Route::get('/pembelian/Hapus/{id}', 'PembelianController@destroy');


Route::get('out', 'App\Http\Controllers\adminController@logout')->name('logout');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

