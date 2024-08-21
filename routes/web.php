<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DataController;

// Route admin
Route::get('login', [DataController::class, 'login']);
Route::post('login', [DataController::class, 'authenticate']); // Add this line
Route::get('dashboard_bpd', [AdminController::class, 'index']);
Route::get('/dashboard_bpd/hapus_bpd/{id}', [AdminController::class, 'dashboard_hapus']);
Route::get('belum_ditanggapi_bpd', [AdminController::class, 'belum']);
Route::get('sudah_ditanggapi_bpd', [AdminController::class, 'sudah']);
Route::get('daftar_aspirasi_bpd', [AdminController::class, 'daftar_aspirasi']);
Route::get('detail_bpd', [AdminController::class, 'detail']);
Route::get('/dashboard_bpd/detail_bpd/{id}', [AdminController::class, 'detail']);
Route::post('/detail_bpd/update_bpd', [AdminController::class, 'update']);

// Route user
Route::get('/', [UserController::class, 'home']);
Route::get('/buat_aspirasi', [UserController::class, 'buat_aspirasi']);
Route::post('/buat_aspirasi/store', [UserController::class, 'store']);
Route::get('/lihat_aspirasi', [UserController::class, 'lihat_aspirasi']);
Route::get('/faq', [UserController::class, 'faq']);

// Route pegawai
Route::get('/pegawai_bpd', [PegawaiController::class, 'pegawai']);
Route::get('/pegawai_bpd/tambah_bpd', [PegawaiController::class, 'tambah']);
Route::post('/pegawai_bpd/store_bpd', [PegawaiController::class, 'store']);
Route::get('/pegawai_bpd/edit_bpd/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai_bpd/update_bpd', [PegawaiController::class, 'update']);
Route::get('/pegawai_bpd/hapus_bpd/{id}', [PegawaiController::class, 'hapus']);

// Route data_admin
Route::get('/data_admin_bpd', [DataController::class, 'data_admin']);
Route::put('/data_admin_bpd/update_bpd/{id}', [DataController::class, 'update']);
Route::get('/ganti_password_bpd', [DataController::class, 'ganti_password']);
Route::put('/ganti_password_bpd/update_bpd/{id}', [DataController::class, 'updatePassword']);

