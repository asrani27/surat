<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KpiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\SuratPinjamController;

Route::get('/', function(){
    return view('welcome');
});
Route::post('/login', [LoginController::class, 'login']);


Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/home/superadmin', [HomeController::class, 'superadmin']);
    Route::prefix('superadmin')->group(function () {
        Route::resource('pegawai', PegawaiController::class);
        Route::resource('kpi', KpiController::class);
        Route::resource('jabatan', JabatanController::class);
        Route::resource('evaluasi', EvaluasiController::class);
        Route::resource('suratmasuk', SuratMasukController::class);
        Route::resource('surattugas', SuratTugasController::class);
        Route::resource('suratizin', SuratIzinController::class);
        Route::resource('suratpinjam', SuratPinjamController::class);
    });
    Route::get('/laporan/pegawai', [LaporanController::class, 'pegawai']);
    Route::get('/laporan/suratmasuk', [LaporanController::class, 'suratmasuk']);
    Route::get('/laporan/surattugas', [LaporanController::class, 'surattugas']);
    Route::get('/laporan/suratizin', [LaporanController::class, 'suratizin']);
    Route::get('/laporan/suratpinjam', [LaporanController::class, 'suratpinjam']);
    Route::post('/laporan/evaluasi', [LaporanController::class, 'evaluasi']);
});