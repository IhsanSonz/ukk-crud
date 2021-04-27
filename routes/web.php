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

Route::get('guru', 'GuruController@index')->name('guru');
Route::get('siswa', 'SiswaController@index')->name('siswa');
Route::get('kelas', 'KelasController@index')->name('kelas');
