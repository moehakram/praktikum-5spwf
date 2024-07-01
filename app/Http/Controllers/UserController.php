<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePegawaiRequest;
use App\Http\Requests\PegawaiUpdateRequest;
use App\Models\Organisasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    private $password_default = 'password';

    function index(){
        $currentUserId = Auth::id();
        $users = User::where('id', '!=', $currentUserId)->get();
        return view('admin.pegawai.index', compact('users'));
    }

    function create(){
        return view('admin.pegawai.create', [
            'organisasi' => Organisasi::all(['id', 'nama']),
            'password' => $this->password_default
        ]);
    }

    function store(CreatePegawaiRequest $data){

        User::create([
            'nra' => $data['nra'],
            'nama' => $data['nama'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'alamat' => $data['alamat'],
            'organisasi_id' => $data['organisasi'],
            'password' => Hash::make($this->password_default)
        ]);

        return redirect()->route('pegawai.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan pegawai');
    }

    function edit($nra){
        $user = User::where('nra', $nra)->first();
        $organisasi = Organisasi::all(['id', 'nama']);
        return view('admin.pegawai.edit', [
            'user' => $user,
            'organisasi' => $organisasi
        ]);
    }

    function update(PegawaiUpdateRequest $data, $nra)
    {

        $user = User::where('nra', $nra)->first();

        if($data['nama']){
            $user->nama = $data['nama'];
        }

        if($data['email']){
            $user->email = $data['email'];
        }

        if($data['phone_number']){
            $user->phone_number = $data['phone_number'];
        }

        if($data['alamat']){
            $user->alamat = $data['alamat'];
        }

        if($data['organisasi']){
            $user->organisasi_id = $data['organisasi'];
        }

        $user->update();

        return redirect()->route('pegawai.index')
        ->with('alert', 'success')->with('message', 'Berhasil update pegawai');
    }

    function destroy($id){
        $user = User::destroy($id);
        return redirect()->route('pegawai.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus pegawai');
    }
}
