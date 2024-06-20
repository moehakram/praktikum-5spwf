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
                'jenis' => 'Furniture',
                'tgl_register' => Carbon::now(),
                'ruang' => 'Ruang Rapat',
                'foto' => 'meja_kantor.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Kursi Kantor',
                'kondisi' => 'Baik',
                'keterangan' => 'Kursi putar dengan roda',
                'stok' => '20',
                'jenis' => 'Furniture',
                'tgl_register' => Carbon::now(),
                'ruang' => 'Ruang Kerja',
                'foto' => 'kursi_kantor.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Proyektor',
                'kondisi' => 'Rusak',
                'keterangan' => 'Lampu proyektor mati',
                'stok' => '5',
                'jenis' => 'Elektronik',
                'tgl_register' => Carbon::now(),
                'ruang' => 'Ruang Presentasi',
                'foto' => 'proyektor.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Laptop',
                'kondisi' => 'Baik',
                'keterangan' => 'Laptop Dell Inspiron',
                'stok' => '15',
                'jenis' => 'Elektronik',
                'tgl_register' => Carbon::now(),
                'ruang' => 'Ruang IT',
                'foto' => 'laptop.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Printer',
                'kondisi' => 'Baik',
                'keterangan' => 'Printer Canon',
                'stok' => '7',
                'jenis' => 'Elektronik',
                'tgl_register' => Carbon::now(),
                'ruang' => 'Ruang Admin',
                'foto' => 'printer.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'AC',
                'kondisi' => 'Rusak',
                'keterangan' => 'AC tidak dingin',
                'stok' => '3',
                'jenis' => 'Elektronik',
                'tgl_register' => Carbon::now(),
                'ruang' => 'Ruang Server',
                'foto' => 'ac.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Whiteboard',
                'kondisi' => 'Baik',
                'keterangan' => 'Whiteboard magnetic',
                'stok' => '8',
                'jenis' => 'Peralatan',
                'tgl_register' => Carbon::now(),
                'ruang' => 'Ruang Meeting',
                'foto' => 'whiteboard.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('inventaris')->insert($data);
    }
}
