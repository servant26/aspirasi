<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [AdminController::class, 'index']);
Route::get('belum_ditanggapi', [AdminController::class, 'belum']);
Route::get('sudah_ditanggapi', [AdminController::class, 'sudah']);
Route::get('daftar_aspirasi', [AdminController::class, 'daftar_aspirasi']);
Route::get('detail', [AdminController::class, 'detail']);
Route::get('/dashboard/detail/{id}', [AdminController::class, 'detail']);