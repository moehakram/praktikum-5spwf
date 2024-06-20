<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_ruang' => 'Ruang Rapat',
                'keterangan' => 'Digunakan untuk rapat dan pertemuan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_ruang' => 'Ruang Kerja',
                'keterangan' => 'Tempat kerja karyawan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_ruang' => 'Ruang Presentasi',
                'keterangan' => 'Ruang untuk presentasi dan pelatihan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_ruang' => 'Ruang IT',
                'keterangan' => 'Ruang untuk tim IT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_ruang' => 'Ruang Admin',
                'keterangan' => 'Ruang administrasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('ruang')->insert($data);
    }
}
