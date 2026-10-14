@extends('layouts.app')

@section('title', 'Data Poliklinik')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
    <h1>Data Poliklinik</h1>
    <a href="{{ route('poli.create') }}" style="background-color: #28a745; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold;">+ Tambah Poli Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Poli</th>
            <th>Nama Poliklinik</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($polis as $poli)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $poli->code }}</td>
            <td>{{ $poli->name }}</td>
            <td>{{ $poli->description ?? '-' }}</td>
            <td>
                @if ($poli->is_active)
                    <span class="badge badge-success">Aktif</span>
                @else
                    <span class="badge badge-danger">Tidak Aktif</span>
                @endif
            </td>
            <td>
                <a href="{{ route('poli.edit', $poli->id) }}" style="background-color: #ffc107; color: #212529; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-size: 13px; margin-right: 5px;">Edit</a>
                
                <form action="{{ route('poli.destroy', $poli->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus data poliklinik ini?')" style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 3px; font-size: 13px; cursor: pointer;">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="text-align: center;">Belum ada data poliklinik.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection