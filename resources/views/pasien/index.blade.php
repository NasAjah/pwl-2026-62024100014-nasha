@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
    <h1>Data Pasien</h1>
    <a href="{{ route('pasien.create') }}" style="background-color: #28a745; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold;">+ Tambah Pasien Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>No. RM</th>
            <th>Nama</th>
            <th>L/P</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($patients as $patient)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $patient->medical_record_number }}</td>
            <td>{{ $patient->name }}</td>
            <td>{{ $patient->gender }}</td>
            <td>{{ $patient->birth_date }}</td>
            <td>{{ $patient->address ?? '-' }}</td>
            <td>{{ $patient->phone ?? '-' }}</td>
            <td>
                <a href="{{ route('pasien.edit', $patient->id) }}" style="background-color: #ffc107; color: #212529; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-size: 13px; margin-right: 5px;">Edit</a>
                
                <form action="{{ route('pasien.destroy', $patient->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data pasien ini?')" style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 3px; font-size: 13px; cursor: pointer;">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" style="text-align: center;">Belum ada data pasien.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection