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
    return view('beranda.beranda');
});

Route::get('/customer/data-customer','App\Http\Controllers\CustomerController@index')->name('data-customer');
Route::get('/customer/create-customer','App\Http\Controllers\CustomerController@create')->name('create-customer');
Route::post('/customer/simpan-customer','App\Http\Controllers\CustomerController@store')->name('simpan-customer');
Route::get('/customer/edit-customer/{id}','App\Http\Controllers\CustomerController@edit')->name('edit-customer');
Route::post('/customer/update-customer/{id}','App\Http\Controllers\CustomerController@update')->name('update-customer');
Route::get('/customer/delete-customer/{id}','App\Http\Controllers\CustomerController@destroy')->name('deletephp a-customer');

Route::get('/hewan/data-hewan','App\Http\Controllers\HewanController@index')->name('data-hewan');
Route::get('/hewan/create-hewan','App\Http\Controllers\HewanController@create')->name('create-hewan');
Route::post('/hewan/simpan-hewan','App\Http\Controllers\HewanController@store')->name('simpan-hewan');
Route::get('/hewan/edit-hewan/{id}','App\Http\Controllers\HewanController@edit')->name('edit-hewan');
Route::post('/hewan/update-hewan/{id}','App\Http\Controllers\HewanController@update')->name('update-hewan');
Route::get('/hewan/delete-hewan/{id}','App\Http\Controllers\HewanController@destroy')->name('deletephp a-hewan');

Route::get('/barang/data-barang','App\Http\Controllers\BarangController@index')->name('data-barang');
Route::get('/barang/create-barang','App\Http\Controllers\BarangController@create')->name('create-barang');
Route::post('/barang/simpan-barang','App\Http\Controllers\BarangController@store')->name('simpan-barang');
Route::get('/barang/edit-barang/{id}','App\Http\Controllers\BarangController@edit')->name('edit-barang');
Route::post('/barang/update-barang/{id}','App\Http\Controllers\BarangController@update')->name('update-barang');
Route::get('/barang/delete-barang/{id}','App\Http\Controllers\BarangController@destroy')->name('deletephp a-barang');

Route::get('/grooming/data-grooming','App\Http\Controllers\GroomingController@index')->name('data-grooming');
Route::get('/grooming/create-grooming','App\Http\Controllers\GroomingController@create')->name('create-grooming');
Route::post('/grooming/simpan-grooming','App\Http\Controllers\GroomingController@store')->name('simpan-grooming');
Route::get('/grooming/edit-grooming/{id}','App\Http\Controllers\GroomingController@edit')->name('edit-grooming');
Route::post('/grooming/update-grooming/{id}','App\Http\Controllers\GroomingController@update')->name('update-grooming');
Route::get('/grooming/delete-grooming/{id}','App\Http\Controllers\GroomingController@destroy')->name('deletephp a-grooming');

Route::get('/penyakit/data-penyakit','App\Http\Controllers\PenyakitController@index')->name('data-penyakit');
Route::get('/penyakit/create-penyakit','App\Http\Controllers\PenyakitController@create')->name('create-penyakit');
Route::post('/penyakit/simpan-penyakit','App\Http\Controllers\PenyakitController@store')->name('simpan-penyakit');
Route::get('/penyakit/edit-penyakit/{id}','App\Http\Controllers\PenyakitController@edit')->name('edit-penyakit');
Route::post('/penyakit/update-penyakit/{id}','App\Http\Controllers\PenyakitController@update')->name('update-penyakit');
Route::get('/penyakit/delete-penyakit/{id}','App\Http\Controllers\PenyakitController@destroy')->name('deletephp a-penyakit');

Route::get('/grooming/data-layanan-grooming','App\Http\Controllers\LayananGroomingController@index')->name('data-layanan-grooming');
Route::get('/grooming/create-layanan-grooming','App\Http\Controllers\LayananGroomingController@create')->name('create-layanan-grooming');
Route::post('/grooming/simpan-layanan-grooming','App\Http\Controllers\LayananGroomingController@store')->name('simpan-layanan-grooming');
Route::get('/grooming/edit-layanan-grooming/{id}','App\Http\Controllers\LayananGroomingController@edit')->name('edit-layanan-grooming');
Route::post('/grooming/update-layanan-grooming/{id}','App\Http\Controllers\LayananGroomingController@update')->name('update-layanan-grooming');
Route::get('/grooming/delete-layanan-grooming/{id}','App\Http\Controllers\LayananGroomingController@destroy')->name('deletephp a-layanan-grooming');

Route::get('/berobat/data-layanan-berobat','App\Http\Controllers\LayananBerobatController@index')->name('data-layanan-berobat');
Route::get('/berobat/create-layanan-berobat','App\Http\Controllers\LayananBerobatController@create')->name('create-layanan-berobat');
Route::post('/berobat/simpan-layanan-berobat','App\Http\Controllers\LayananBerobatController@store')->name('simpan-layanan-berobat');
Route::get('/berobat/edit-layanan-berobat/{id}','App\Http\Controllers\LayananBerobatController@edit')->name('edit-layanan-berobat');
Route::post('/berobat/update-layanan-berobat/{id}','App\Http\Controllers\LayananBerobatController@update')->name('update-layanan-berobat');
Route::get('/berobat/delete-layanan-berobat/{id}','App\Http\Controllers\LayananBerobatController@destroy')->name('deletephp a-layanan-berobat');