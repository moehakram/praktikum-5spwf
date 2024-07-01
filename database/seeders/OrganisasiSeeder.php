<?php

namespace Database\Seeders;

use App\Models\Organisasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'nama' => 'osis',
            'deskripsi' => 'organisasi intra sekolah',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'nama' => 'pramuka',
            'deskripsi' => 'organisasi intra sekolah',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'nama' => 'rohis',
            'deskripsi' => 'organisasi intra sekolah',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'nama' => 'paskib',
            'deskripsi' => 'organisasi intra sekolah',
            'created_at' => now(),
            'updated_at' => now()
            ]
        ];

        DB::table('organisasi')->insert($data);
    }
}
