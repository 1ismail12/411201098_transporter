<?php

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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('kurir', 'KurirController');
Route::post('/simpan-kurir','KurirController@store')->name('simpan-kurir');
Route::get('/index', 'KurirController@index')->name('index');
Route::get('/create', 'KurirController@create')->name('create');

Route::resource('barang', 'BarangController');
Route::post('/simpan-barang','BarangController@store')->name('simpan-barang');
Route::get('/create', 'BarangController@create')->name('create');
Route::get('/index', 'BarangController@index')->name('index');

Route::resource('lokasi', 'LokasiController');
Route::get('/create', 'LokasiController@create')->name('create');
Route::get('/index', 'LokasiController@index')->name('index');
Route::post('/simpan-lokasi1','LokasiController@store')->name('simpan-lokasi1');



