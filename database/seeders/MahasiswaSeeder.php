<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
                [
                    'nim' => '213049',
                    'nama' => 'akram',
                    'alamat' => 'pk7',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nim' => '241117',
                    'nama' => 'akram',
                    'alamat' => 'pk7',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nim' => '213050',
                    'nama' => 'pahri',
                    'alamat' => 'pk7',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nim' => '241124',
                    'nama' => 'sulaiman',
                    'alamat' => 'maros',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nim' => '241120',
                    'nama' => 'Alfian',
                    'alamat' => 'maros',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                

            ]);
    }
}
