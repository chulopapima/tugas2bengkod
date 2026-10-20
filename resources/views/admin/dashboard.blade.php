@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3 class="fw-bold mb-4">Dashboard Admin</h3>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-primary text-white p-3">
                <h5>Total Obat</h5>
                <h2 class="fw-bold">{{ $totalObat }}</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-success text-white p-3">
                <h5>Total Dokter</h5>
                <h2 class="fw-bold">{{ $totalDokter }}</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-warning text-white p-3">
                <h5>Total Pasien</h5>
                <h2 class="fw-bold">{{ $totalPasien }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection