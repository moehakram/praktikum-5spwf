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
                'inventaris_id' => 1,
                'nama_brg' => 'Proyektor',
                'nama_peminjam' => 'Budi Santoso',
                'tgl_pinjam' => '2024-06-01',
                'tgl_kembali' => '2024-06-05',
                'jum_kembali' => '1',
                'status' => 'Kembali',
                'keterangan' => 'Pengembalian tepat waktu',
                'pegawai' => 'Agus Wijaya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'inventaris_id' => 2,
                'nama_brg' => 'Laptop',
                'nama_peminjam' => 'Ani Suryani',
                'tgl_pinjam' => '2024-06-02',
                'tgl_kembali' => '2024-06-06',
                'jum_kembali' => '2',
                'status' => 'Kembali',
                'keterangan' => 'Tidak ada kerusakan',
                'pegawai' => 'Rina Hartati',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'inventaris_id' => 3,
                'nama_brg' => 'Kursi Kantor',
                'nama_peminjam' => 'Siti Aisyah',
                'tgl_pinjam' => '2024-06-03',
                'tgl_kembali' => '2024-06-07',
                'jum_kembali' => '5',
                'status' => 'Kembali',
                'keterangan' => 'Pengembalian dalam kondisi baik',
                'pegawai' => 'Andi Prasetyo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'inventaris_id' => 4,
                'nama_brg' => 'Meja Kantor',
                'nama_peminjam' => 'Agus Wijaya',
                'tgl_pinjam' => '2024-06-04',
                'tgl_kembali' => '2024-06-08',
                'jum_kembali' => '3',
                'status' => 'Kembali',
                'keterangan' => 'Pengembalian tepat waktu',
                'pegawai' => 'Dewi Lestari',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'inventaris_id' => 5,
                'nama_brg' => 'Printer',
                'nama_peminjam' => 'Rina Hartati',
                'tgl_pinjam' => '2024-06-05',
                'tgl_kembali' => '2024-06-09',
                'jum_kembali' => '1',
                'status' => 'Kembali',
                'keterangan' => 'Tidak ada kerusakan',
                'pegawai' => 'Budi Santoso',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('pengembalian')->insert($data);
    }
}
