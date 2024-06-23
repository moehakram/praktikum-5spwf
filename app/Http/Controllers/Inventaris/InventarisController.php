<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    function index(){
        $inventaris = Inventaris::all();
        return view('admin.inventaris.inventaris', compact('inventaris'));
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
