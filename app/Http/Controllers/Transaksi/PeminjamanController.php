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
        $aset = Aset::doesntHave('peminjaman')->get(['id', 'nama']);
        return view('admin.transaksi.peminjaman.create', compact('aset'));
    }

    function store(CreatePeminjamanRequest $request)
    {
        Peminjaman::create([
            'nama' => $request->nama,
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
        // $inventaris = Aset::all(['id', 'nama']);
        $aset = Aset::doesntHave('peminjaman')->get(['id', 'nama']);
        
        return view('admin.transaksi.peminjaman.edit', [
            'peminjaman' => $peminjaman,
            'aset' => $aset
        ]);
    }

    function update(UpdatePeminjamanRequest $request, $id)
    {

        $peminjaman = Peminjaman::where('id', $id)->first();
        $data = [
            'nama' => $request->nama,
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
