<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PatientController extends Controller
{
    // READ: Menampilkan Daftar Pasien
    public function index()
    {
        $patients = Patient::latest()->get();
        return view('pasien.index', compact('patients'));
    }

    // CREATE: Form Tambah Pasien
    public function create()
    {
        return view('pasien.create');
    }

    // STORE: Menyimpan Pasien Baru dengan Validasi
    public function store(Request $request)
    {
        $validated = $request->validate([
            'medical_record_number' => 'required|unique:patients,medical_record_number',
            'name'                  => 'required|string|max:255',
            'gender'                => 'required|in:L,P',
            'birth_date'            => 'required|date',
            'address'               => 'nullable|string',
            'phone'                 => 'nullable|string|max:20',
        ]);

        Patient::create($validated);

        return redirect()
            ->route('pasien.index')
            ->with('success', 'Data pasien berhasil ditambahkan.');
    }

    // EDIT: Form Edit Pasien (Route Model Binding)
    public function edit(Patient $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    // UPDATE: Memperbarui Data Pasien
    public function update(Request $request, Patient $pasien)
    {
        $validated = $request->validate([
            'medical_record_number' => [
                'required',
                Rule::unique('patients', 'medical_record_number')->ignore($pasien->id),
            ],
            'name'       => 'required|string|max:255',
            'gender'     => 'required|in:L,P',
            'birth_date' => 'required|date',
            'address'    => 'nullable|string',
            'phone'      => 'nullable|string|max:20',
        ]);

        $pasien->update($validated);

        return redirect()
            ->route('pasien.index')
            ->with('success', 'Data pasien berhasil diperbarui.');
    }

    // DELETE: Menghapus Data Pasien
    public function destroy(Patient $pasien)
    {
        $pasien->delete();

        return redirect()
            ->route('pasien.index')
            ->with('success', 'Data pasien berhasil dihapus.');
    }
}