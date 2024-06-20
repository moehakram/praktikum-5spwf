<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:pegawaiAccess');
    }

    function tes(){
        return 'hello';
    }

    function index(){
        return view('admin.pegawai.index');
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
