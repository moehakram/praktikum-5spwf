<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if($request->user() === null){
            return redirect()->route('login');
        }else{
            return view('admin.dashboard', [
                'tot_pegawai' => User::count() - 1, 
                'tot_pinjam' => Peminjaman::sum('jum_pinjam'), 
                'tot_jenis_barang' => Kategori::count(), 
                'tot_brg_belum_kembali' => Peminjaman::where('status', 1)->sum('jum_pinjam'), 
            ]);
        }
    }
}
