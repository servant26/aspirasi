<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function home()
    {
        // mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view pegawai
		return view('home',['pegawai' => $pegawai]);
    }

    public function buat_aspirasi()
    {
        return view('buat_aspirasi');
    }

    public function store(Request $request)
    {
        // Insert data ke table aspirations
        DB::table('aspirations')->insert([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'isi_aspirasi' => $request->input('isi_aspirasi'),
            'created_at' => now(), // Set timestamp created_at
            'updated_at' => now(), // Set timestamp updated_at jika perlu
        ]);        
        
        // Alihkan halaman ke halaman buat aspirasi
        return redirect('/buat_aspirasi');
    }
    

    public function lihat_aspirasi(Request $request)
    {
        // Get search query from the request
        $search = $request->input('search');
    
        // Build the query with optional search filter
        $query = DB::table('aspirations')
            ->whereNotNull('isi_tanggapan');
    
        if ($search) {
            $query->where('nama', 'like', "%{$search}%");
        }
    
        $aspirations = $query->orderBy('updated_at', 'desc')
            ->paginate(5); // Set pagination to 5 entries per page
    
        return view('lihat_aspirasi', ['aspirations' => $aspirations, 'search' => $search]);
    }
    
    

    public function faq()
    {
        return view('faq');
    }
}
