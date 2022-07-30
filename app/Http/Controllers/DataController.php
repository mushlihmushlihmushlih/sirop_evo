<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DataController extends Controller
{
    public function index()
    {
        return view('data');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        // insert data ke table keluarga
        DB::table('keluargas')->insert([
            'id_user' => $user->id,
            'nomor_kk' => $request->nomor_kk,
            'nama_kepala_kk' => $request->nama_kepala_kk,
            'alamat' => $request->alamat,
        ]);
        // return $request;
        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard/home');
    }
}
