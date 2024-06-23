<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    function index(){
        $jenis = Jenis::all();
        return view('admin.inventaris.jenis', compact('jenis'));
    }

    function create(){
        //
    }

    function store(){
        //
    }

    function edit(){

    }

    function update(){

    }

    function delete(){

    }

    function destroy(){

    }
}
