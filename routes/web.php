<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\ProdukController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{search}', function () {
$data = [
    'pageTitle' => 'Tentang Kami',
    'content' => 'Ini adalah halaman tentang kami.'
];
return view('about', $data);
});
Route::get('/produk','App\Http\Controllers\ProdukController@index')->name('produk');
Route::get('/produk/create','App\Http\Controllers\ProdukController@create')->name('produk.create');
Route::post('/produk/store','App\Http\Controllers\ProdukController@store')->name('produk.store');
Route::get('/produk/edit/{id}','App\Http\Controllers\ProdukController@edit')->name('produk.edit');
Route::put('/produk/{produk}','App\Http\Controllers\ProdukController@update')->name('produk.update');
Route::delete('/produk/{id}','App\Http\Controllers\ProdukController@delete')->name('produk.destroy');
