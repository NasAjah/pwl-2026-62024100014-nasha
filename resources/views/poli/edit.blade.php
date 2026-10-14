@extends('layouts.app')

@section('title', 'Edit Poliklinik')

@section('content')
<h1>Edit Data Poliklinik</h1>

<div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 600px; margin-top: 15px;">
    <form action="{{ route('poli.update', $poli->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Kode Poli</label>
            <input type="text" name="code" value="{{ old('code', $poli->code) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('code')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama Poliklinik</label>
            <input type="text" name="name" value="{{ old('name', $poli->name) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Deskripsi</label>
            <textarea name="description" rows="3" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">{{ old('description', $poli->description) }}</textarea>
            @error('description')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Status</label>
            <select name="is_active" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="1" {{ old('is_active', $poli->is_active) == 1 ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ old('is_active', $poli->is_active) == 0 ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
            @error('is_active')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <button type="submit" style="background-color: #ffc107; color: #212529; padding: 10px 15px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Perbarui Data</button>
            <a href="{{ route('poli.index') }}" style="color: #6c757d; text-decoration: none; margin-left: 10px;">Batal</a>
        </div>
    </form>
</div>
@endsection