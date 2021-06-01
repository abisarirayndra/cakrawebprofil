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
Route::get('/dokumentasi','Controller@dokumentasi')->name('dokumentasi');
Route::get('/alumni','Controller@alumni')->name('alumni');
Route::get('/info','Controller@info')->name('info');
Route::get('/artikel/{id}','Controller@artikel')->name('artikel');

Route::get('/login','AuthController@tampilLogin')->name('login');
Route::post('/log','AuthController@login')->name('log');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/register','DaftarController@register')->name('register');
Route::post('/reg','DaftarController@reg')->middleware('guest')->name('reg');
Route::get('/masuk','DaftarController@masuk')->name('masuk');
Route::post('/upmasuk','DaftarController@upMasuk')->name('upmasuk');
Route::get('/petunjuk','Controller@petunjuk')->name('petunjuk');




Route::group(['middleware' => ['auth','admin-role']], function(){
    Route::get('admin/slider','KontenController@slider')->name('admin.slider');
    Route::get('admin/tambahslider','KontenController@tambahSlider')->name('admin.tambahslider');
    Route::post('admin/upslider','KontenController@upSlider')->name('admin.upslider');
    Route::get('admin/editslider/{id}','KontenController@editSlider')->name('admin.editslider');
    Route::post('admin/updateslider/{id}','KontenController@updateSlider')->name('admin.updateslider');
    Route::get('admin/hapusslider/{id}','KontenController@destroySlider')->name('admin.hapusslider');

    // Deskripsi
    Route::get('admin/deskripsi','KontenController@deskripsi')->name('admin.deskripsi');
    Route::get('admin/tambahdeskripsi','KontenController@tambahDeskripsi')->name('admin.tambahdeskripsi');
    Route::post('admin/updeskripsi','KontenController@upDeskripsi')->name('admin.updeskripsi');
    Route::get('admin/editdeskripsi/{id}','KontenController@editDeskripsi')->name('admin.editdeskripsi');
    Route::post('admin/updatedeskripsi/{id}','KontenController@updateDeskripsi')->name('admin.updatedeskripsi');
    Route::get('admin/hapusdeskripsi/{id}','KontenController@destroyDeskripsi')->name('admin.hapusdeskripsi');

    // Dokumentasi
    Route::get('admin/dokumentasi','KontenController@dokumentasi')->name('admin.dokumentasi');
    Route::get('admin/tambahdokumentasi','KontenController@tambahDokumentasi')->name('admin.tambahdokumentasi');
    Route::post('admin/updokumentasi','KontenController@upDokumentasi')->name('admin.updokumentasi');
    Route::get('admin/editdokumentasi/{id}','KontenController@editDokumentasi')->name('admin.editdokumentasi');
    Route::post('admin/updatedokumentasi/{id}','KontenController@updateDokumentasi')->name('admin.updatedokumentasi');
    Route::get('admin/hapusdokumentasi/{id}','KontenController@destroyDokumentasi')->name('admin.hapusdokumentasi');

    //Alumni
    Route::get('admin/alumni','KontenController@alumni')->name('admin.alumni');
    Route::get('admin/tambahalumni','KontenController@tambahAlumni')->name('admin.tambahalumni');
    Route::post('admin/upalumni','KontenController@upAlumni')->name('admin.upalumni');
    Route::get('admin/editalumni/{id}','KontenController@editAlumni')->name('admin.editalumni');
    Route::post('admin/updatealumni/{id}','KontenController@updateAlumni')->name('admin.updatealumni');
    Route::get('admin/hapusalumni/{id}','KontenController@destroyAlumni')->name('admin.hapusalumni');

    //Alumni
    Route::get('admin/info','KontenController@info')->name('admin.info');
    Route::get('admin/tambahinfo','KontenController@tambahInfo')->name('admin.tambahinfo');
    Route::post('admin/upinfo','KontenController@upInfo')->name('admin.upinfo');
    Route::get('admin/editinfo/{id}','KontenController@editInfo')->name('admin.editinfo');
    Route::post('admin/updateinfo/{id}','KontenController@updateInfo')->name('admin.updateinfo');
    Route::get('admin/hapusinfo/{id}','KontenController@destroyInfo')->name('admin.hapusinfo');
});

Route::group(['middleware' => ['auth','pendaftar-role']], function(){
    Route::get('pendaftar/profil','PendaftarController@profil')->name('pendaftar.profil');
    Route::post('pendaftar/upformulir','PendaftarController@upFormulir')->name('pendaftar.upformulir');
    Route::get('pendaftar/cetak/{id}','PendaftarController@cetak')->name('pendaftar.cetak');
    Route::get('pendaftar/cetak_pdf/{id}','PendaftarController@cetak_pdf')->name('pendaftar.cetak_pdf');
    Route::get('pendaftar/edit/{id}','PendaftarController@edit')->name('pendaftar.edit');
    Route::post('pendaftar/update/{id}','PendaftarController@update')->name('pendaftar.update');
});

