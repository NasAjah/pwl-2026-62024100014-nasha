<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        Patient::create([
            'medical_record_number' => 'RM0001',
            'name' => 'Ahmad',
            'gender' => 'L',
            'birth_date' => '2000-05-10',
            'address' => 'Kudus',
            'phone' => '081234567890',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0002',
            'name' => 'Siti',
            'gender' => 'P',
            'birth_date' => '2001-08-15',
            'address' => 'Jepara',
            'phone' => '081234567891',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0003',
            'name' => 'Rina',
            'gender' => 'P',
            'birth_date' => '1998-12-01',
            'address' => 'Pati',
            'phone' => '081234567892',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0004',
            'name' => 'Budi Prasetyo',
            'gender' => 'L',
            'birth_date' => '1995-03-22',
            'address' => 'Semarang',
            'phone' => '081234567893',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0005',
            'name' => 'Dewi Lestari',
            'gender' => 'P',
            'birth_date' => '2002-11-10',
            'address' => 'Kudus',
            'phone' => '081234567894',
        ]);
    }
}