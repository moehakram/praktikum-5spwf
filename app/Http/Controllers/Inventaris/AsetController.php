<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;
use App\Models\Aset;
use App\Models\Kategori;
use App\Models\Gudang;

class AsetController extends Controller
{
    function index(){
        $aset = Aset::all();
        return view('admin.inventaris.aset', compact('aset'));
    }

    function create(){
        $data = [
            'jenis' => Kategori::all(),
            'ruang' => Gudang::all()
        ];
        return response()->view('admin.inventaris.create-aset', $data);
    }

    function store(CreateInventarisRequest $request){
        $aset = new Aset([
            'nama' => $request['name'],
            'kondisi' => $request['kondisi'],
            'keterangan' => $request['keterangan'],
            'stok' => $request['stok'],
            'jenis' => $request['jenis'],
            'ruang' => $request['ruang']
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

    function edit($id){
        $data = [
            'aset' => Aset::where('id', $id)->first(),
            'jenis' => Kategori::all(),
            'ruang' => Gudang::all()
        ];
        return response()->view('admin.inventaris.edit-aset', $data);

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
        
        if($jenis = $request->jenis){
            $aset->jenis = $jenis;
        }

        if($ruang = $request->ruang){
            $aset->ruang = $ruang;
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
        $aset = Aset::find($id);
        $aset->delete();

        return redirect()->route('inventaris.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus aset inventaris');
    }
}
