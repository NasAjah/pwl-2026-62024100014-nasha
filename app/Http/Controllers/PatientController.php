<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        // Mengambil seluruh data pasien dari database melalui Eloquent ORM
        $patients = Patient::all();

        return view('pasien.index', compact('patients'));
    }
}