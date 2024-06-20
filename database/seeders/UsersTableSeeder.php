<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'nip' => '12345',
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '081234567890',
            'alamat' => 'Jl. Mawar No. 1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('admin');
        User::create([
            'nip' => '12355',
            'name' => 'John Doe',
            'email' => 'johnjjj.doe@example.com',
            'phone_number' => '081234567890',
            'alamat' => 'Jl. Mawar No. 1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('pegawai');

    }
}
