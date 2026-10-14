<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    public function run(): void
    {
        $polis = [
            ['code' => 'POLI001', 'name' => 'Poli Umum', 'description' => 'Layanan pemeriksaan kesehatan umum.', 'is_active' => true],
            ['code' => 'POLI002', 'name' => 'Poli Anak', 'description' => 'Layanan kesehatan khusus bayi dan anak.', 'is_active' => true],
            ['code' => 'POLI003', 'name' => 'Poli Gigi', 'description' => 'Layanan perawatan gigi dan mulut.', 'is_active' => true],
            ['code' => 'POLI004', 'name' => 'Poli Mata', 'description' => 'Layanan pemeriksaan fungsi mata.', 'is_active' => true],
            ['code' => 'POLI005', 'name' => 'Poli Kandungan', 'description' => 'Layanan kesehatan ibu hamil dan melahirkan.', 'is_active' => false],
        ];

        foreach ($polis as $poli) {
            Poli::create($poli);
        }
    }
}