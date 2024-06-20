<?php

namespace Database\Seeders;

use App\Models\Inventaris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventaris::create([
            'nama' => 'ilyas',
            'kondisi' => 'baru',
            'keterangan' => '-',
            'stok' => '10',
            'jenis' => 'elektronik',
            'tgl_register' => '10-05-2024',
            'ruang' => 'A101',
            'foto' => 'my-foto'
        ]);
    }
}
