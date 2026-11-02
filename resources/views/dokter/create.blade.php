@extends('layouts.app')

@section('title', 'Tambah Data Dokter')

@section('content')
<div style="margin-bottom: 20px;">
    <h2>Tambah Data Dokter</h2>
</div>

<!-- Tambahkan style bawaan ini jika projectmu tidak pakai Bootstrap -->
<style>
    .form-group { margin-bottom: 15px; }
    .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
    .form-control { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
    .btn { padding: 10px 15px; color: white; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
    .btn-primary { background-color: #007bff; }
    .btn-secondary { background-color: #6c757d; margin-left: 10px; }
</style>

<form action="{{ url('/dokter') }}" method="POST" style="max-width: 600px; background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
    @csrf
    
    <div class="form-group">
        <label>Kode Dokter</label>
        <input type="text" name="doctor_code" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nama Dokter</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Pilih Poli</label>
        <select name="poli_id" class="form-control" required>
            <option value="">-- Pilih Poli --</option>
            @foreach ($polis as $poli)
                <option value="{{ $poli->id }}" @selected(old('poli_id') == $poli->id)>
                    {{ $poli->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Spesialisasi</label>
        <input type="text" name="specialization" class="form-control" required>
    </div>

    <div class="form-group">
        <label>No. Telepon</label>
        <input type="text" name="phone" class="form-control">
    </div>

    <div style="margin-top: 20px;">
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <a href="{{ url('/dokter') }}" class="btn btn-secondary">Batal</a>
    </div>
</form>
@endsection