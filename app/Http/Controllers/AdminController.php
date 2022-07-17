<?php

namespace App\Http\Controllers;

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
        $data = DB::table('users')->get();

        return view('admin.data', [
            'title' => 'Data Keluarga',
            'users' => $data
        ]);
    }

    public function keluarga()
    {
        $data = DB::table('users')->get();

        return view('admin.keluarga', [
            'title' => 'Data Keluarga',
            'users' => $data
        ]);
    }

    public function antrian()
    {
        return view('admin.antrian', [
            'title' => 'Kontrol Antrian'
        ]);
    }
}
