<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    function index()
    {
        $peminjamans = Peminjaman::with(['pengembalian', 'inventaris'])->get();
        return view('admin.transaksi.laporan', compact('peminjamans'));
    }
}
