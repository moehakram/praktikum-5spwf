<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;
use App\Models\Inventaris;
use App\Models\Jenis;
use App\Models\Ruang;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    function index(){
        $inventaris = Inventaris::all();
        return view('admin.inventaris.inventaris', compact('inventaris'));
    }

    function create(){
        $data = [
            'jenis' => Jenis::all(),
            'ruang' => Ruang::all()
        ];
        return response()->view('admin.inventaris.create-inventaris', $data);
    }

    function store(CreateInventarisRequest $request){
        $inventaris = new Inventaris([
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
            $destinationPath = public_path('/images/inventaris-barang');
            $image->move($destinationPath, $name);
            $inventaris->foto = $name;
        }

        $inventaris->save();

        return redirect()->route('inventaris.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan barang inventaris');
    }

    function edit($id){
        $data = [
            'inventaris' => Inventaris::where('id', $id)->first(),
            'jenis' => Jenis::all(),
            'ruang' => Ruang::all()
        ];
        return response()->view('admin.inventaris.edit-inventaris', $data);

    }

    function update(UpdateInventarisRequest $request, $id)
    {
        $inventaris = Inventaris::where('id', $id)->first();

        if($nama = $request->nama){
            $inventaris->nama = $nama;
        }
        
        if($kondisi = $request->kondisi){
            $inventaris->kondisi = $kondisi;
        }

        if($keterangan = $request->keterangan){
            $inventaris->keterangan = $keterangan;
        }
        
        if($stok = $request->stok){
            $inventaris->stok = $stok;
        }
        
        if($jenis = $request->jenis){
            $inventaris->jenis = $jenis;
        }

        if($ruang = $request->ruang){
            $inventaris->ruang = $ruang;
        }

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/inventaris-barang');
            $image->move($destinationPath, $name);
            $inventaris->foto = $name;
        }

        $inventaris->update();

        return redirect()->route('inventaris.index')->with('alert', 'success')->with('message', 'Berhasil mengedit barang inventaris');

    }

    function destroy($id){
        $inventaris = Inventaris::find($id);
        $inventaris->delete();

        return redirect()->route('inventaris.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus barang inventaris');
    }
}
