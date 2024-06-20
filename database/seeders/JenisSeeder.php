<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_jenis' => 'Furniture',
                'keterangan' => 'Peralatan dan perlengkapan kantor seperti meja dan kursi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jenis' => 'Elektronik',
                'keterangan' => 'Perangkat elektronik seperti laptop, proyektor, dan printer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jenis' => 'Peralatan',
                'keterangan' => 'Alat tulis kantor dan barang-barang lainnya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jenis' => 'Perabot',
                'keterangan' => 'Perabotan kantor seperti lemari dan rak',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_jenis' => 'Kendaraan',
                'keterangan' => 'Kendaraan operasional seperti mobil dan sepeda motor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('jenis')->insert($data);
    }
}
