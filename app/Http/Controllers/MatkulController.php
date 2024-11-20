<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    function show(){
        $matkuls = Matkul::all();
        return view('matkul', compact('matkuls'));
    }

}
