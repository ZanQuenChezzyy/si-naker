<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CetakPdfController;
use App\Http\Controllers\PendaftaranController;

Route::get('/cetak-ak1/{id}', [CetakPdfController::class, 'cetakAk1'])->name('cetak.ak1');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
