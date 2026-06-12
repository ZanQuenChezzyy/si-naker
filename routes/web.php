<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CetakPdfController;

Route::get('/cetak-ak1/{id}', [CetakPdfController::class, 'cetakAk1'])->name('cetak.ak1');
