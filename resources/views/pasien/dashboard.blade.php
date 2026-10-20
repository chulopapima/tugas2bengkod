@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card border-0 shadow-sm p-4 mb-4">
        <h4 class="fw-bold">Selamat Datang, {{ Auth::user()->name ?? Auth::user()->nama }}!</h4>
        <p class="text-muted mb-0">
            Nomor Rekam Medis Anda: 
            <span class="badge bg-primary fs-6">{{ Auth::user()->no_rm ?? 'RM-202610-001' }}</span>
        </p>
    </div>
    
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-3">
                <h5>Ingin Berobat?</h5>
                <p class="text-muted small">Daftar poli untuk mendapatkan nomor antrean.</p>
                <a href="#" class="btn btn-primary">Daftar Poli</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-3">
                <h5>Riwayat Periksa</h5>
                <p class="text-muted small">Lihat catatan pemeriksaan medis Anda.</p>
                <a href="#" class="btn btn-outline-secondary">Lihat Riwayat</a>
            </div>
        </div>
    </div>
</div>
@endsection