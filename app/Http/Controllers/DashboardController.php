<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\User;
use App\Models\JadwalPeriksa;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        $totalObat = Obat::count();
        $totalDokter = User::where('role', 'dokter')->count();
        $totalPasien = User::where('role', 'pasien')->count();

        return view('admin.dashboard', compact('totalObat', 'totalDokter', 'totalPasien'));
    }

    public function dokter()
    {
        $totalJadwal = JadwalPeriksa::where('id_dokter', Auth::id())->count();
        return view('dokter.dashboard', compact('totalJadwal'));
    }

    public function pasien()
    {
        $pasien = Auth::user();
        return view('pasien.dashboard', compact('pasien'));
    }
}