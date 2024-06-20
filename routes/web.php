<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Inventaris\InventarisController;
use App\Http\Controllers\Inventaris\JenisController;
use App\Http\Controllers\Inventaris\RuangController;
use App\Http\Controllers\Transaksi\PeminjamanController;
use App\Http\Controllers\Transaksi\PengembalianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/pegawai', [UserController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('pegawai', [UserController::class, 'index'])->name('pegawai.index');
    Route::get('pegawai/create', [UserController::class, 'create'])->name('pegawai.create');
    Route::post('pegawai', [UserController::class, 'store'])->name('pegawai.store');
    Route::get('pegawai/{id}/edit', [UserController::class, 'edit'])->name('pegawai.edit');
    Route::put('pegawai/{id}', [UserController::class, 'update'])->name('pegawai.update');
    Route::delete('pegawai/{id}', [UserController::class, 'destroy'])->name('pegawai.destroy');

    Route::get('/tes', [UserController::class, 'tes'])->name('tes');
});

Route::middleware('auth')->group(function () {
    Route::get('inventaris', [InventarisController::class, 'index'])->name('inventaris.index');
    Route::get('inventaris/create', [InventarisController::class, 'create'])->name('inventaris.create');
    Route::post('inventaris', [InventarisController::class, 'store'])->name('inventaris.store');
    Route::get('inventaris/{id}/edit', [InventarisController::class, 'edit'])->name('inventaris.edit');
    Route::put('inventaris/{id}', [InventarisController::class, 'update'])->name('inventaris.update');
    Route::delete('inventaris/{id}', [InventarisController::class, 'destroy'])->name('inventaris.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index');
    Route::get('jenis/create', [JenisController::class, 'create'])->name('jenis.create');
    Route::post('jenis', [JenisController::class, 'store'])->name('jenis.store');
    Route::get('jenis/{id}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
    Route::put('jenis/{id}', [JenisController::class, 'update'])->name('jenis.update');
    Route::delete('jenis/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('ruang', [RuangController::class, 'index'])->name('ruang.index');
    Route::get('ruang/create', [RuangController::class, 'create'])->name('ruang.create');
    Route::post('ruang', [RuangController::class, 'store'])->name('ruang.store');
    Route::get('ruang/{id}/edit', [RuangController::class, 'edit'])->name('ruang.edit');
    Route::put('ruang/{id}', [RuangController::class, 'update'])->name('ruang.update');
    Route::delete('ruang/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('laporan', [JenisController::class, 'index'])->name('laporan.index');
    Route::get('laporan/create', [JenisController::class, 'create'])->name('laporan.create');
    Route::post('laporan', [JenisController::class, 'store'])->name('laporan.store');
    Route::get('laporan/{id}/edit', [JenisController::class, 'edit'])->name('laporan.edit');
    Route::put('laporan/{id}', [JenisController::class, 'update'])->name('laporan.update');
    Route::delete('laporan/{id}', [JenisController::class, 'destroy'])->name('laporan.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
    Route::put('peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
    Route::delete('peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
    Route::get('pengembalian/create', [PengembalianController::class, 'create'])->name('pengembalian.create');
    Route::post('pengembalian', [PengembalianController::class, 'store'])->name('pengembalian.store');
    Route::get('pengembalian/{id}/edit', [PengembalianController::class, 'edit'])->name('pengembalian.edit');
    Route::put('pengembalian/{id}', [PengembalianController::class, 'update'])->name('pengembalian.update');
    Route::delete('pengembalian/{id}', [PengembalianController::class, 'destroy'])->name('pengembalian.destroy');
});

Route::get('/inventaris/laporan', function () {
    return view('admin.transaksi.laporan');
})->name('laporan.index');