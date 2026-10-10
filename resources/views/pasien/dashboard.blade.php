@extends('components.partials.layouts.app')

@section('content')
<div class="p-6">
    {{-- Header / Welcome --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Selamat Datang, {{ Auth::user()->name ?? 'Pasien' }}! 👋</h1>
        <p class="text-slate-500 text-sm mt-1">Selamat datang di Sistem Layanan Poliklinik.</p>
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl">
                <i class="fas fa-id-card"></i>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider">No. Rekam Medis</p>
                <h3 class="text-lg font-bold text-slate-800">{{ Auth::user()->no_rm ?? 'RM-202610-001' }}</h3>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider">Status Antrean</p>
                <h3 class="text-lg font-bold text-slate-800">Belum Ada Pendaftaran</h3>
            </div>
        </div>
    </div>

    {{-- Quick Action Button --}}
    <div class="bg-gradient-to-r from-[#1e2d6b] to-[#2d4499] rounded-2xl p-6 text-white flex justify-between items-center">
        <div>
            <h3 class="font-bold text-lg">Daftar Berobat Sekarang</h3>
            <p class="text-xs text-blue-100 mt-1">Pilih jadwal dokter dan dapatkan nomor antrean periksa secara online.</p>
        </div>
        <a href="#" class="btn bg-white text-[#1e2d6b] hover:bg-slate-100 border-none font-semibold text-sm">
            Daftar Poli <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
</div>
@endsection