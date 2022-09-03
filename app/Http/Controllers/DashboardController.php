<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\User;
use App\Models\Anggota;
use App\Models\Antrian;
use App\Models\keluarga;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;


class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $keluarga = Keluarga::where("id_user", $user->id)->first();
        $anggota = Anggota::where("id_keluarga", $keluarga->id_keluarga)->get();
        $poli = Poli::All();
        return view('dashboard.index', [
            'title' => 'Home',
            'keluarga' => $keluarga,
            'anggota' => $anggota,
            'poli' => $poli
        ]);
    }

    public function riwayat()
    {
        $data = Antrian::query()
        ->orderBy('tanggal_antrian', 'DESC')
        ->orderBy('nomor_antrian', 'DESC')
        ->get();

        return view('dashboard.riwayat', [
            'title' => 'Riwayat Kunjungan',
            'riwayat' => $data
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

    public function daftar(Request $request)
    {
        DB::table('antrians')->insert([
            'id_anggota' => $request->id_anggota,
            'nomor_antrian' => $request->nomor_antrian,
            'tanggal_antrian' => $request->tanggal_antrian,
            'id_poli' => $request->id_poli,
            'keluhan' => $request->keluhan
        ]);

        // return $request;
        return redirect('/dashboard/home/daftar/tiket/{id}');
    }

    public function tiket($id)
    {
        $data = Antrian::query()
        ->orderBy('tanggal_antrian', 'DESC')
        ->orderBy('nomor_antrian', 'DESC')
        ->first();
    	return view('dashboard.tiket',['antrian'=>$data]);
        // return $data;
    }

    public function cetak()
    {
        $antrian = Antrian::query()
        ->orderBy('nomor_antrian', 'ASC')
        ->orderBy('tanggal_antrian', 'DESC')
        ->orderBy('id_poli', 'DESC')
        ->first();
        $pdf = PDF::loadview('dashboard.tiket',['antrian'=>$antrian]);
        set_time_limit(300);
    	// return $pdf->download('antrian.pdf');
    	return $pdf->download("tiket ".$antrian->Anggota->nama."-".$antrian->tanggal_antrian.".pdf");
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
