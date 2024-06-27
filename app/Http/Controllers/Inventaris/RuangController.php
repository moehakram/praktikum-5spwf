<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    function index(){
        $ruang = Ruang::all();
        return view('admin.inventaris.ruang', compact('ruang'));
    }

    function create(){
        return response()->view('admin.inventaris.create-ruang');
    } 

    function store(Request $request){
        $request->validate([
            'nama_ruang' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        Ruang::create([
            'nama_ruang' => $request->nama_ruang,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('ruang.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan ruang inventaris');

    }

    function edit($id)
    {
        $ruang = Ruang::where('id', $id)->first();
        return view('admin.inventaris.edit-ruang', compact('ruang'));
    }

    function update($id, Request $request)
    {
        $request->validate([
            'nama_ruang' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        $ruang = Ruang::where('id', $id)->first();
        $ruang->nama_ruang = $request->nama_ruang;

        if($keterangan = $request->keterangan){
            $ruang->keterangan = $keterangan;
        }

        $ruang->update();

        return redirect()->route('ruang.index')->with('alert', 'success')->with('message', 'Berhasil mengedit ruang inventaris');
       }

    function destroy($id){
        Ruang::find($id)->delete();
        return redirect()->route('ruang.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus ruang inventaris');
    }
}
