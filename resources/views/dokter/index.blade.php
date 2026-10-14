@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')
<h1>Data Dokter</h1>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialisasi</th>
            <th>No. Telepon</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($doctors as $doctor)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $doctor->doctor_code }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->specialization }}</td>
            <td>{{ $doctor->phone ?? '-' }}</td>
            <td>
                @if ($doctor->is_active)
                    <span class="badge badge-success">Aktif</span>
                @else
                    <span class="badge badge-danger">Tidak Aktif</span>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="text-align: center;">Belum ada data dokter di database.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection