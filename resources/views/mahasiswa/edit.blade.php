@extends('layout')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="card p-4">
    <h2 class="text-center mb-4 text-primary fw-bold">Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim) }}">
            @error('nim') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama) }}">
            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{ old('prodi', $mahasiswa->prodi) }}">
            @error('prodi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="text-end">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection

