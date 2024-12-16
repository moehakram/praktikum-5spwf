<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
  
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request) {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $loginType = filter_var($data['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'nra';

        $credentials = [
            $loginType => $data['username'],
            'password' => $data['password']
        ];
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
    
        return back()->withErrors([
            'error' => 'Username atau password Anda salah!'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

}
