@extends('usermaster')

@section('content')
<div class="container-fluid">
    <div class="container col-10 col-sm-10 col-md-8 mt-5 mb-5">
      <form action="/buat_aspirasi/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
        </div>
        
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda" required>
        </div>
        
        <div class="mb-3">
          <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
          <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan nomor telepon Anda" required>
        </div>
        
        <div class="mb-3">
          <label for="isi_aspirasi" class="form-label">Isi Aspirasi</label>
          <textarea class="form-control" id="isi_aspirasi" name="isi_aspirasi" rows="4" placeholder="Masukkan aspirasi Anda" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
</div>
@endsection
