<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::view('/tentang-kami', 'tentangkami')->name('tentang');
Route::get('/fasilitas', [\App\Http\Controllers\FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/program', [\App\Http\Controllers\ProgramController::class, 'index'])->name('program');
Route::view('/komunitas', 'komunitas')->name('komunitas');
Route::view('/kegiatan', 'kegiatan')->name('kegiatan');
Route::view('/dampak', 'dampak')->name('dampak');
Route::view('/dukung-kami', 'dukungkami')->name('dukungan');
