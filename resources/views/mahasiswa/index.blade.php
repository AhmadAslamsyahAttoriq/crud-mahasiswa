@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Mahasiswa</h2>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">+ Tambah Mahasiswa</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                    <th width="160">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mahasiswas as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->angkatan }}</td>
                    <td>{{ $mhs->email ?? '-' }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection