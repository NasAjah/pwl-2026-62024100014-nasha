<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // Data dummy 5 dokter sesuai spesifikasi Mini Challenge
        $doctors = [
            ['id' => 1, 'nama' => 'dr. Budi Santoso, Sp.PD', 'spesialisasi' => 'Penyakit Dalam', 'status' => 'Aktif'],
            ['id' => 2, 'nama' => 'dr. Ani Wijaya, Sp.A', 'spesialisasi' => 'Anak', 'status' => 'Aktif'],
            ['id' => 3, 'nama' => 'dr. Citra Lestari, Sp.OG', 'spesialisasi' => 'Kandungan', 'status' => 'Cuti'],
            ['id' => 4, 'nama' => 'dr. Dedi Pratama, Sp.B', 'spesialisasi' => 'Bedah', 'status' => 'Aktif'],
            ['id' => 5, 'nama' => 'dr. Eka Rahmawati, Sp.M', 'spesialisasi' => 'Mata', 'status' => 'Non-Aktif'],
        ];

        return view('dokter.index', compact('doctors'));
    }
}