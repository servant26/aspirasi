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
    
}
