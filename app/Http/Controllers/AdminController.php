<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'aspirations', diurutkan berdasarkan kolom 'created_at' dari yang terbaru
        $aspirations = DB::table('aspirations')
                         ->orderBy('created_at', 'desc') // Mengurutkan data berdasarkan kolom 'created_at' dari terbaru
                         ->get();
        // Mengirim data ke view 'dashboard'
        return view('dashboard', ['aspirations' => $aspirations]);
    }
    

    public function belum()
    {
        // Mengambil data dari tabel 'aspirations' dimana kolom 'isi_tanggapan' masih null, diurutkan dari yang terbaru
        $aspirations = DB::table('aspirations')
                         ->whereNull('isi_tanggapan')
                         ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan kolom 'created_at'
                         ->get();
        
        // Mengirim data aspirasi ke view 'belum'
        return view('belum', ['aspirations' => $aspirations]);
    }
    
    public function sudah()
    {
        // Mengambil data dari tabel 'aspirations' dimana kolom 'isi_tanggapan' tidak null, diurutkan dari yang terbaru
        $aspirations = DB::table('aspirations')
                         ->whereNotNull('isi_tanggapan')
                         ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan kolom 'created_at'
                         ->get();
        
        // Mengirim data aspirasi ke view 'sudah'
        return view('sudah', ['aspirations' => $aspirations]);
    }    

    public function daftar_aspirasi()
    {
        // Mengambil data dari tabel 'aspirations', diurutkan berdasarkan kolom 'created_at' dari yang terbaru
        $aspirations = DB::table('aspirations')
                         ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan kolom 'created_at'
                         ->get();
        
        // Mengirim data aspirasi ke view 'daftar_aspirasi'
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
            'updated_at' => now(),  // Update timestamp
        ]);
    
        // Redirect ke halaman yang sesuai
        return redirect('/dashboard_bpd');
    }
    
    
    
}
