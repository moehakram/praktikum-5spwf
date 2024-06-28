<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    function index(){
        $gudang = Gudang::all();
        return view('admin.inventaris.gudang', compact('gudang'));
    }

    function create(){
        return response()->view('admin.inventaris.create-gudang');
    } 

    function store(Request $request){
        $request->validate([
            'nama_ruang' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        Gudang::create([
            'nama_ruang' => $request->nama_ruang,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('ruang.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan gudang inventaris');

    }

    function edit($id)
    {
        $gudang = Gudang::where('id', $id)->first();
        return view('admin.inventaris.edit-gudang', compact('gudang'));
    }

    function update($id, Request $request)
    {
        $request->validate([
            'nama_ruang' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        $gudang = Gudang::where('id', $id)->first();
        $gudang->nama_ruang = $request->nama_ruang;

        if($keterangan = $request->keterangan){
            $gudang->keterangan = $keterangan;
        }

        $gudang->update();

        return redirect()->route('ruang.index')->with('alert', 'success')->with('message', 'Berhasil mengedit gudang inventaris');
       }

    function destroy($id){
        Gudang::find($id)->delete();
        return redirect()->route('ruang.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus gudang inventaris');
    }
}
