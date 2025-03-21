<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Masukkan data pengguna awal
        DB::table('users')->insert([
            'name' => 'Admin Zakat',
            'email' => 'admin@zakat.com',
            'password' => Hash::make('password'), // Ganti dengan password yang Anda inginkan
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
