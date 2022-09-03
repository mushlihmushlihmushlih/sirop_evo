<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Anggota;
use App\Models\Antrian;
use App\Models\Nomor;
use App\Models\Keluarga;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'Home'
        ]);
    }
    
    public function data()
    {
        $data = DB::table('keluargas')->get();

        return view('admin.data', [
            'title' => 'Data Keluarga',
            'users' => $data
        ]);
    }

    public function keluarga($id)
    {
        // dd($id);
        // $user = auth()->user();

        // $keluarga = Keluarga::find($id);
        $keluarga = Keluarga::where("id_user", $id)->first();
        // dd($keluarga);
        $anggota = Anggota::where("id_keluarga", $id)->get();
        // dd($anggota);
        return view('admin.keluarga', [
            'title' => 'Data Keluarga',
            'keluarga' => $keluarga,
            'anggota' => $anggota
        ]);
    }

    public function antrian()
    {
        return view('admin.antrian', [
            'title' => 'Kontrol Antrian'
        ]);
    }

    public function dataAntrian()
    {
        $data = Antrian::query()
        ->orderBy('tanggal_antrian', 'DESC')
        ->orderBy('nomor_antrian', 'DESC')
        ->get();

        return view('admin.antriandata', [
            'title' => 'Data Antrian',
            'antrian' => $data
        ]);
    }
    public function poli()
    {
        $data = DB::table('polis')->get();
        
        return view('admin.poli', [
            'title' => 'Poli',
            'poli' => $data
        ]);
    }

    public function tambahPoli(Request $request)
    {
        // insert data ke table poli
        DB::table('polis')->insert([
            'nama_poli' => $request->nama_poli,
            'kuota' => $request->kuota
        ]);

        return redirect('/admin/poli');
    }

    public function updatePoli(Request $request)
    {
        //edit anggota keluarga
        DB::table('polis')->where('id_poli', $request->id_poli)->update([
            'id_poli' => $request->id_poli,
            'nama_poli' => $request->nama_poli,
            'kuota' => $request->kuota

        ]);
        // dd ($request);
        // return $request;
        return redirect('/admin/poli');
    }

    public function deletePoli($id)
    {
        DB::table('polis')->where('id_poli', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/admin/poli');
    }

    public function dokter()
    {

        $dokter = Dokter::all();
        $data = DB::table('polis')->get();

        return view('admin.dokter', [
            'title' => 'Dokter',
            'dokter' => $dokter,
            'data' => $data
            // 'dataPoli' => $dataPoli
        ]);
        // return $dokter; 

        // dd ($poli);
    }

    public function tambahDokter(Request $request)
    {
        // insert data ke table dokter


        DB::table('dokters')->insert([
            'nama_dokter' => $request->nama_dokter,
            'id_poli' => $request->id_poli,
            'alamat_dokter' => $request->alamat_dokter,
            'email_dokter' => $request->email_dokter
        ]);

        return redirect('/admin/dokter');
    }

    public function updateDokter(Request $request)
    {
        //edit anggota keluarga
        DB::table('dokters')->where('id_dokter', $request->id_dokter)->update([
            'id_dokter' => $request->id_dokter,
            'id_poli' => $request->id_poli,
            'nama_dokter' => $request->nama_dokter,
            'email_dokter' => $request->email_dokter

        ]);
        // dd ($request);
        // return $request;
        return redirect('/admin/dokter');
    }

    public function deleteDOkter($id)
    {
        DB::table('dokters')->where('id_dokter', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/admin/dokter');
    }
}
