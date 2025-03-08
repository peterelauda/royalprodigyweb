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

Route::get('/nasabah', 'App\Http\Controllers\nasabahController@index');

Route::get('/nasabah/tambah', 'App\Http\Controllers\nasabahController@tambah');

Route::post('/nasabah/store', 'App\Http\Controllers\nasabahController@store');

Route::get('/nasabah/edit/{id}', 'App\Http\Controllers\nasabahController@edit');

Route::put('/nasabah/update/{id}', 'App\Http\Controllers\nasabahController@update');

Route::get('/nasabah/hapus/{id}', 'App\Http\Controllers\nasabahController@delete');

