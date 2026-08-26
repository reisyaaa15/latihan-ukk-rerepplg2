<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SiswaController;

// Beranda
Route::get('/', function () {
    return view('home');
})->name('home');

// Kompetensi
Route::resource('kompetensi', KompetensiController::class);

// Perusahaan
Route::resource('perusahaan', PerusahaanController::class);

// Siswa
Route::resource('siswa', SiswaController::class);
