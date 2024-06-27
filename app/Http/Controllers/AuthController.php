<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  
    public function showLogin()
    {
        return view('auth.login');
    }

    function login(Request $request) {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
    
        $loginType = filter_var($credentials['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'nip';
        $credentials[$loginType] = $credentials['username'];
        unset($credentials['username']);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
    
        return back()->withErrors([
            'error' => 'Username atau password Anda salah!'
        ]);
    }

    function profile()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }


    function updateProfile(PegawaiUpdateRequest $request)
    {
        $data = $request->validated();

        $user = Auth::user();

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

        return redirect()->route('home')
        ->with('alert', 'success')->with('message', 'Berhasil update profile');
    }

    function password()
    {
        $nip = Auth::user()->nip;
        return view('auth.password', compact('nip'));
    }

    function updatePassword(Request $request)
    {
        $request->validate([
            'oldPassword' => 'required',
            'password1' => 'required|string|min:8|confirmed',
        ], [
            'password1.confirmed' => "Konfirmasi password baru tidak cocok.",
        ]);
    
        // Cek apakah password lama sesuai
        if (!Hash::check($request->oldPassword, Auth::user()->password)) {
            return back()->withErrors(['oldPassword' => 'Password yang diberikan tidak cocok dengan kata sandi saat ini Anda.']);
        }
    
        // Update password
        $user = Auth::user();
        $user->password = Hash::make($request->password1);
        $user->save();

        return redirect()->route('home')
        ->with('alert', 'success')->with('message', 'Berhasil update password');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
