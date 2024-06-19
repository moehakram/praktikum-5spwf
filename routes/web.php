<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn() => view('admin.dashboard'));

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/pegawai', function () {
    return view('admin.pegawai.index');
});

Route::get('/inventaris/data', function () {
    return view('admin.inventaris.inventaris');
});

Route::get('/inventaris/jenis', function () {
    return view('admin.inventaris.jenis');
});
Route::get('/inventaris/ruang', function () {
    return view('admin.inventaris.ruang');
});

Route::get('/inventaris/laporan', function () {
    return view('admin.inventaris.laporan');
});
Route::get('/transaksi/peminjaman', function () {
    return view('admin.transaksi.peminjaman');
});
Route::get('/transaksi/pengembalian', function () {
    return view('admin.transaksi.pengembalian');
});
Route::get('/transaksi/laporan', function () {
    return view('admin.transaksi.laporan');
});