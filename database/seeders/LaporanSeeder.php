<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Meja Kantor',
                'kondisi' => 'Baik',
                'stok' => '10',
                'jenis' => 'Furniture',
                'tgl_register' => Carbon::now()->subDays(10),
                'ruang' => 'Ruang Rapat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Kursi Kantor',
                'kondisi' => 'Baik',
                'stok' => '20',
                'jenis' => 'Furniture',
                'tgl_register' => Carbon::now()->subDays(15),
                'ruang' => 'Ruang Kerja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Proyektor',
                'kondisi' => 'Rusak',
                'stok' => '5',
                'jenis' => 'Elektronik',
                'tgl_register' => Carbon::now()->subDays(20),
                'ruang' => 'Ruang Presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Laptop',
                'kondisi' => 'Baik',
                'stok' => '15',
                'jenis' => 'Elektronik',
                'tgl_register' => Carbon::now()->subDays(5),
                'ruang' => 'Ruang IT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Printer',
                'kondisi' => 'Baik',
                'stok' => '7',
                'jenis' => 'Elektronik',
                'tgl_register' => Carbon::now()->subDays(7),
                'ruang' => 'Ruang Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('laporan')->insert($data);
    }
}
