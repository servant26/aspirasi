<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
 
class DataController extends Controller
{	
	// method untuk edit data data_admin
	public function data_admin()
	{
		// Retrieve the first admin's data (or adjust according to your needs)
		$data_admin = DB::table('data_admin')->first(); // Use ->get() if you need all admins
	
		// Send data to the view
		return view('data_admin', ['data_admin' => $data_admin]);
	}
	

	public function update(Request $request, $id)
	{
		// Validate the request
		$request->validate([
			'nama' => 'required|string|max:255',
			'jabatan' => 'required|string|max:255',
			'gender' => 'required|string',
			'username' => 'required|string|max:255',
			'password' => 'nullable|string|min:6',
			'image' => 'nullable|image|max:2048',
		]);
	
		// Prepare data for update
		$dataToUpdate = [
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'gender' => $request->gender,
			'username' => $request->username,
			'password' => $request->password,
		];
	
		// Handle image upload
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$imageName = time() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('images'), $imageName);
	
			// Update image name in dataToUpdate
			$dataToUpdate['image'] = $imageName;
		}
	
		// Update data in the database
		DB::table('data_admin')->where('id', $id)->update($dataToUpdate);
	
		return redirect('/data_admin')->with('success', 'Data berhasil diubah');
	}
	
	
}