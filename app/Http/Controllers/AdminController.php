<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $aspirations = DB::table('aspirations')->get();
    
        // mengirim data pegawai ke view dashboard
        return view('dashboard', ['aspirations' => $aspirations]);
    }

    public function belum()
    {
        // mengambil data dari table pegawai
        $aspirations = DB::table('aspirations')->where('status', 1)->get();
    
        // mengirim data pegawai ke view dashboard
        return view('belum', ['aspirations' => $aspirations]);
    }

    public function sudah()
    {
        // mengambil data dari table pegawai
        $aspirations = DB::table('aspirations')->where('status', 2)->get();
    
        // mengirim data pegawai ke view dashboard
        return view('sudah', ['aspirations' => $aspirations]);
    }

    public function daftar_aspirasi()
    {
        // mengambil data dari table pegawai
        $aspirations = DB::table('aspirations')->get();
    
        // mengirim data pegawai ke view dashboard
        return view('daftar_aspirasi', ['aspirations' => $aspirations]);
    }
    
}
