<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PoliController extends Controller
{
    public function index()
    {
        $polis = Poli::latest()->get();
        return view('poli.index', compact('polis'));
    }

    public function create()
    {
        return view('poli.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code'        => 'required|unique:polis,code',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active'   => 'required|boolean',
        ]);

        Poli::create($validated);

        return redirect()
            ->route('poli.index')
            ->with('success', 'Data Poliklinik berhasil ditambahkan.');
    }

    public function edit(Poli $poli)
    {
        return view('poli.edit', compact('poli'));
    }

    public function update(Request $request, Poli $poli)
    {
        $validated = $request->validate([
            'code' => [
                'required',
                Rule::unique('polis', 'code')->ignore($poli->id),
            ],
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active'   => 'required|boolean',
        ]);

        $poli->update($validated);

        return redirect()
            ->route('poli.index')
            ->with('success', 'Data Poliklinik berhasil diperbarui.');
    }

    public function destroy(Poli $poli)
    {
        $poli->delete();

        return redirect()
            ->route('poli.index')
            ->with('success', 'Data Poliklinik berhasil dihapus.');
    }
}