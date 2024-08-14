<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve user from the database
        $admin = DB::table('data_admin')->where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // Authentication successful
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return redirect('login')->withErrors(['error' => 'Invalid email or password.']);
        }
    }

    // Existing methods...

    public function data_admin()
    {
        $data_admin = DB::table('data_admin')->first(); // This will be a single object
        return view('data_admin', ['data_admin' => $data_admin]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:50',
            'jabatan' => 'required|string|max:50',
            'gender' => 'required|string',
            'email' => 'required|string|max:50',
            'image' => 'nullable|image|max:2048',
        ]);
    
        // Siapkan data untuk update
        $dataToUpdate = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gender' => $request->gender,
            'email' => $request->email,
        ];
    
        // Handle image upload jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
    
            // Update image name dalam $dataToUpdate
            $dataToUpdate['image'] = $imageName;
        }
    
        // Update data di database
        DB::table('data_admin')->where('id', $id)->update($dataToUpdate);
    
        return redirect('/dashboard')->with('success', 'Data berhasil diubah');
    }
    
    public function ganti_password()
    {
        $data_admin = DB::table('data_admin')->first(); // This will be a single object
        return view('ganti_password', ['data_admin' => $data_admin]);
    }
    
    public function updatePassword(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'old_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:6|required_with:old_password',
        ]);
    
        // Fetch the current password from the database
        $currentPassword = DB::table('data_admin')->where('id', $id)->value('password');
    
        // Check if the old password matches the current password
        if (!Hash::check($request->old_password, $currentPassword)) {
            return redirect()->back()->withErrors(['old_password' => 'Password lama tidak cocok.']);
        }
    
        // Prepare data for update
        $dataToUpdate = [
            'password' => $request->new_password ? Hash::make($request->new_password) : DB::raw('password'),
        ];
    
        // Update data in the database
        DB::table('data_admin')->where('id', $id)->update($dataToUpdate);
    
        return redirect('/dashboard')->with('success', 'Data berhasil diubah');
    }
    

    public function getAdminData()
    {
        $adminData = DB::table('data_admin')->select('nama', 'image')->first();
        return $adminData;
    }
}
