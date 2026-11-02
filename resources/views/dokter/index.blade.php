@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')

<!-- Menambahkan container flex agar judul dan tombol sejajar (opsional, sesuaikan dengan CSS layoutmu) -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h1>Data Dokter</h1>
    <!-- Ini Tombol Tambah Dokter Baru -->
    <a href="{{ url('/dokter/create') }}" style="background-color: #28a745; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px;">+ Tambah Dokter Baru</a>
</div>

<table width="100%" border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Dokter</th>
            <th>Nama Dokter</th>
            <th>Poli</th> <!-- Kolom Relasi -->
            <th>Spesialisasi</th>
            <th>No. Telepon</th>
            <th>Status</th>
            <th>Aksi</th> <!-- Tambahan Judul Kolom Aksi -->
        </tr>
    </thead>
    <tbody>
        @forelse ($doctors as $doctor)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $doctor->doctor_code }}</td>
            <td>{{ $doctor->name }}</td>
            
            <!-- Menampilkan nama Poli dari tabel polis -->
            <td>{{ $doctor->poli?->name ?? '-' }}</td> 
            
            <td>{{ $doctor->specialization }}</td>
            <td>{{ $doctor->phone ?? '-' }}</td>
            <td>
                @if ($doctor->is_active)
                    <span style="background-color: #28a745; color: white; padding: 3px 8px; border-radius: 3px; font-size: 12px;">Aktif</span>
                @else
                    <span style="background-color: #dc3545; color: white; padding: 3px 8px; border-radius: 3px; font-size: 12px;">Tidak Aktif</span>
                @endif
            </td>
            <!-- Tambahan Tombol Aksi Edit/Hapus -->
            <td>
                <a href="{{ url('/dokter/' . $doctor->id . '/edit') }}" style="background-color: #ffc107; color: black; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-size: 12px;">Edit</a>
            </td>
        </tr>
        @empty
        <tr>
            <!-- colspan diubah jadi 8 mengikuti jumlah total kolom sekarang -->
            <td colspan="8" style="text-align: center; padding: 20px;">Belum ada data dokter di database.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection