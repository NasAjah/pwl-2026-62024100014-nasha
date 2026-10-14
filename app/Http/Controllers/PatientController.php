<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = [
            ['id' => 1, 'nama' => 'Ahmad', 'alamat' => 'Kudus'],
            ['id' => 2, 'nama' => 'Siti', 'alamat' => 'Jepara'],
            ['id' => 3, 'nama' => 'Rina', 'alamat' => 'Pati'],
        ];

        return view('pasien.index', compact('patients'));
    }
}