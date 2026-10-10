<?php

namespace Database\Seeders;

use App\Models\Poli;
use App\Models\Obat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Seed Poli
        Poli::updateOrCreate(
            ['nama_poli' => 'Poli Umum'],
            ['keterangan' => 'Pelayanan kesehatan umum']
        );
        Poli::updateOrCreate(
            ['nama_poli' => 'Poli Gigi'],
            ['keterangan' => 'Pelayanan kesehatan gigi dan mulut']
        );

        // 2. Seed Users
        $this->call([
            UserSeeder::class,
        ]);

        // 3. Seed Obat
        Obat::updateOrCreate(
            ['nama_obat' => 'Paracetamol 500mg'],
            ['kemasan' => 'Strip @ 10 Tablet', 'harga' => 10000]
        );
        Obat::updateOrCreate(
            ['nama_obat' => 'Amoxicillin 500mg'],
            ['kemasan' => 'Strip @ 10 Kaplet', 'harga' => 15000]
        );
    }
}