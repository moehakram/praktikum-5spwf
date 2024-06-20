<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  
    public function index(Request $req)
    {
        return view('admin.dashboard');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials, $request->filled('remember_token'))) {
            $request->session()->regenerate();
            $message = 'Welcome ' . Auth::user()->name;
            return redirect()->route('home')->with('alert', 'success')->with('message', $message);
        } else {
            return back()->withInput()->withErrors([
                'error' => 'NIP atau password Anda salah!.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
