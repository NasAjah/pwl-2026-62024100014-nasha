@extends('layouts.app')

@section('title', 'Data Poliklinik')

@section('content')
<h1>Data Poliklinik</h1>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Poliklinik</th>
            <th>Lokasi Gedung</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($polis as $poli)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $poli['nama_poli'] }}</td>
            <td>{{ $poli['gedung'] }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3" style="text-align: center;">Belum ada data poliklinik.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection