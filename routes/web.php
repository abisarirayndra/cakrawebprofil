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


Route::get('/','Controller@landing')->name('welcome');
Route::get('/kontak','Controller@kontak')->name('kontak');
Route::get('/daftar','DaftarController@daftar')->name('daftar');
Route::get('/admin','AuthController@tampilLogin')->name('admin');
Route::post('/login','AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth','admin-role']], function(){
    Route::get('/slider','KontenController@slider')->name('admin.slider');
    Route::get('/tambahslider','KontenController@tambahSlider')->name('admin.tambahslider');
    Route::post('/upslider','KontenController@upSlider')->name('admin.upslider');
    Route::get('/editslider/{id}','KontenController@editSlider')->name('admin.editslider');
    Route::post('/updateslider/{id}','KontenController@updateSlider')->name('admin.updateslider');
    Route::get('/hapusslider/{id}','KontenController@destroySlider')->name('admin.hapusslider');

    // Deskripsi
    Route::get('/deskripsi','KontenController@deskripsi')->name('admin.deskripsi');
    Route::get('/tambahdeskripsi','KontenController@tambahDeskripsi')->name('admin.tambahdeskripsi');
    Route::post('/updeskripsi','KontenController@upDeskripsi')->name('admin.updeskripsi');
    Route::get('/editdeskripsi/{id}','KontenController@editDeskripsi')->name('admin.editdeskripsi');
    Route::post('/updatedeskripsi/{id}','KontenController@updateDeskripsi')->name('admin.updatedeskripsi');
    Route::get('/hapusdeskripsi/{id}','KontenController@destroyDeskripsi')->name('admin.hapusdeskripsi');

});

