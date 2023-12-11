<?php

use Illuminate\Support\Facades\Route;




Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});
Route::get('/pertemuan2', function () {
    return view('pertemuan2');
});
Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});
Route::get('/Tugas1', function () {
    return view('Tugas1');
});
Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});
Route::get('/bootstrap2', function () {
    return view('bootstrap2');
});
Route::get('/Javascript1', function () {
    return view('Javascript-1');
});
Route::get('/Javascript2', function () {
    return view('Javascript-2');
});
Route::get('/collapse1', function () {
    return view('collapse-1');
});
Route::get('/collapse2', function () {
    return view('collapse-2');
});
Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});
Route::get('/', 'App\Http\Controllers\DosenController@index');
Route::get('/biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('testjam/{jam}','App\Http\Controllers\DosenController@showtime');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update/{id}','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@nilaiKuliah');
Route::get('/nilaikuliah/tambahData','App\Http\Controllers\NilaiKuliahController@halamanTambah');
Route::post('/nilaikuliah/tambahData', 'App\Http\Controllers\NilaiKuliahController@buatData');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

Route::get('/agen','App\Http\Controllers\AgenController@agen');
Route::get('/agen/tambah','App\Http\Controllers\AgenController@tambahAgen');
Route::post('/agen/store','App\Http\Controllers\AgenController@storeAgen');
Route::get('/agen/edit/{kodeagen}','App\Http\Controllers\AgenController@editAgen');
Route::post('/agen/update/{kodeagen}','App\Http\Controllers\AgenController@updateAgen');
Route::get('/agen/hapus/{kodeagen}','App\Http\Controllers\AgenController@hapusAgen');
Route::get('/agen/cari','App\Http\Controllers\AgenController@cariAgen');
Route::get('/agen/view/{kodeagen}', 'App\Http\Controllers\AgenController@viewAgen');
