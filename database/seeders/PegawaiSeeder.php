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
                'nip' => '1234567890',
                'nama' => 'Budi Santoso',
                'phone_number' => '081234567890',
                'alamat' => 'Jl. Merpati No. 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567891',
                'nama' => 'Ani Suryani',
                'phone_number' => '081234567891',
                'alamat' => 'Jl. Kenari No. 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567892',
                'nama' => 'Siti Aisyah',
                'phone_number' => '081234567892',
                'alamat' => 'Jl. Cendrawasih No. 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567893',
                'nama' => 'Agus Wijaya',
                'phone_number' => '081234567893',
                'alamat' => 'Jl. Kutilang No. 4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567894',
                'nama' => 'Rina Hartati',
                'phone_number' => '081234567894',
                'alamat' => 'Jl. Jalak No. 5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567895',
                'nama' => 'Andi Prasetyo',
                'phone_number' => '081234567895',
                'alamat' => 'Jl. Rajawali No. 6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567896',
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
