@extends('usermaster')

@section('content')
<div class="container-fluid">
    <div class="container col-10 col-sm-10 col-md-8 mt-5 mb-5">
    <form>
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="address" placeholder="Masukkan alamat Anda" required>
  </div>
  
  <div class="mb-3">
    <label for="phone" class="form-label">Nomor Telepon</label>
    <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon Anda" required>
  </div>
  
  <div class="mb-3">
    <label for="aspiration" class="form-label">Isi Aspirasi</label>
    <textarea class="form-control" id="aspiration" rows="4" placeholder="Masukkan aspirasi Anda" required></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>

    </div>
</div>
@endsection