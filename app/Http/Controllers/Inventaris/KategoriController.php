<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index(){
        $kategori = Kategori::all();
        return view('admin.inventaris.kategori', compact('kategori'));
    }

    function create(){
        return response()->view('admin.inventaris.create-kategori');
    } 

    function store(Request $request){
        $request->validate([
            'nama_jenis' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        Kategori::create([
            'nama_jenis' => $request->nama_jenis,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('jenis.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan kategori inventaris');

    }

    function edit($id)
    {
        $kategori = Kategori::where('id', $id)->first();
        return view('admin.inventaris.edit-kategori', compact('kategori'));
    }

    function update($id, Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_jenis' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        $kategori = Kategori::where('id', $id)->first();
        $kategori->nama_jenis = $request->nama_jenis;

        if($keterangan = $request->keterangan){
            $kategori->keterangan = $keterangan;
        }

        $kategori->update();

        return redirect()->route('jenis.index')->with('alert', 'success')->with('message', 'Berhasil mengedit kategori inventaris');
       }

    function destroy($id){
        Kategori::find($id)->delete();

        return redirect()->route('jenis.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus kategori inventaris');
    }
}
