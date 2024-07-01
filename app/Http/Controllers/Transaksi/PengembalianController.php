<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePengembalianRequest;
use App\Http\Requests\UpdatePengembalianRequest;
use App\Models\Inventaris;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    function index(){
        $pengembalians = Pengembalian::with(['peminjaman', 'pengurus'])->get();
        return view('admin.transaksi.pengembalian.index', compact('pengembalians'));
    }

    function getData(Request $request){

        $peminjamanId = $request->input('peminjaman_id');
        // Menggunakan model Peminjaman untuk mencari data
        $peminjaman = Peminjaman::with('inventaris')->find($peminjamanId);
        if ($peminjaman) {
            return response()->json(['nama_barang' => $peminjaman->inventaris->nama]);
        } else {
            return response()->json(['nama_barang' => ''], 404);
        }
    }

    function create()
    {
        $peminjaman = Peminjaman::doesntHave('pengembalian')->get();
        return view('admin.transaksi.pengembalian.create', compact('peminjaman'));
    }

    function store(CreatePengembalianRequest $request){

        Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'pengurus_id' => Auth::id()
        ]);

        return redirect()->route('pengembalian.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan kembali inventaris');
    }

    function edit($id)
    {
        $pengembalian = Pengembalian::with(['peminjaman'])->find($id);
        return view('admin.transaksi.pengembalian.edit', compact('pengembalian'));
    }

    function update($id, UpdatePengembalianRequest $request)
    {

        $pengembalian = Pengembalian::with(['peminjaman'])->find($id);
        $data = [
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'pengurus_id' => Auth::id()
        ];
        
        foreach($data as $index => $value){
            if($value !== null){
                $pengembalian->$index = $value;
            }
        }

        $pengembalian->update();

        return redirect()->route('pengembalian.index')->with('alert', 'success')->with('message', 'Berhasil mengedit pengembalian inventaris');
       }

    function destroy($id)
    {
        $pengembalian = Pengembalian::destroy($id);
        if($pengembalian){
            return redirect()->route('pengembalian.index')
            ->with('alert', 'success')->with('message', 'Berhasil hapus pengembalian inventaris');
        }else{
            return redirect()->route('pengembalian.index')
            ->with('alert', 'danger')->with('message', 'Gagal hapus pengembalian inventaris');
        }
    }
}