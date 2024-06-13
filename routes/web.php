<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('beranda');

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
Route::get('/jurusan', [App\Http\Controllers\JurusanController::class, 'index'])->name('jurusan');
Route::get('/eskul', [App\Http\Controllers\EskulController::class, 'index'])->name('eskul');
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index'])->name('galeri');
