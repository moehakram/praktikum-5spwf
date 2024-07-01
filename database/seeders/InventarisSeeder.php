<?php

namespace Database\Seeders;

use App\Models\Inventaris;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarisSeeder extends Seeder
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
                'keterangan' => 'Meja kayu jati',
                'stok' => '10',
                'organisasi_id' => 1,
                'foto' => 'meja_kantor.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Kursi Kantor',
                'kondisi' => 'Baik',
                'keterangan' => 'Kursi putar dengan roda',
                'stok' => '20',
                'organisasi_id' => 1,
                'foto' => 'kursi_kantor.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Proyektor',
                'kondisi' => 'Rusak',
                'keterangan' => 'Lampu proyektor mati',
                'stok' => '5',
                'organisasi_id' => 2,
                'foto' => 'proyektor.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Laptop',
                'kondisi' => 'Baik',
                'keterangan' => 'Laptop Dell Inspiron',
                'stok' => '15',
                'organisasi_id' => 2,
                'foto' => 'laptop.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Printer',
                'kondisi' => 'Baik',
                'keterangan' => 'Printer Canon',
                'stok' => '7',
                'organisasi_id' => 1,
                'foto' => 'printer.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'AC',
                'kondisi' => 'Rusak',
                'keterangan' => 'AC tidak dingin',
                'stok' => '3',
                'organisasi_id' => 3,
                'foto' => 'ac.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Whiteboard',
                'kondisi' => 'Baik',
                'keterangan' => 'Whiteboard magnetic',
                'stok' => '8',
                'organisasi_id' => 2,
                'foto' => 'whiteboard.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('inventaris')->insert($data);
    }
}
