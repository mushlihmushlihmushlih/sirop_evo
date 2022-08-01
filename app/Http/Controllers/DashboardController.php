<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Models\keluarga;


class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $keluarga = Keluarga::where("id_user",$user->id)->first();
        $anggota = Anggota::where('id_keluarga', $keluarga->id_keluarga)->get();
        return view('dashboard.index', [
            'title' => 'Home',
            'keluarga' => $keluarga,
            'anggota' => $anggota
        ]);
    }

    public function riwayat()
    {
        return view('dashboard.riwayat', [
            'title' => 'Riwayat Kunjungan'
        ]);
    }

    public function akun()
    {
        return view('dashboard.akun', [
        'title' => 'Akun'
        ]);
    }
}
