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

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

