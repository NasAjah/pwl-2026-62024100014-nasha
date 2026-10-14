@extends('layouts.app')

@section('title', 'Edit Data Pasien')

@section('content')
<h1>Edit Data Pasien</h1>

<div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 600px; margin-top: 15px;">
    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">No. Rekam Medis</label>
            <input type="text" name="medical_record_number" value="{{ old('medical_record_number', $pasien->medical_record_number) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('medical_record_number')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama Pasien</label>
            <input type="text" name="name" value="{{ old('name', $pasien->name) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Jenis Kelamin</label>
            <select name="gender" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="L" {{ old('gender', $pasien->gender) == 'L' ? 'selected' : '' }}>Laki-laki (L)</option>
                <option value="P" {{ old('gender', $pasien->gender) == 'P' ? 'selected' : '' }}>Perempuan (P)</option>
            </select>
            @error('gender')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Tanggal Lahir</label>
            <input type="date" name="birth_date" value="{{ old('birth_date', $pasien->birth_date) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('birth_date')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Alamat</label>
            <textarea name="address" rows="3" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">{{ old('address', $pasien->address) }}</textarea>
            @error('address')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">No. Telepon</label>
            <input type="text" name="phone" value="{{ old('phone', $pasien->phone) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('phone')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <button type="submit" style="background-color: #ffc107; color: #212529; padding: 10px 15px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Perbarui Data</button>
            <a href="{{ route('pasien.index') }}" style="color: #6c757d; text-decoration: none; margin-left: 10px;">Batal</a>
        </div>
    </form>
</div>
@endsection