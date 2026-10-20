@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h3 class="fw-bold mb-4">Selamat Datang, {{ Auth::user()->name ?? Auth::user()->nama }}</h3>
    <div class="card border-0 shadow-sm p-4">
        <h5>Jadwal Periksa Saya</h5>
        <p class="text-muted">Anda memiliki <strong>{{ $totalJadwal }}</strong> jadwal periksa terdaftar.</p>
        <a href="#" class="btn btn-primary w-auto d-inline-block">
            Kelola Jadwal Periksa
        </a>
    </div>
</div>
@endsection