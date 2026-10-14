@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Dashboard Klinik</h1>
<p>Selamat datang di Sistem Informasi Klinik.</p>

<div class="card-container">
    <div class="card">
        <h3>Jumlah Pasien</h3>
        <p style="font-size: 28px; font-weight: bold; color: #007bff; margin: 5px 0 0 0;">{{ $jumlahPasien }}</p>
    </div>
    <div class="card">
        <h3>Jumlah Dokter</h3>
        <p style="font-size: 28px; font-weight: bold; color: #28a745; margin: 5px 0 0 0;">{{ $jumlahDokter }}</p>
    </div>
    <div class="card">
        <h3>Jumlah Poli</h3>
        <p style="font-size: 28px; font-weight: bold; color: #ffc107; margin: 5px 0 0 0;">{{ $jumlahPoli }}</p>
    </div>
</div>
@endsection