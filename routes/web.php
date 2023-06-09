<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KPAController;
use App\Http\Controllers\KPPController;
use App\Http\Controllers\SKPController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KorbanController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenilaiController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\RealisasiController;
use App\Http\Controllers\TersangkaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\TpermohonanController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\GantiPasswordController;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('superadmin')) {
            return redirect('superadmin');
        } elseif (Auth::user()->hasRole('pemohon')) {
            return redirect('pemohon');
        }
    }
    return redirect('/login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('daftar', [DaftarController::class, 'index']);
Route::post('daftar', [DaftarController::class, 'daftar']);
Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);


Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);
    Route::post('superadmin/sk/updatelurah', [HomeController::class, 'updatelurah']);

    Route::get('superadmin/pegawai', [PegawaiController::class, 'index']);
    Route::get('superadmin/pegawai/create', [PegawaiController::class, 'create']);
    Route::post('superadmin/pegawai/create', [PegawaiController::class, 'store']);
    Route::get('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::post('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);
    Route::get('superadmin/pegawai/delete/{id}', [PegawaiController::class, 'delete']);

    Route::get('superadmin/skp', [SKPController::class, 'index']);
    Route::get('superadmin/skp/create', [SKPController::class, 'create']);
    Route::post('superadmin/skp/create', [SKPController::class, 'store']);
    Route::get('superadmin/skp/edit/{id}', [SKPController::class, 'edit']);
    Route::post('superadmin/skp/edit/{id}', [SKPController::class, 'update']);
    Route::get('superadmin/skp/delete/{id}', [SKPController::class, 'delete']);

    Route::get('superadmin/realisasi', [RealisasiController::class, 'index']);
    Route::get('superadmin/realisasi/create', [RealisasiController::class, 'create']);
    Route::post('superadmin/realisasi/create', [RealisasiController::class, 'store']);
    Route::get('superadmin/realisasi/edit/{id}', [RealisasiController::class, 'edit']);
    Route::post('superadmin/realisasi/edit/{id}', [RealisasiController::class, 'update']);
    Route::get('superadmin/realisasi/delete/{id}', [RealisasiController::class, 'delete']);

    Route::get('superadmin/penilaian/penilai', [PenilaiController::class, 'index']);
    Route::get('superadmin/penilaian/penilai/create', [PenilaiController::class, 'create']);
    Route::post('superadmin/penilaian/penilai/create', [PenilaiController::class, 'store']);
    Route::get('superadmin/penilaian/penilai/edit/{id}', [PenilaiController::class, 'edit']);
    Route::post('superadmin/penilaian/penilai/edit/{id}', [PenilaiController::class, 'update']);
    Route::get('superadmin/penilaian/penilai/delete/{id}', [PenilaiController::class, 'delete']);

    Route::get('superadmin/penilaian/skp', [PenilaianController::class, 'skp']);
    Route::get('superadmin/penilaian/skp/edit/{id}', [PenilaianController::class, 'skp_edit']);
    Route::post('superadmin/penilaian/skp/edit/{id}', [PenilaianController::class, 'skp_update']);
    Route::get('superadmin/penilaian/skp/delete/{id}', [PenilaianController::class, 'skp_delete']);

    Route::get('superadmin/penilaian/perilaku', [PenilaianController::class, 'perilaku']);
    Route::get('superadmin/penilaian/perilaku/edit/{id}', [PenilaianController::class, 'perilaku_edit']);
    Route::post('superadmin/penilaian/perilaku/edit/{id}', [PenilaianController::class, 'perilaku_update']);
    Route::get('superadmin/penilaian/perilaku/delete/{id}', [PenilaianController::class, 'perilaku_delete']);

    Route::get('superadmin/penilaian/kinerja', [PenilaianController::class, 'kinerja']);
    Route::get('superadmin/penilaian/kinerja/edit/{id}', [PenilaianController::class, 'kinerja_edit']);
    Route::post('superadmin/penilaian/kinerja/edit/{id}', [PenilaianController::class, 'kinerja_update']);
    Route::get('superadmin/penilaian/kinerja/delete/{id}', [PenilaianController::class, 'kinerja_delete']);


    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::post('superadmin/laporan/penilaian', [LaporanController::class, 'cetak']);
    Route::get('superadmin/laporan/pegawai', [LaporanController::class, 'pegawai']);
});
