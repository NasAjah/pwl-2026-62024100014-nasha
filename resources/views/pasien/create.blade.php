@extends('layouts.app')

@section('title', 'Tambah Data Pasien')

@section('content')
<h1>Tambah Data Pasien Baru</h1>

<div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 600px; margin-top: 15px;">
    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">No. Rekam Medis</label>
            <input type="text" name="medical_record_number" value="{{ old('medical_record_number') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('medical_record_number')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama Pasien</label>
            <input type="text" name="name" value="{{ old('name') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Jenis Kelamin</label>
            <select name="gender" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki (L)</option>
                <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan (P)</option>
            </select>
            @error('gender')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Tanggal Lahir</label>
            <input type="date" name="birth_date" value="{{ old('birth_date') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('birth_date')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Alamat</label>
            <textarea name="address" rows="3" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">{{ old('address') }}</textarea>
            @error('address')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">No. Telepon</label>
            <input type="text" name="phone" value="{{ old('phone') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('phone')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Simpan Data</button>
            <a href="{{ route('pasien.index') }}" style="color: #6c757d; text-decoration: none; margin-left: 10px;">Batal</a>
        </div>
    </form>
</div>
@endsection