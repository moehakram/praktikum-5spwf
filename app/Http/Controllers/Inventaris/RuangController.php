<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    function index(){
        $ruang = Ruang::all();
        return view('admin.inventaris.ruang', compact('ruang'));
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
