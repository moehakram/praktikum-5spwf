<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
                'password' => Hash::make('password123'),
                'nama' => 'Budi Santoso',
                'phone_number' => '081234567890',
                'alamat' => 'Jl. Merpati No. 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567891',
                'password' => Hash::make('password456'),
                'nama' => 'Ani Suryani',
                'phone_number' => '081234567891',
                'alamat' => 'Jl. Kenari No. 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567892',
                'password' => Hash::make('password789'),
                'nama' => 'Siti Aisyah',
                'phone_number' => '081234567892',
                'alamat' => 'Jl. Cendrawasih No. 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567893',
                'password' => Hash::make('passwordabc'),
                'nama' => 'Agus Wijaya',
                'phone_number' => '081234567893',
                'alamat' => 'Jl. Kutilang No. 4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567894',
                'password' => Hash::make('passworddef'),
                'nama' => 'Rina Hartati',
                'phone_number' => '081234567894',
                'alamat' => 'Jl. Jalak No. 5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567895',
                'password' => Hash::make('passwordghi'),
                'nama' => 'Andi Prasetyo',
                'phone_number' => '081234567895',
                'alamat' => 'Jl. Rajawali No. 6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nip' => '1234567896',
                'password' => Hash::make('passwordjkl'),
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
