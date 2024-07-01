<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    function index(){
        $organisasi = Organisasi::all();
        return view('admin.organisasi.index', compact('organisasi'));
    }

    function create(){
        return response()->view('admin.organisasi.create');
    } 

    function store(Request $request){
        $request->validate([
            'nama' => ['required', 'max:20'],
            'deskripsi' => ['nullable', 'max:50']
        ]);

        Organisasi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('organisasi.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan organisasi');
    }

    function edit($id)
    {
        $organisasi = Organisasi::where('id', $id)->first();
        return view('admin.organisasi.edit', compact('organisasi'));
    }

    function update($id, Request $request)
    {
        $request->validate([
            'nama' => ['required', 'max:20'],
            'deskripsi' => ['nullable', 'max:50']
        ]);

        $organisasi = Organisasi::where('id', $id)->first();
        $organisasi->nama = $request->nama;

        if($deskripsi = $request->deskripsi){
            $organisasi->deskripsi = $deskripsi;
        }

        $organisasi->update();

        return redirect()->route('organisasi.index')->with('alert', 'success')->with('message', 'Berhasil mengedit organisasi');
       }

    function destroy($id){
        Organisasi::destroy($id);
        return redirect()->route('organisasi.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus organisasi');
    }
}
