@extends('layout')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="card p-4">
    <h2 class="text-center mb-4 text-primary fw-bold">Daftar Mahasiswa</h2>

    <div class="text-end mb-3">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">+ Tambah Mahasiswa</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-hover text-center align-middle">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->prodi }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada data mahasiswa.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

