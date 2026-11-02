@extends('layouts.app')

@section('title', 'Detail Poli')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h2>Detail Poliklinik: {{ $poli->name }}</h2>
    <a href="{{ route('poli.index') }}" style="background-color: #6c757d; color: white; padding: 8px 15px; text-decoration: none; border-radius: 4px;">Kembali</a>
</div>

<div style="background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 20px;">
    <p><strong>Kode Poli:</strong> {{ $poli->code }}</p>
    <p><strong>Deskripsi:</strong> {{ $poli->description ?? '-' }}</p>
    <p><strong>Status:</strong> 
        @if ($poli->is_active)
            <span style="background-color: #28a745; color: white; padding: 3px 8px; border-radius: 3px; font-size: 12px;">Aktif</span>
        @else
            <span style="background-color: #dc3545; color: white; padding: 3px 8px; border-radius: 3px; font-size: 12px;">Tidak Aktif</span>
        @endif
    </p>
</div>

<h3>Daftar Dokter di Poli Ini</h3>
<table width="100%" border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <thead>
        <tr style="background-color: #f8f9fa;">
            <th>No.</th>
            <th>Kode Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialisasi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($poli->doctors as $doctor)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $doctor->doctor_code }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->specialization }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align: center; padding: 20px;">Belum ada dokter di poli ini.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection