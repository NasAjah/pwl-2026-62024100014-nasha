@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')
<h1>Data Dokter</h1>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Dokter</th>
            <th>Spesialisasi</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($doctors as $doctor)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $doctor['nama'] }}</td>
            <td>{{ $doctor['spesialisasi'] }}</td>
            <td>
                @if ($doctor['status'] === 'Aktif')
                    <span class="badge badge-success">Aktif</span>
                @elseif ($doctor['status'] === 'Cuti')
                    <span class="badge badge-warning">Cuti</span>
                @else
                    <span class="badge badge-danger">Non-Aktif</span>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align: center;">Belum ada data dokter.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection