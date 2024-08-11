<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;

Route::get('login/', [AdminController::class, 'login']);
Route::get('/ganti_password', [AdminController::class, 'ganti']);
Route::get('dashboard', [AdminController::class, 'index']);
Route::get('belum_ditanggapi', [AdminController::class, 'belum']);
Route::get('sudah_ditanggapi', [AdminController::class, 'sudah']);
Route::get('daftar_aspirasi', [AdminController::class, 'daftar_aspirasi']);
Route::get('detail', [AdminController::class, 'detail']);
Route::get('/dashboard/detail/{id}', [AdminController::class, 'detail']);
Route::post('/detail/update', [AdminController::class, 'update']);

Route::get('/', [UserController::class, 'home']);
Route::get('/profile_bpd', [UserController::class, 'profile_bpd']);
Route::get('/buat_aspirasi', [UserController::class, 'buat_aspirasi']);
Route::post('/buat_aspirasi/store', [UserController::class, 'store']);
Route::get('/lihat_aspirasi', [UserController::class, 'lihat_aspirasi']);
Route::get('/faq', [UserController::class, 'faq']);

// route CRUD
Route::get('/pegawai', [PegawaiController::class, 'pegawai']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

