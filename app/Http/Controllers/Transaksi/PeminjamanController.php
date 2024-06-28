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
        $peminjamans = Peminjaman::with(['inventaris', 'pegawai'])->where('status', 1)->get();
        return view('admin.transaksi.peminjaman', compact('peminjamans'));
    }

    function create()
    {
        $aset = Aset::where('status', '0')->get(['id', 'nama']);
        return view('admin.transaksi.create-peminjaman', compact('aset'));
    }

    function store(CreatePeminjamanRequest $request)
    {
        $peminjaman = Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'inventaris_id' => $request->inventaris_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'jum_pinjam' => $request->jum_pinjam,
            'status' => 1,
            'keterangan' => $request->keterangan,
            'pegawai_id' => Auth::id()
        ]);

        $peminjaman->inventaris->status = 1;
        $peminjaman->inventaris->update();

        return redirect()->route('peminjaman.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan peminjam inventaris');
    }

    function edit($id)
    {
        $data = [
            'peminjaman' => Peminjaman::with(['inventaris', 'pegawai'])
                ->where('id', $id)
                ->select('id', 'nama_peminjam', 'tgl_pinjam', 'jum_pinjam', 'status', 'keterangan', 'inventaris_id')
                ->first(),
            'inventaris' => Aset::all(['id', 'nama'])
        ];
        
        return view('admin.transaksi.edit-peminjaman', $data);
    }

    function update(UpdatePeminjamanRequest $request, $id)
    {

        $peminjaman = Peminjaman::where('id', $id)->first();
        $data = [
            'nama_peminjam' => $request->nama_peminjam,
            'inventaris_id' => $request->inventaris_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'jum_pinjam' => $request->jum_pinjam,
            'status' => 1,
            'keterangan' => $request->keterangan,
            'pegawai_id' => Auth::id()
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
        $peminjaman = Peminjaman::find($id);
        $peminjaman->inventaris->status = 0;
        $peminjaman->inventaris->save();
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus peminjaman inventaris');
    }
}
