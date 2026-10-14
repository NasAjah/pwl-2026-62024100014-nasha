<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        $doctors = [
            [
                'doctor_code' => 'DOC001',
                'name' => 'dr. Budi Santoso, Sp.PD',
                'specialization' => 'Penyakit Dalam',
                'phone' => '08111111111',
                'is_active' => true,
            ],
            [
                'doctor_code' => 'DOC002',
                'name' => 'dr. Ani Wijaya, Sp.A',
                'specialization' => 'Anak',
                'phone' => '08122222222',
                'is_active' => true,
            ],
            [
                'doctor_code' => 'DOC003',
                'name' => 'dr. Citra Lestari, Sp.OG',
                'specialization' => 'Kandungan',
                'phone' => '08133333333',
                'is_active' => false,
            ],
            [
                'doctor_code' => 'DOC004',
                'name' => 'dr. Dedi Pratama, Sp.B',
                'specialization' => 'Bedah',
                'phone' => '08144444444',
                'is_active' => true,
            ],
            [
                'doctor_code' => 'DOC005',
                'name' => 'dr. Eka Rahmawati, Sp.M',
                'specialization' => 'Mata',
                'phone' => '08155555555',
                'is_active' => false,
            ],
            [
                'doctor_code' => 'DOC006',
                'name' => 'dr. Farhan Hidayat, Sp.THT',
                'specialization' => 'THT',
                'phone' => '08166666666',
                'is_active' => true,
            ],
            [
                'doctor_code' => 'DOC007',
                'name' => 'dr. Gita Gutawa, Sp.KJS',
                'specialization' => 'Jiwa',
                'phone' => '08177777777',
                'is_active' => true,
            ],
            [
                'doctor_code' => 'DOC008',
                'name' => 'dr. Hendra Setiawan, Sp.KK',
                'specialization' => 'Kulit & Kelamin',
                'phone' => '08188888888',
                'is_active' => true,
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}