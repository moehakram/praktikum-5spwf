<?php

namespace App\Http\Controllers;

use App\Models\PenjualanTiket;
use Illuminate\Http\Request;

class PenTiketController extends Controller
{
    public function tablePenjualan(){
        $datas = PenjualanTiket::all();
        return view('penjualan-tiket', compact('datas'));
    }
}
