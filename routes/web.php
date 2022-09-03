<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//login & register
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


//data
Route::get('/register/data', [App\Http\Controllers\DataController::class, 'index'])->name('data');
Route::post('/register/store', [App\Http\Controllers\DataController::class, 'store']);
// Route::post();


// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/data', [AdminController::class, 'data'])->name('admin');
    Route::get('/admin/antrian', [AdminController::class, 'antrian'])->name('admin');
    Route::get('/admin/antrian/data', [AdminController::class, 'dataAntrian'])->name('admin');
    Route::get('/admin/data/keluarga/{id}', [AdminController::class, 'keluarga'])->name('admin');
    Route::get('/admin/poli', [AdminController::class, 'poli'])->name('admin');
    Route::post('/admin/poli', [AdminController::class, 'tambahPoli'])->name('admin');
    Route::post('/admin/poli/update', [AdminController::class, 'updatePoli'])->name('admin');
    Route::get('/admin/poli/delete/{id}', [AdminController::class, 'deletePoli'])->name('admin');
    Route::get('/admin/dokter', [AdminController::class, 'dokter'])->name('admin');
    Route::post('/admin/dokter', [AdminController::class, 'tambahDokter'])->name('admin');
    Route::post('/admin/dokter/update', [AdminController::class, 'updateDokter'])->name('admin');
    Route::get('/admin/dokter/delete/{id}', [AdminController::class, 'deleteDokter'])->name('admin');
});
//superadmin
Route::middleware(['auth', 'role:super'])->group(function () {
    Route::get('/super/home', [AdminController::class, 'index'])->name('admin');
    Route::get('/super/data', [AdminController::class, 'data'])->name('admin');
    Route::get('/super/antrian', [AdminController::class, 'antrian'])->name('admin');
    Route::get('/super/antrian/data', [AdminController::class, 'dataAntrian'])->name('admin');
    Route::get('/super/data/keluarga/{id}', [AdminController::class, 'keluarga'])->name('admin');
    Route::get('/super/poli', [AdminController::class, 'poli'])->name('admin');
    Route::post('/super/poli', [AdminController::class, 'tambahPoli'])->name('admin');
    Route::post('/super/poli/update', [AdminController::class, 'updatePoli'])->name('admin');
    Route::get('/super/poli/delete/{id}', [AdminController::class, 'deletePoli'])->name('admin');
    Route::get('/super/dokter', [AdminController::class, 'dokter'])->name('admin');
    Route::post('/super/dokter', [AdminController::class, 'tambahDokter'])->name('admin');
    Route::post('/super/dokter/update', [AdminController::class, 'updateDokter'])->name('admin');
    Route::get('/super/dokter/delete/{id}', [AdminController::class, 'deleteDokter'])->name('admin');
});

// user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard/home', [DashboardController::class, 'index'])->name('user');
    Route::get('/dashboard/riwayat', [DashboardController::class, 'riwayat'])->name('user');
    Route::get('/dashboard/akun', [DashboardController::class, 'akun'])->name('user');
    Route::get('/dashboard/hapus/{id}', [DashboardController::class, 'hapus'])->name('user');
    Route::get('/dashboard/home/daftar/tiket/{id}', [DashboardController::class, 'tiket'])->name('tiket');
    Route::get('/dashboard/home/daftar/tiket/cetak', [DashboardController::class, 'cetak'])->name('cetak');
    Route::post('/dashboard/home/update', [DashboardController::class, 'updateAnggota'])->name('user');
    Route::post('/dashboard/home/anggota', [DashboardController::class, 'store']);
    Route::post('/dashboard/akun/ganti', [DashboardController::class, 'ganti']);
    Route::post('/dashboard/home/daftar', [DashboardController::class, 'daftar']);
});
