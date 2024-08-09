<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function login()
    {
        // mengirim data pegawai ke view dashboard
        return view('login');
    }

    public function ganti()
    {
        // mengirim data pegawai ke view dashboard
        return view('ganti');
    }

    public function index()
    {
        // mengambil data dari table pegawai
        $aspirations = DB::table('aspirations')->get();
    
        // mengirim data pegawai ke view dashboard
        return view('dashboard', ['aspirations' => $aspirations]);
    }

    public function belum()
    {
        // Mengambil data dari table aspirations dimana kolom isi_tanggapan masih null
        $aspirations = DB::table('aspirations')->whereNull('isi_tanggapan')->get();
    
        // Mengirim data aspirasi ke view belum
        return view('belum', ['aspirations' => $aspirations]);
    }
    

    public function sudah()
    {
        // Mengambil data dari table aspirations dimana kolom isi_tanggapan tidak null
        $aspirations = DB::table('aspirations')->whereNotNull('isi_tanggapan')->get();
    
        // Mengirim data aspirasi ke view sudah
        return view('sudah', ['aspirations' => $aspirations]);
    }
    

    public function daftar_aspirasi()
    {
        // mengambil data dari table pegawai
        $aspirations = DB::table('aspirations')->get();
    
        // mengirim data pegawai ke view dashboard
        return view('daftar_aspirasi', ['aspirations' => $aspirations]);
    }

    public function detail($id)
    {
        // mengambil data aspirations berdasarkan id yang dipilih
        $aspirations = DB::table('aspirations')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('detail',['aspirations' => $aspirations]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:aspirations,id',
            'isi_tanggapan' => 'required|string',
        ]);
    
        // Update data
        DB::table('aspirations')->where('id', $request->id)->update([
            'isi_tanggapan' => $request->isi_tanggapan,
        ]);
    
        // Redirect ke halaman yang sesuai
        return redirect('/dashboard');
    }
    
    
}
