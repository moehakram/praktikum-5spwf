<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Budi Santoso',
                'phone_number' => '081234567890',
                'alamat' => 'Jl. Merpati No. 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Ani Suryani',
                'phone_number' => '081234567891',
                'alamat' => 'Jl. Kenari No. 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Siti Aisyah',
                'phone_number' => '081234567892',
                'alamat' => 'Jl. Cendrawasih No. 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Agus Wijaya',
                'phone_number' => '081234567893',
                'alamat' => 'Jl. Kutilang No. 4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Rina Hartati',
                'phone_number' => '081234567894',
                'alamat' => 'Jl. Jalak No. 5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Andi Prasetyo',
                'phone_number' => '081234567895',
                'alamat' => 'Jl. Rajawali No. 6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Dewi Lestari',
                'phone_number' => '081234567896',
                'alamat' => 'Jl. Elang No. 7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('pegawai')->insert($data);
    }
}
