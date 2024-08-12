@extends('master')

@section('konten')
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Profile Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="container-fluid">
        <div class="container mt-1 mb-5">
<form id="dataForm" action="/data_admin/update/{{ $data_admin->id }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')

    <!-- Nama -->
    <div class="mb-3">
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputNama" name="nama" value="{{ $data_admin->nama }}" required autofocus>
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Jabatan -->
    <div class="mb-3">
        <label for="inputJabatan" class="form-label">Jabatan</label>
        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="inputJabatan" name="jabatan" value="{{ $data_admin->jabatan }}" required>
        @error('jabatan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Gender -->
    <div class="mb-3">
        <label for="inputGender" class="form-label">Gender</label>
        <select class="form-select @error('gender') is-invalid @enderror" id="inputGender" name="gender" required>
            <option value="Laki-laki" {{ $data_admin->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $data_admin->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
        @error('gender')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Username -->
    <div class="mb-3">
        <label for="inputUsername" class="form-label">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="inputUsername" name="username" value="{{ $data_admin->username }}" required>
        @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="text" class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password" value="{{ $data_admin->password }}" required>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Display Existing Image or Alternative Text -->
    <div class="mb-3">
        <label for="currentImage" class="form-label">Foto Profile Saat Ini:</label><br>
        @if($data_admin->image)
            <img src="{{ asset('images/' . $data_admin->image) }}" alt="Foto Profil" width="25%">
        @else
            <p>Tidak ada Foto Profil.</p>
        @endif
    </div>

    <!-- Upload New Image -->
    <div class="mb-3">
        <label for="inputImage" class="form-label">Unggah Foto (Maksimal 2MB)</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputImage" name="image" accept="image/*">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-danger" href="/pegawai" role="button">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah Profile</button>
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
document.getElementById('dataForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah formulir dikirimkan secara default

    Swal.fire({
        title: 'Berhasil!',
        text: 'Profile berhasil diperbarui',
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