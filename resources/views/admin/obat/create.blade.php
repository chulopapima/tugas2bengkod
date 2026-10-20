@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold">Tambah Obat Baru</h3>
                <a href="{{ route('admin.obat.index') }}" class="btn btn-secondary">Kembali</a>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <form action="{{ route('admin.obat.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control @error('nama_obat') is-invalid @enderror" value="{{ old('nama_obat') }}">
                            @error('nama_obat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kemasan</label>
                            <input type="text" name="kemasan" class="form-control @error('kemasan') is-invalid @enderror" value="{{ old('kemasan') }}" placeholder="Contoh: Strip @ 10 Tablet">
                            @error('kemasan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Harga (Rp)</label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}">
                            @error('harga')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <button type="submit" class="btn btn-primary px-4">Simpan Obat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection