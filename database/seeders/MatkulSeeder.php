<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matkuls')->insert([
            [
                'kode' => 'E5022-S',
                'nama' => 'KEWIRAUSAHAAN',
                'kelas' => '3SKWU-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'I7052-S',
                'nama' => 'AUDIT SISTEM INFORMASI',
                'kelas' => '3SKSI-A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'K3243-S',
                'nama' => 'DATA SAINS',
                'kelas' => '3SDSN-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'K5223-S',
                'nama' => 'PEMROGRAMAN WEB BERBASIS FRAMEWORK',
                'kelas' => '5SPWF-E',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'K3222-S',
                'nama' => 'SISTEM PENUNJANG KEPUTUSAN',
                'kelas' => '3SSPK-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'K5272',
                'nama' => 'DATA MINING',
                'kelas' => '5SDTM-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'I4322-S',
                'nama' => 'KEAMANAN SISTEM INFORMASI',
                'kelas' => '3SKSI-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'K5232-S',
                'nama' => 'CLOUD COMPUTING',
                'kelas' => '5SCCP-B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'P1222-S',
                'nama' => 'PENGANTAR PROSES BISNIS',
                'kelas' => '1SPPB-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'E6142-S',
                'nama' => 'CHANGE MANAGEMENT',
                'kelas' => '7SCMG-C',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
