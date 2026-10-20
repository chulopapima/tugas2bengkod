<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin
        User::create([
            'nama' => 'Admin Poliklinik',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 2. Dokter
        User::create([
            'nama' => 'dr. Agus Santoso',
            'email' => 'dokter@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
            'alamat' => 'Jl. Pemuda No. 123',
            'no_hp' => '081234567890',
        ]);

        // 3. Pasien
        User::create([
            'nama' => 'Deni Kurniawan',
            'email' => 'pasien@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
            'alamat' => 'Jl. Imam Bonjol No. 45',
            'no_hp' => '089876543210',
            'no_rm' => 'RM-202610-001',
        ]);
    }
}