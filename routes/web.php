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

Route::get('praktikum1', function () {
    return view('prak1pweb');
});

Route::get('tugas4', function () {
    return view('tugas4pweb');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');

Route::get('tugasphp', 'ViewController@showForm');
Route::get('faktorialphp', 'ViewController@showTugasPHP');

Route::get('ets', 'ViewController@showETS');


//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');


//route CRUD absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//route CRUD modem
Route::get('/modem','ModemController@index');
Route::get('/modem/tambah','ModemController@tambah');
Route::post('/modem/store','ModemController@store');
Route::get('/modem/edit/{id}','ModemController@edit');
Route::post('/modem/update','ModemController@update');
Route::get('/modem/hapus/{id}','ModemController@hapus');
Route::get('/modem/cari','ModemController@cari');
