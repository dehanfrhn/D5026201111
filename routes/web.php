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

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4js');
});

Route::get('praktikum2', function () {
    return view('praktikum2form');
});

Route::get('home', function () {
    return view('layout.happy');
});

Route::get('ets', "ViewController@showETS");

Route::get('tugasphp', "ViewController@showTugasPHP");

//route CRUD
Route::get('/pegawai', 'PegawaiController@index');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/tambah', 'PegawaiController@tambah');

Route::post('/pegawai/store', 'PegawaiController@store');

Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');

Route::post('/pegawai/update', 'PegawaiController@update');

Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');

Route::get('/pendapatan', 'PendapatanController@index');

Route::get('/pendapatan/cari','PendapatanController@cari');

Route::get('/pendapatan/tambah', 'PendapatanController@tambah');

Route::post('/pendapatan/store', 'PendapatanController@store');

Route::get('/pendapatan/edit/{id}', 'PendapatanController@edit');

Route::post('/pendapatan/update', 'PendapatanController@update');

Route::get('/pendapatan/hapus/{id}', 'PendapatanController@hapus');

Route::get('/absen', 'AbsenController@index');

Route::get('/absen/cari','AbsenController@cari');

Route::get('/absen/tambah', 'AbsenController@tambah');

Route::post('/absen/store', 'AbsenController@store');

Route::get('/absen/edit/{id}', 'AbsenController@edit');

Route::post('/absen/update', 'AbsenController@update');

Route::get('/absen/hapus/{id}', 'AbsenController@hapus');

Route::get('/kaos', 'KaosController@index');

Route::get('/kaos/tambah','kaosController@tambah');

Route::post('/kaos/store','kaosController@store');

Route::get('/kaos/cari','kaosController@cari');

Route::get('/kaos/edit/{id}','kaosController@edit');

Route::post('/kaos/update','kaosController@update');

Route::get('/kaos/hapus/{id}','kaosController@hapus');

Route::get('/kaos/detail/{id}','kaosController@view');

Route::get('/eas','EasController@index');
