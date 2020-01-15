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
    return view('welcome');
});

Route::get('/pasien', 'PasienController@index');
Route::get('/pasien/tambah', 'PasienController@tambah');
Route::post('/pasien/store', 'PasienController@store');
Route::get('/pasien/edit/{id}', 'PasienController@edit');
Route::put('/pasien/update/{id}', 'PasienController@update');
Route::get('/pasien/hapus/{id}', 'PasienController@delete');


Route::get('/kelas', 'KelasController@index');
Route::get('/kelas/tambah', 'KelasController@tambah');
Route::post('/kelas/store', 'KelasController@store');
Route::get('/kelas/edit/{id}', 'KelasController@edit');
Route::put('/kelas/update/{id}', 'KelasController@update');
Route::get('/kelas/hapus/{id}', 'KelasController@delete');

Route::get('/ruang', 'RuangController@index');
Route::get('/ruang/tambah', 'RuangController@tambah');
Route::post('/ruang/store', 'RuangController@store');
Route::get('/ruang/edit/{id}', 'RuangController@edit');
Route::put('/ruang/update/{id}', 'RuangController@update');
Route::get('/ruang/hapus/{id}', 'RuangController@delete');

Route::get('/bed', 'BedController@index');
Route::get('/bed/tambah', 'BedController@tambah');
Route::post('/bed/store', 'BedController@store');
Route::get('/bed/edit/{id}', 'BedController@edit');
Route::put('/bed/update/{id}', 'BedController@update');
Route::get('/bed/hapus/{id}', 'BedController@delete');

Route::get('/masuk', 'MasukController@index');
Route::get('/masuk/tambah', 'MasukController@tambah');
Route::post('/masuk/store', 'MasukController@store');
Route::get('/masuk/edit/{id}', 'MasukController@edit');
Route::put('/masuk/update/{id}', 'MasukController@update');
Route::get('/masuk/hapus/{id}', 'MasukController@delete');

Route::get('/keluar', 'KeluarController@index');
Route::get('/keluar/tambah', 'KeluarController@tambah');
Route::post('/keluar/store', 'KeluarController@store');
Route::get('/keluar/edit/{id}', 'KeluarController@edit');
Route::put('/keluar/update/{id}', 'KeluarController@update');
Route::get('/keluar/hapus/{id}', 'KeluarController@delete');