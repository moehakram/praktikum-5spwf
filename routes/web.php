<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\Transaksi\LaporanController;
use App\Http\Controllers\Transaksi\PeminjamanController;
use App\Http\Controllers\Transaksi\PengembalianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::redirect('home', '/');

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
    'middleware' => ['auth', 'permission:pagePegawai']
], function(){
    Route::controller(UserController::class)->group(function () {
        Route::get('pegawai', 'index')->name('pegawai.index');
        Route::get('pegawai/create','create')->name('pegawai.create');
        Route::post('pegawai', 'store')->name('pegawai.store');
        Route::get('pegawai/{nip}/edit','edit')->name('pegawai.edit');
        Route::put('pegawai/{nip}', 'update')->name('pegawai.update');
        Route::get('pegawai/{id}/hapus','destroy')->name('pegawai.destroy');
    });

    Route::controller(OrganisasiController::class)->group(function () {
        Route::get('organisasi', 'index')->name('organisasi.index');
        Route::get('organisasi/create', 'create')->name('organisasi.create');
        Route::post('organisasi',  'store')->name('organisasi.store');
        Route::get('organisasi/{id}/edit','edit')->name('organisasi.edit');
        Route::put('organisasi/{id}', 'update')->name('organisasi.update');
        Route::get('organisasi/{id}/hapus', 'destroy')->name('organisasi.destroy');
    });

});

Route::middleware('auth')->group(function(){
    
    Route::controller(AsetController::class)->group(function () {
        Route::get('inventaris', 'index')->name('inventaris.index');
        Route::get('inventaris/create', 'create')->name('inventaris.create');
        Route::post('inventaris', 'store')->name('inventaris.store');
        Route::get('inventaris/{id}/edit', 'edit')->name('inventaris.edit');
        Route::put('inventaris/{id}', 'update')->name('inventaris.update');
        Route::get('inventaris/{id}/hapus', 'destroy')->name('inventaris.destroy');
    });

    Route::controller(PeminjamanController::class)->group(function () {
        Route::get('peminjaman', 'index')->name('peminjaman.index');
        Route::get('peminjaman/create', 'create')->name('peminjaman.create');
        Route::post('peminjaman', 'store')->name('peminjaman.store');
        Route::get('peminjaman/{id}/edit', 'edit')->name('peminjaman.edit');
        Route::put('peminjaman/{id}', 'update')->name('peminjaman.update');
        Route::get('peminjaman/{id}/hapus', 'destroy')->name('peminjaman.destroy');
    });

    Route::controller(PengembalianController::class)->group(function () {
        Route::get('pengembalian', 'index')->name('pengembalian.index');
        Route::get('pengembalian/create', 'create')->name('pengembalian.create');
        Route::post('pengembalian', 'store')->name('pengembalian.store');
        Route::post('getInventaris', 'getData');
        Route::get('pengembalian/{id}/edit', 'edit')->name('pengembalian.edit');
        Route::put('pengembalian/{id}', 'update')->name('pengembalian.update');
        Route::get('pengembalian/{id}/hapus', 'destroy')->name('pengembalian.destroy');
    });

    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
});




