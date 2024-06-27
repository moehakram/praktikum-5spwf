<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'inventaris_id' => 1,
                'nama_peminjam' => 'Budi Santoso',
                'tgl_pinjam' => '2024-06-01',
                'jum_pinjam' => '1',
                'status' => 1,
                'keterangan' => 'Untuk presentasi',
                'pegawai_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'inventaris_id' => 2,
                'nama_peminjam' => 'Ani Suryani',
                'tgl_pinjam' => '2024-06-02',
                'jum_pinjam' => '2',
                'status' => 1,
                'keterangan' => 'Untuk pelatihan',
                'pegawai_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'inventaris_id' => 3,
                'nama_peminjam' => 'Siti Aisyah',
                'tgl_pinjam' => '2024-06-03',
                'jum_pinjam' => '5',
                'status' => 0,
                'keterangan' => 'Untuk acara rapat',
                'pegawai_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('peminjaman')->insert($data);
    }
}
