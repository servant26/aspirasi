<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function profile_bpd()
    {
        return view('profile_bpd');
    }

    public function buat_aspirasi()
    {
        return view('buat_aspirasi');
    }
}
