<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PegawaiRequest;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function store(PegawaiRequest $request)
    {
        $validatedData = $request->validated();

        $pegawai = Pegawai::create($validatedData);

        // Lanjutkan dengan respons atau operasi lainnya
    }

    public function update(PegawaiRequest $request, Pegawai $pegawai)
    {
        $validatedData = $request->validated();

        $pegawai->update($validatedData);

        // Lanjutkan dengan respons atau operasi lainnya
    }
}
