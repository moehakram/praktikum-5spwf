<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Organisasi;
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
                'tot_pinjam' => Peminjaman::sum('jumlah'), 
                'jumlah_organisasi' => Organisasi::count(),
                'tot_brg_belum_kembali' => Peminjaman::doesntHave('pengembalian')->sum('jumlah'), 
            ]);
        }
    }
}
