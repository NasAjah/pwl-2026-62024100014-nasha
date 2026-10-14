@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
<h1>Data Pasien</h1>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($patients as $patient)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $patient['nama'] }}</td>
            <td>{{ $patient['alamat'] }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3" style="text-align: center;">Belum ada data pasien.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection