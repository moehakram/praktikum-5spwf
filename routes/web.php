<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Inventaris\InventarisController;
use App\Http\Controllers\Inventaris\JenisController;
use App\Http\Controllers\Transaksi\LaporanController;
use App\Http\Controllers\Inventaris\RuangController;
use App\Http\Controllers\Transaksi\PeminjamanController;
use App\Http\Controllers\Transaksi\PengembalianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/home', fn()=> redirect('/'));

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'showLogin')->middleware('guest');
    Route::post('/login', 'login')->name('login')->middleware('guest');
    Route::get('/logout', 'logout')->name('logout');
});


Route::middleware(['auth', 'permission:pagePegawai'])->group(function () {
    Route::get('pegawai', [UserController::class, 'index'])->name('pegawai.index');
    Route::get('pegawai/create', [UserController::class, 'create'])->name('pegawai.create');
    Route::post('pegawai', [UserController::class, 'store'])->name('pegawai.store');
    Route::get('pegawai/{nip}/edit', [UserController::class, 'edit'])->name('pegawai.edit');
    Route::put('pegawai/{nip}', [UserController::class, 'update'])->name('pegawai.update');
    Route::get('pegawai/{id}/hapus', [UserController::class, 'destroy'])->name('pegawai.destroy');
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

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan')->middleware('auth');

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