@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><h4>Tambah Mahasiswa</h4></div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}" required>
                        @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}" required>
                        @error('jurusan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="text" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror" value="{{ old('angkatan') }}" required>
                        @error('angkatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection