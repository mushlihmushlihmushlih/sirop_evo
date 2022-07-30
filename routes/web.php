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
    Route::get('/admin/data/keluarga', [AdminController::class, 'keluarga'])->name('admin');
    Route::get('/admin/poli', [AdminController::class, 'poli'])->name('admin');
    Route::get('/admin/dokter', [AdminController::class, 'dokter'])->name('admin');
});

// user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard/home', [DashboardController::class, 'index'])->name('user');
    Route::get('/dashboard/riwayat', [DashboardController::class, 'riwayat'])->name('user');
    Route::get('/dashboard/akun', [DashboardController::class, 'akun'])->name('user');
});
