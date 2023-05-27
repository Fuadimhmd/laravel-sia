<?php

use App\Http\Controllers\Master\DataGuruController;
use App\Http\Controllers\Master\DataKelasController;
use App\Http\Controllers\Master\DataPenggunaController;
use App\Http\Controllers\Master\DataRaporMapelController;
use App\Http\Controllers\Master\DataRaporTahunController;
use App\Http\Controllers\Master\DataSiswaController;
use App\Http\Controllers\Master\DataTingkatController;
use App\Http\Controllers\Master\GambarBerandaController;
use App\Http\Controllers\Master\MenuLayananSiswaController;
use App\Http\Controllers\Master\ProfilKelembagaanController;
use App\Http\Controllers\Master\TahunRaporController;
use Illuminate\Support\Facades\Route;

Route::prefix('master')->name('master.')->group(function () {
    Route::get('/profilkelembagaan/{id}', [ProfilKelembagaanController::class, 'index'])->name('profileKelembagaan.index');
    Route::post('/profilkelembagaan/{id}', [ProfilKelembagaanController::class, 'store/update']);

    Route::get('/datapengguna', [DataPenggunaController::class, 'index'])->name('datapengguna.index');
    Route::post('/datapengguna', [DataPenggunaController::class, 'store'])->name('datapengguna.store');
    Route::put('/datapengguna/{id}', [DataPenggunaController::class, 'update'])->name('datapengguna.update');

    Route::get('/datatingkat', [DataTingkatController::class, 'index'])->name('datatingkat.index');
    Route::post('/datatingkat', [DataTingkatController::class, 'store'])->name('datatingkat.store');
    Route::put('/datatingkat/{id}', [DataTingkatController::class, 'update'])->name('datatingkat.update');
    Route::delete('/datatingkat/erase', [DataTingkatController::class, 'erase'])->name('datatingkat.erase');

    Route::get('/datakelas', [DataKelasController::class, 'index'])->name('datakelas.index');
    Route::post('/datakelas', [DataKelasController::class, 'store'])->name('datakelas.store');
    Route::put('/datakelas/{id}', [DataKelasController::class, 'update'])->name('datakelas.update');
    Route::delete('/datakelas/erase', [DataKelasController::class, 'erase'])->name('datakelas.erase');

    Route::get('/datasiswa', [DataSiswaController::class, 'index'])->name('datasiswa.index');
    Route::post('/datasiswa', [DataSiswaController::class, 'store'])->name('datasiswa.store');
    Route::put('/datasiswa/{id}', [DataSiswaController::class, 'update'])->name('datasiswa.update');
    Route::delete('/datasiswa/erase', [DataSiswaController::class, 'erase'])->name('datasiswa.erase');

    Route::get('/dataguru', [DataGuruController::class, 'index'])->name('dataguru.index');
    Route::post('/dataguru', [DataGuruController::class, 'store'])->name('dataguru.store');
    Route::put('/dataguru/{id}', [DataGuruController::class, 'update'])->name('dataguru.update');
    Route::delete('/dataguru/erase', [DataGuruController::class, 'erase'])->name('dataguru.erase');

    Route::get('/datarapormapel', [DataRaporMapelController::class, 'index'])->name('datarapormapel.index');
    Route::post('/datarapormapel', [DataRaporMapelController::class, 'store'])->name('datarapormapel.store');
    Route::put('/datarapormapel/{id}', [DataRaporMapelController::class, 'update'])->name('datarapormapel.update');
    Route::delete('/datarapormapel/erase', [DataRaporMapelController::class, 'erase'])->name('datarapormapel.erase');

    Route::get('/tahunrapor', [TahunRaporController::class, 'index'])->name('tahunrapor.index');
    Route::post('/tahunrapor', [TahunRaporController::class, 'store'])->name('tahunrapor.store');
    Route::put('/tahunrapor/{id}', [TahunRaporController::class, 'update'])->name('tahunrapor.update');
    Route::delete('/tahunrapor/erase', [TahunRaporController::class, 'erase'])->name('tahunrapor.erase');

    Route::get('/menulayanansiswa', [MenuLayananSiswaController::class, 'index'])->name('menulayanansiswa.index');
    Route::post('/menulayanansiswa', [MenuLayananSiswaController::class, 'store'])->name('menulayanansiswa.store');
    Route::put('/menulayanansiswa/{id}', [MenuLayananSiswaController::class, 'update'])->name('menulayanansiswa.update');
    Route::delete('/menulayanansiswa/erase', [MenuLayananSiswaController::class, 'erase'])->name('menulayanansiswa.erase');

    Route::get('/gambarberanda', [GambarBerandaController::class, 'index'])->name('gambarberanda.index');
    Route::post('/gambarberanda', [GambarBerandaController::class, 'store'])->name('gambarberanda.store');
    Route::put('/gambarberanda/{id}', [GambarBerandaController::class, 'update'])->name('gambarberanda.update');
    Route::delete('/gambarberanda/erase', [GambarBerandaController::class, 'erase'])->name('gambarberanda.erase');
});
