@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
<h1>Data Pasien</h1>

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
        </tr>
        @empty
        <tr>
            <td colspan="7" style="text-align: center;">Belum ada data pasien di database.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection