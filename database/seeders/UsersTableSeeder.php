<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        User::create([
            'nra' => '0000',
            'nama' => 'admin',
            'email' => 'admin@mail.com',
            'phone_number' => '081234567890',
            'alamat' => 'Jl. Perintis 7',
            'organisasi_id' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('admin');
        User::create([
            'nra' => '0001',
            'nama' => 'akram',
            'email' => 'akram@mail.com',
            'phone_number' => '081234567890',
            'alamat' => 'Jl. Perintis 7',
            'organisasi_id' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('pegawai');      
    }
}
