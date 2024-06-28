<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Inventaris\AsetController;
use App\Http\Controllers\Inventaris\KategoriController;
use App\Http\Controllers\Transaksi\LaporanController;
use App\Http\Controllers\Inventaris\GudangController;
use App\Http\Controllers\Transaksi\PeminjamanController;
use App\Http\Controllers\Transaksi\PengembalianController;
use App\Http\Controllers\UserController;
use App\Models\Aset;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('home', fn()=> redirect('/'));

Route::controller(AuthController::class)->group(function(){

    Route::middleware('guest')->group(function(){
        Route::get('/login', 'showLogin');
        Route::post('/login', 'login')->name('login');
    });

    Route::middleware('auth')->group(function(){
        Route::get('/profile', 'profile')->name('profile');
        Route::put('/profile/update', 'updateProfile')->name('profile.update');
        Route::get('/password', 'password')->name('password');
        Route::put('/password/update', 'updatePassword')->name('password.update');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::group([
    'middleware' => ['auth', 'permission:pagePegawai'],
    'controller' => UserController::class
], function(){

    Route::get('pegawai', 'index')->name('pegawai.index');
    Route::get('pegawai/create','create')->name('pegawai.create');
    Route::post('pegawai', 'store')->name('pegawai.store');
    Route::get('pegawai/{nip}/edit','edit')->name('pegawai.edit');
    Route::put('pegawai/{nip}', 'update')->name('pegawai.update');
    Route::get('pegawai/{id}/hapus','destroy')->name('pegawai.destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('inventaris', [AsetController::class, 'index'])->name('inventaris.index');
    Route::get('inventaris/create', [AsetController::class, 'create'])->name('inventaris.create');
    Route::post('inventaris', [AsetController::class, 'store'])->name('inventaris.store');
    Route::get('inventaris/{id}/edit', [AsetController::class, 'edit'])->name('inventaris.edit');
    Route::put('inventaris/{id}', [AsetController::class, 'update'])->name('inventaris.update');
    Route::get('inventaris/{id}/hapus', [AsetController::class, 'destroy'])->name('inventaris.destroy');
});

Route::middleware('auth')->controller(KategoriController::class)->group(function () {
    Route::get('kategori', 'index')->name('jenis.index');
    Route::get('kategori/create', 'create')->name('jenis.create');
    Route::post('kategori', 'store')->name('jenis.store');
    Route::get('kategori/{id}/edit','edit')->name('jenis.edit');
    Route::put('kategori/{id}', 'update')->name('jenis.update');
    Route::get('kategori/{id}/hapus', 'destroy')->name('jenis.destroy');
});

Route::controller(GudangController::class)->middleware('auth')->group(function () {
    Route::get('gudang', 'index')->name('ruang.index');
    Route::get('gudang/create', 'create')->name('ruang.create');
    Route::post('gudang',  'store')->name('ruang.store');
    Route::get('gudang/{id}/edit','edit')->name('ruang.edit');
    Route::put('gudang/{id}', 'update')->name('ruang.update');
    Route::get('gudang/{id}/hapus', 'destroy')->name('ruang.destroy');
});

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
    Route::put('peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
    Route::get('peminjaman/{id}/hapus', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
    Route::get('pengembalian/create', [PengembalianController::class, 'create'])->name('pengembalian.create');
    Route::post('pengembalian', [PengembalianController::class, 'store'])->name('pengembalian.store');
    Route::post('getInventaris', [PengembalianController::class, 'getData']);
    Route::get('pengembalian/{id}/edit', [PengembalianController::class, 'edit'])->name('pengembalian.edit');
    Route::put('pengembalian/{id}', [PengembalianController::class, 'update'])->name('pengembalian.update');
    Route::get('pengembalian/{id}/hapus', [PengembalianController::class, 'destroy'])->name('pengembalian.destroy');
});

Route::get('laporan', [LaporanController::class, 'index'])->middleware('auth')->name('laporan');