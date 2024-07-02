<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Organisasi;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
       
        if(($user = Auth::user()) === null){
            return redirect()->route('login');
        }else{
            if($user->hasRole('admin')){
                $total_pinjam = Peminjaman::sum('jumlah');
                $tot_brg_belum_kembali = Peminjaman::doesntHave('pengembalian')->sum('jumlah');
            }else{
                $total_pinjam = Peminjaman::where('pengurus_id', $id = Auth::id())->sum('jumlah');
                $tot_brg_belum_kembali = Peminjaman::doesntHave('pengembalian')->where('pengurus_id', $id)->sum('jumlah');
            }
            return view('admin.dashboard', [
                'tot_pegawai' => User::count() - 1, 
                'tot_pinjam' => $total_pinjam,
                'jumlah_organisasi' => Organisasi::count(),
                'tot_brg_belum_kembali' => $tot_brg_belum_kembali 
            ]);
        }
    }
}
