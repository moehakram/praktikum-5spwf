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

    function create()
    {
        $peminjaman = Peminjaman::doesntHave('pengembalian')->get();
        return view('admin.transaksi.pengembalian.create', compact('peminjaman'));
    }

    function store(CreatePengembalianRequest $request){

        $pengembalian = Pengembalian::create([
            'peminjaman_id' => $peminjaman_id = $request->peminjaman_id,
            'tgl_kembali' => $request->tgl_kembali,
            'jum_kembali' => $request->jum_kembali,
            'keterangan' => $request->keterangan,
            'pengurus_id' => Auth::id()
        ]);

        if ($pengembalian) {
            $peminjaman = Peminjaman::find($peminjaman_id);
            if ($peminjaman) {
                $peminjaman->status = 0;
                $peminjaman->inventaris->status = 0;
                $peminjaman->inventaris->update();
                $peminjaman->save();
            }
        }

        return redirect()->route('pengembalian.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan kembali inventaris');
    }

    function edit($id)
    {
        $pengembalian = Pengembalian::with(['peminjaman'])->find($id);
        return view('admin.transaksi.edit-pengembalian', compact('pengembalian'));
    }

    function update($id, UpdatePengembalianRequest $request)
    {

        $pengembalian = Pengembalian::with(['peminjaman'])->find($id);
        $data = [
            'tgl_kembali' => $request->tgl_kembali,
            'jum_kembali' => $request->jum_kembali,
            'keterangan' => $request->keterangan,
            'pengurus_id' => Auth::id()
        ];
        
        foreach($data as $index => $value){
            if($value !== null){
                $pengembalian->$index = $value;
            }
        }

        $pengembalian->peminjaman->status = 0;

        $pengembalian->update();

        return redirect()->route('pengembalian.index')->with('alert', 'success')->with('message', 'Berhasil mengedit pengembalian inventaris');
       }

    function destroy($id)
    {
        $pengembalian = Pengembalian::with('peminjaman')->find($id);
        if($pengembalian){
            $pengembalian->peminjaman->status = 1;
            $pengembalian->peminjaman->update();
            $pengembalian->delete();
            return redirect()->route('pengembalian.index')
            ->with('alert', 'success')->with('message', 'Berhasil hapus pengembalian inventaris');
        }else{
            return redirect()->route('pengembalian.index')
            ->with('alert', 'danger')->with('message', 'Data pengembalian inventaris tidak ditermukan');
        }
    }
}