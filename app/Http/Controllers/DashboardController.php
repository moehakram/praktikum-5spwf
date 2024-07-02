<?php

namespace App\Http\Controllers;

use App\Models\Aset;
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
            $organisasi = $user->organisasi;
            if($user->hasRole('admin')){
                $nama_organisasi = null;
                $jumlah_pengurus = User::count() - 1;
                $jumlah_aset = Aset::count();
                $tot_brg_belum_kembali = Peminjaman::doesntHave('pengembalian')->count('jumlah');
            }else{
                $jumlah_pengurus = User::where('organisasi_id', $organisasi->id)->count();
                $nama_organisasi = $organisasi->nama;
                $jumlah_aset = Aset::where('organisasi_id', $organisasi->id)->count();
                // $tot_brg_belum_kembali = Peminjaman::doesntHave('pengembalian')->where('pengurus_id', $user->id)->count('jumlah');
                $organisasiId = $organisasi->id;
                $tot_brg_belum_kembali = Peminjaman::whereHas('pengurus', function($query) use($organisasiId){
                    $query->where('organisasi_id', $organisasiId);
                })->doesntHave('pengembalian')->count();
            }

            return view('admin.dashboard', [
                'tot_pegawai' => $jumlah_pengurus,
                'organisasi' => $nama_organisasi,
                'jumlah_aset' => $jumlah_aset,
                'jumlah_organisasi' => Organisasi::count(),
                'tot_brg_belum_kembali' => $tot_brg_belum_kembali 
            ]);
        }
    }
}
