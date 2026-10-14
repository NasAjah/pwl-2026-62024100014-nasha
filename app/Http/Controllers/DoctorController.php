<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // Mengambil seluruh data dokter dari database melalui Eloquent ORM
        $doctors = Doctor::all();

        return view('dokter.index', compact('doctors'));
    }
}