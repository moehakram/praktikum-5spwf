<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'peminjaman_id' => 1,
                'tgl_kembali' => '2024-06-05',
                'jum_kembali' => '1',
                'keterangan' => 'Pengembalian tepat waktu',
                'pegawai_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'peminjaman_id' => 2,
                'tgl_kembali' => '2024-06-06',
                'jum_kembali' => '2',
                'keterangan' => 'Tidak ada kerusakan',
                'pegawai_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('pengembalian')->insert($data);
    }
}
