<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiUpdateRequest;
use App\Http\Requests\RequestPegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    private $password_default = 'password123';

    function index(){
        $users = User::all();
        return view('admin.pegawai.index', compact('users'));
    }

    function create(){
        return view('admin.pegawai.create', [
            'password' => $this->password_default
        ]);
    }

    function store(RequestPegawai $request){
        $data = $request->validated();

        $user = new User([
            'nip' => $data['nip'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'alamat' => $data['alamat'],
            'password' => Hash::make($this->password_default)
        ]);

        $user->save();

        return redirect()->route('pegawai.index')->with('alert', 'success')->with('message', 'Berhasil menambahkan pegawai');
    }

    function edit($nip){
        $data['user'] = User::where('nip', $nip)->first();
        // dd($data['user']);
        return view('admin.pegawai.edit', $data);
    }

    function update(PegawaiUpdateRequest $request, $nip)
    {
        $data = $request->validated();

        $user = User::where('nip', $nip)->first();

        if($data['name']){
            $user->name = $data['name'];
        }

        if(!empty($data['email']) && !User::where('email', $data['email'])->exists()){
            $user->email = $data['email'];
        }

        if($data['phone_number']){
            $user->phone_number = $data['phone_number'];
        }

        if($data['alamat']){
            $user->alamat = $data['alamat'];
        }

        $user->update();

        return redirect()->route('pegawai.index')
        ->with('alert', 'success')->with('message', 'Berhasil update pegawai');
    }

    function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('pegawai.index')
        ->with('alert', 'success')->with('message', 'Berhasil hapus pegawai');
    }
}
