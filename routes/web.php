<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HelloController;

Route::get('/hello', function () {
    return 'Halo, tolong aku masih bingung!';
});

Route::get('/controller', [HelloController::class, 'index']);

Route::resource('mahasiswa', MahasiswaController::class);
