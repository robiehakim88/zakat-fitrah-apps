<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\PenerimaZakatController;
use App\Http\Controllers\OrangBerzakatController;
use App\Http\Controllers\JenisZakatController;

use App\Http\Controllers\LaporanController;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::middleware(['auth'])->group(function () {
   // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('warga', WargaController::class);
    Route::resource('penerimazakat', PenerimaZakatController::class);
    Route::resource('orangberzakat', OrangBerzakatController::class);
    Route::resource('jeniszakat', JenisZakatController::class);
    
     Route::get('/orang-berzakat', [LaporanController::class, 'laporanOrangBerzakat'])->name('laporan.orang_berzakat');
    Route::get('/cetak-orang-berzakat', [LaporanController::class, 'cetakOrangBerzakat'])->name('laporan.cetak_orang_berzakat');

    Route::get('/penerima-zakat', [LaporanController::class, 'laporanPenerimaZakat'])->name('laporan.penerima_zakat');
    Route::get('/cetak-penerima-zakat', [LaporanController::class, 'cetakPenerimaZakat'])->name('laporan.cetak_penerima_zakat');

    Route::get('/rincian-zakat', [LaporanController::class, 'laporanRincianZakat'])->name('laporan.rincian_zakat');
    Route::get('/cetak-rincian-zakat', [LaporanController::class, 'cetakRincianZakat'])->name('laporan.cetak_rincian_zakat');

    
});






Route::prefix('laporan')->group(function () {
  //  Route::get('/orang-berzakat', [LaporanController::class, 'laporanOrangBerzakat'])->name('laporan.orang_berzakat');
    //Route::get('/cetak-orang-berzakat', [LaporanController::class, 'cetakOrangBerzakat'])->name('laporan.cetak_orang_berzakat');

//    Route::get('/penerima-zakat', [LaporanController::class, 'laporanPenerimaZakat'])->name('laporan.penerima_zakat');
  //  Route::get('/cetak-penerima-zakat', [LaporanController::class, 'cetakPenerimaZakat'])->name('laporan.cetak_penerima_zakat');

//    Route::get('/rincian-zakat', [LaporanController::class, 'laporanRincianZakat'])->name('laporan.rincian_zakat');
 //   Route::get('/cetak-rincian-zakat', [LaporanController::class, 'cetakRincianZakat'])->name('laporan.cetak_rincian_zakat');
});
