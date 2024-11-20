<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanTiketSeeder extends Seeder
{
    public function run()
    {
        DB::table('penjualan_tiket')->insert([
            [
                'kode_tiket' => 'TIK',
                'jenis_tiket' => 'VIP',
                'rute' => 'Makassar - Jakarta',
                'jumlah' => '2',
                'harga' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_tiket' => 'TIK2',
                'jenis_tiket' => 'Ekonomi',
                'rute' => 'Kendari - Makassar',
                'jumlah' => '1',
                'harga' => '150000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_tiket' => 'TIK3',
                'jenis_tiket' => 'Pulkam',
                'rute' => 'Makassar - Bone',
                'jumlah' => '3',
                'harga' => '300000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
