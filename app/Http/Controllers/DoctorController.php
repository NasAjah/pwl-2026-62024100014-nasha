<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Poli;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // Mengambil data dokter beserta relasi poli (Eager Loading)
        $doctors = Doctor::with('poli')->get();

        return view('dokter.index', compact('doctors'));
    }

    public function create()
    {
        // Mengambil semua data poli yang aktif untuk ditampilkan di dropdown form
        $polis = Poli::where('is_active', true)
                     ->orderBy('name')
                     ->get();
                     
        return view('dokter.create', compact('polis'));
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form, poli_id wajib ada di tabel polis
        $validated = $request->validate([
            'doctor_code' => 'required|string|max:50|unique:doctors,doctor_code',
            'name' => 'required|string|max:255',
            'poli_id' => 'required|exists:polis,id', 
            'specialization' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Simpan ke database
        Doctor::create($validated);

        // Kembali ke halaman index
        return redirect('/dokter')->with('success', 'Data Dokter berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Mencari data dokter berdasarkan ID
        $doctor = Doctor::findOrFail($id);
        // Mengambil daftar poli untuk ditampilkan di dropdown form edit
        $polis = Poli::where('is_active', true)->orderBy('name')->get();
        
        return view('dokter.edit', compact('doctor', 'polis'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data, memastikan kode dokter unik kecuali untuk dokter ini sendiri
        $validated = $request->validate([
            'doctor_code' => 'required|string|max:50|unique:doctors,doctor_code,'.$id,
            'name' => 'required|string|max:255',
            'poli_id' => 'required|exists:polis,id', 
            'specialization' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Cari data dokter dan update ke database
        $doctor = Doctor::findOrFail($id);
        $doctor->update($validated);

        return redirect('/dokter')->with('success', 'Data Dokter berhasil diperbarui!');
    }
}