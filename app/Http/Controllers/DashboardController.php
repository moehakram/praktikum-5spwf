<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if($request->user() === null){
            return redirect()->route('login');
        }else{
            return view('admin.dashboard');
        }
    }
}
