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


//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');