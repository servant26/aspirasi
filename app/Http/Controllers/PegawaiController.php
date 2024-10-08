<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PegawaiController extends Controller
{
	public function pegawai()
	{
    	// mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view pegawai
		return view('pegawai',['pegawai' => $pegawai]);
 
	}
 
	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// Validate the request
		$request->validate([
			'nama' => 'required|string|max:30',
			'jabatan' => 'required|string|max:30',
			'gender' => 'required',
			'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
		],[
			'nama.required' => 'Mohon isi form ini',
			'jabatan.required' => 'Mohon isi form ini',
		]);
		
		// Prepare the data to insert
		$data = [
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'gender' => $request->gender,
		];
	
		// Handle image upload if present
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$imageName = time() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('images'), $imageName);
			
			$data['image'] = $imageName;
		}
	
		// Insert data into the pegawai table
		DB::table('pegawai')->insert($data);
	
		// Redirect to the pegawai page
		return redirect('/pegawai_bpd');
	}	
 
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pegawai' => $pegawai]);
	}
 
	public function update(Request $request)
	{
		// Validasi data
		$request->validate([
			'nama' => 'required|string|max:255',
			'jabatan' => 'required|string|max:255',
			'gender' => 'required',
			'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
		]);
	
		// Siapkan data untuk diupdate
		$data = [
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'gender' => $request->gender,
		];
	
		// Periksa apakah gambar baru diunggah
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$imageName = time() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('images'), $imageName);
	
			$data['image'] = $imageName;
		}
	
		// Update data pegawai berdasarkan ID
		DB::table('pegawai')->where('id', $request->id)->update($data);
	
		// Redirect ke halaman pegawai
		return redirect('/pegawai_bpd');
	}
	
	
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai_bpd');
	}
}