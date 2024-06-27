<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    function index(){
        $jenis = Jenis::all();
        return view('admin.inventaris.jenis', compact('jenis'));
    }

    function create(){
        return response()->view('admin.inventaris.create-jenis');
    } 

    function store(Request $request){
        $request->validate([
            'nama_jenis' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        Jenis::create([
            'nama_jenis' => $request->nama_jenis,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('jenis.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan jenis inventaris');

    }

    function edit($id)
    {
        $jenis = Jenis::where('id', $id)->first();
        return view('admin.inventaris.edit-jenis', compact('jenis'));
    }

    function update($id, Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_jenis' => ['required', 'max:20'],
            'keterangan' => ['nullable', 'max:50']
        ]);

        $jenis = Jenis::where('id', $id)->first();
        $jenis->nama_jenis = $request->nama_jenis;

        if($keterangan = $request->keterangan){
            $jenis->keterangan = $keterangan;
        }

        $jenis->update();

        return redirect()->route('jenis.index')->with('alert', 'success')->with('message', 'Berhasil mengedit jenis inventaris');
       }

    function destroy($id){
        Jenis::find($id)->delete();

        return redirect()->route('jenis.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus jenis inventaris');
    }
}
