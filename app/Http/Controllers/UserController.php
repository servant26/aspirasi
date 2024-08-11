<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function profile_bpd()
    {
        // mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view pegawai
		return view('profile_bpd',['pegawai' => $pegawai]);
    }

    public function buat_aspirasi()
    {
        return view('buat_aspirasi');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('aspirations')->insert([
            'nama' => $request->input('nama'), // Pastikan input ini tidak null
            'alamat' => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'isi_aspirasi' => $request->input('isi_aspirasi'),
        ]);        
        // alihkan halaman ke halaman pegawai
        return redirect('/buat_aspirasi');
    
    }

    public function lihat_aspirasi()
    {
        return view('lihat_aspirasi');
    }

    public function faq()
    {
        return view('faq');
    }
}
