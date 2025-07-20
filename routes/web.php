<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/tentang-kami', 'tentangkami')->name('tentang');
Route::view('/fasilitas', 'fasilitas')->name('fasilitas');
Route::view('/program', 'program')->name('program');
Route::view('/komunitas', 'komunitas')->name('komunitas');
Route::view('/kegiatan', 'kegiatan')->name('kegiatan');
Route::view('/dampak', 'dampak')->name('dampak');
Route::view('/dukung-kami', 'dukungkami')->name('dukungan');
