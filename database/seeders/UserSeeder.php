<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID Poli jika butuh relasi ke Poli
        $poliUmumId = \App\Models\Poli::where('nama_poli', 'Poli Umum')->value('id');

        // Admin
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'nama' => 'Admin Poliklinik',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'alamat' => 'Semarang',
                'no_hp' => '081234567890',
            ]
        );

        // Dokter
        User::updateOrCreate(
            ['email' => 'dokter.agus@gmail.com'],
            [
                'nama' => 'dr. Agus Santoso',
                'password' => Hash::make('password'),
                'role' => 'dokter',
                'id_poli' => $poliUmumId,
                'alamat' => 'Semarang',
                'no_hp' => '081298765432',
            ]
        );

        // Pasien
        User::updateOrCreate(
            ['email' => 'deni@gmail.com'],
            [
                'nama' => 'Deni Kurniawan',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'alamat' => 'Tegal',
                'no_ktp' => '3328000000000001',
                'no_hp' => '085700001111',
                'no_rm' => '202610-001',
            ]
        );
    }
}