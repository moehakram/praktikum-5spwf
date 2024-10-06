<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Aset;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    function index(){
        $user = Auth::user();
        if($user->hasRole('admin')){
            $peminjamans = Peminjaman::with(['inventaris', 'pengurus'])->doesntHave('pengembalian')->get();
        }else{
            $peminjamans = Peminjaman::with(['inventaris', 'pengurus'])->doesntHave('pengembalian')->where('pengurus_id', $user->id)->get();
        }
        return view('admin.transaksi.peminjaman.index', compact('peminjamans'));
    }

    function create()
    {
        $aset = Aset::distinct()->get(['id', 'nama']);

        $aset = $aset->filter(function ($data) {
            $jumlahPinjam = Peminjaman::where('nama_barang', $data->nama)->where('status_pengembalian', false)->sum('jumlah');
            $jumlahBarang = Aset::where('nama', $data->nama)->sum('stok');
            
            // Jika jumlah barang lebih besar dari atau sama dengan jumlah pinjaman, item tetap dalam koleksi
            return $jumlahBarang > $jumlahPinjam;
        });
        
        return view('admin.transaksi.peminjaman.create', compact('aset'));
    }

    function store(CreatePeminjamanRequest $request)
    {

        $nmbarang = Aset::where('id', $request->inventaris_id)->first('nama');
        $jumlahBarang = Aset::where('nama', $nmbarang->nama)->sum('stok');

        $dipinjam = Peminjaman::where('inventaris_id', $request->inventaris_id)->where('status_pengembalian', false)->sum('jumlah');

        if(($jumlahBarang - $dipinjam) < $request->jumlah) return redirect()->back()->with('alert', 'info')->with('message', 'Barang yang mau dipinjam tidak cukup');

        Peminjaman::create([
            'nama' => $request->nama,
            'nama_barang' => $nmbarang->nama,
            'inventaris_id' => $request->inventaris_id,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'pengurus_id' => Auth::id()
        ]);

        return redirect()->route('peminjaman.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan peminjam inventaris');
    }

    function edit($id)
    {
        $peminjaman = Peminjaman::with(['inventaris', 'pengurus'])
            ->where('id', $id)->first();

        $aset = Aset::distinct()->get(['id', 'nama']);

        $aset = $aset->filter(function ($data) use($peminjaman) {
            $jumlahPinjam = Peminjaman::where('nama_barang', $data->nama)->where('status_pengembalian', false)->sum('jumlah');
            $jumlahBarang = Aset::where('nama', $data->nama)->sum('stok');
            
            // Jika jumlah barang lebih besar dari atau sama dengan jumlah pinjaman, item tetap dalam koleksi
            return ($jumlahBarang > $jumlahPinjam) || ($data->nama == $peminjaman->nama_barang);
        });
        
        return view('admin.transaksi.peminjaman.edit', [
            'peminjaman' => $peminjaman,
            'aset' => $aset
        ]);
    }

    function update(UpdatePeminjamanRequest $request, $id)
    {

        $peminjaman = Peminjaman::where('id', $id)->first();

        $nmbarang = Aset::where('id', $request->inventaris_id)->first('nama');
        $jumlahBarang = Aset::where('nama', $nmbarang->nama)->sum('stok');

        $dipinjam = Peminjaman::where('inventaris_id', $request->inventaris_id)->where('status_pengembalian', false)->sum('jumlah');

        if($peminjaman->nama_barang == $nmbarang->nama) $dipinjam = $dipinjam - $peminjaman->jumlah;

        if(($jumlahBarang - $dipinjam) < $request->jumlah) return redirect()->back()->with('alert', 'info')->with('message', 'Barang yang mau dipinjam tidak cukup');

        $data = [
            'nama' => $request->nama,
            'nama_barang' => $nmbarang->nama,
            'inventaris_id' => $request->inventaris_id,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'pengurus_id' => Auth::id()
        ];
        
        foreach($data as $index => $value){
            if($value !== null){
                $peminjaman->$index = $value;
            }
        }

        $peminjaman->update();

        return redirect()->route('peminjaman.index')->with('alert', 'success')->with('message', 'Berhasil mengedit peminjaman inventaris');
       }

    function destroy($id){
        Peminjaman::destroy($id);
        return redirect()->route('peminjaman.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus peminjaman inventaris');
    }
}
