<?php

use App\Http\Controllers\Master\DataPenggunaController;
use App\Http\Controllers\Master\ProfilKelembagaanController;
use Illuminate\Support\Facades\Route;

Route::prefix('master')->name('master.')->group(function () {
    Route::get('/profilkelembagaan/{id}', [ProfilKelembagaanController::class, 'index'])->name('profileKelembagaan.index');
    Route::post('/profilkelembagaan/{id}', [ProfilKelembagaanController::class, 'store/update']);

    Route::get('/datapengguna', [DataPenggunaController::class, 'index'])->name('datapengguna.index');
    Route::post('/datapengguna', [DataPenggunaController::class, 'store'])->name('datapengguna.store');
    Route::put('/datapengguna/{id}', [DataPenggunaController::class, 'update'])->name('datapengguna.update');
});
