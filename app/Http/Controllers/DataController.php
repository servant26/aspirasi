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
		$data_admin = DB::table('data_admin')->first(); // This will be a single object
		return view('data_admin', ['data_admin' => $data_admin]);
	}

	public function update(Request $request, $id)
	{
		// Validate the request
		$request->validate([
			'nama' => 'required|string|max:50',
			'jabatan' => 'required|string|max:50',
			'gender' => 'required|string',
			'username' => 'required|string|max:20',
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
	
		return redirect('/dashboard')->with('success', 'Data berhasil diubah');
	}

	// DataController.php
	public function getAdminData()
	{
		$adminData = DB::table('data_admin')->select('nama', 'image')->first();
		return $adminData;
	}

	
}