@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Manajemen Obat</h3>
        <a href="{{ route('admin.obat.create') }}" class="btn btn-primary">+ Tambah Obat</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="px-3">No</th>
                            <th>Nama Obat</th>
                            <th>Kemasan</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($obats as $index => $obat)
                            <tr>
                                <td class="px-3">{{ $index + 1 }}</td>
                                <td>{{ $obat->nama_obat }}</td>
                                <td>{{ $obat->kemasan }}</td>
                                <td>Rp {{ number_format($obat->harga, 0, ',', '.') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.obat.edit', $obat->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                    <form action="{{ route('admin.obat.destroy', $obat->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus obat ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">Belum ada data obat.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection