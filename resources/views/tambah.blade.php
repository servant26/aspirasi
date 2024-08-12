@extends('master')

@section('konten')
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Tambah Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="container-fluid">
        <div class="container mt-1 mb-5">
            <form id="tambahForm" action="/pegawai/store" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <!-- Nama -->
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputNama" name="nama" required autofocus>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Jabatan -->
                <div class="mb-3">
                    <label for="inputJabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="inputJabatan" name="jabatan" required>
                    @error('jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select class="form-select @error('gender') is-invalid @enderror" id="inputGender" name="gender" required>
                        <option value="" disabled selected>Pilih Gender</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label for="inputImage" class="form-label">Unggah Gambar (Maksimal 2MB)</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputImage" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid gap-2 d-md-block">
                    <a class="btn btn-danger" href="/pegawai" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('tambahForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah formulir dikirimkan secara default

    Swal.fire({
        title: 'Berhasil!',
        text: 'Pegawai berhasil ditambahkan',
        icon: 'success',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            // Setelah menekan OK, kirimkan formulir
            event.target.submit();
        }
    });
});
</script>
@endsection