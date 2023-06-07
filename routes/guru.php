<?php

use App\Http\Controllers\Guru\BiodataController;
use App\Http\Controllers\Guru\DashboardController;
use App\Http\Controllers\Guru\LoginGuruController;
use Illuminate\Support\Facades\Route;


Route::prefix('guru')->name('guru.')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/login-guru', [LoginGuruController::class, 'showLoginForm'])->name('login')->withoutMiddleware('auth:guru');
    Route::post('/login-guru', [LoginGuruController::class, 'login'])->name('login')->withoutMiddleware('auth:guru');

    Route::get('/biodata/informasi-pribadi', [BiodataController::class, 'informasi'])->name('biodata.informasi');
    Route::get('/biodata/foto-pribadi', [BiodataController::class, 'foto'])->name('biodata.foto');
});
