<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/data', [AdminController::class, 'data']);
Route::get('/admin/antrian', [AdminController::class, 'antrian']);
Route::get('/admin/data/keluarga', [AdminController::class, 'keluarga']);

Route::get('/dashboard', [DashboardController::class, 'index']);