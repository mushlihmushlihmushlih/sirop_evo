<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\keluarga;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $keluarga = Keluarga::where("id_user", $user->id)->first();
        $anggota = Anggota::where("id_keluarga", $keluarga->id_keluarga)->get();
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

    public function hapus($id)
    {
        DB::table('anggotas')->where('id_anggota', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard/home');
    }

    public function akun()
    {
        $user = auth()->user();
        return view('dashboard.akun', [
            'title' => 'Akun',
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $keluarga = Keluarga::where("id_user", $user->id)->first();
        // insert data ke table keluarga
        DB::table('anggotas')->insert([
            'id_keluarga' => $keluarga->id_keluarga,
            'nama' => $request->nama,
            'NIK' => $request->NIK,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_keanggotaan' => $request->status_keanggotaan,
            'nomor_hp' => $request->nomor_hp,
        ]);
        // return $request;
        return redirect('/dashboard/home');
    }

    public function updateAnggota(Request $request)
    {
        //edit anggota keluarga
        DB::table('anggotas')->where('id_anggota', $request->id_anggota)->update([
            'nama' => $request->nama,
            'NIK' => $request->NIK,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_keanggotaan' => $request->status_keanggotaan,
            'nomor_hp' => $request->nomor_hp

        ]);
        // dd ($request);
        // return $request;
        return redirect('/dashboard/home');
    }

    public function ganti(Request $request)
    {
        # Validation
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
    }
}
