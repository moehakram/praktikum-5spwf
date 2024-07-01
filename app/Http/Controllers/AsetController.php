<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;
use App\Models\Aset;
use App\Models\Organisasi;

class AsetController extends Controller
{
    function index(){
        $inventaris = Aset::with('organisasi')->get();
        return view('admin.inventaris.aset', compact('inventaris'));
    }

    function create(){
        $organisasi = Organisasi::all();
        return response()->view('admin.inventaris.create-aset', compact('organisasi'));
    }

    function store(CreateInventarisRequest $request){
        $aset = new Aset([
            'nama' => $request['nama'],
            'kondisi' => $request['kondisi'],
            'keterangan' => $request['keterangan'],
            'stok' => $request['stok'],
            'organisasi_id' => $request['organisasi']
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/aset-inventaris');
            $image->move($destinationPath, $name);
            $aset->foto = $name;
        }

        $aset->save();

        return redirect()->route('inventaris.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan aset inventaris');
    }

    function edit($id)
    {
        $aset = Aset::where('id', $id)->first();
        return response()->view('admin.inventaris.edit-aset', compact('aset'));
    }

    function update(UpdateInventarisRequest $request, $id)
    {
        $aset = Aset::where('id', $id)->first();

        if($nama = $request->nama){
            $aset->nama = $nama;
        }
        
        if($kondisi = $request->kondisi){
            $aset->kondisi = $kondisi;
        }

        if($keterangan = $request->keterangan){
            $aset->keterangan = $keterangan;
        }
        
        if($stok = $request->stok){
            $aset->stok = $stok;
        }

        if($organisasi = $request->organisasi){
            $aset->organisasi_id = $organisasi;
        }

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/aset-inventaris');
            $image->move($destinationPath, $name);
            $aset->foto = $name;
        }

        $aset->update();

        return redirect()->route('inventaris.index')->with('alert', 'success')->with('message', 'Berhasil mengedit aset inventaris');
    }

    function destroy($id){
        Aset::destroy($id);
        return redirect()->route('inventaris.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus aset inventaris');
    }
}
