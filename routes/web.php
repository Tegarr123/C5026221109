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
Route::get('/', 'App\Http\Controllers\DosenController@index');
Route::get('/biodata', 'App\Http\Controllers\DosenController@biodata');
