@extends('master')

@section('konten')
<!-- Main content -->
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
        <div class="container mt-1 mb-5">
            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->id }}">

                <!-- Edit Nama -->
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputNama" name="nama" required value="{{ $p->nama }}" autofocus>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Edit Jabatan -->
                <div class="mb-3">
                    <label for="inputJabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="inputJabatan" name="jabatan" required value="{{ $p->jabatan }}">
                    @error('jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Edit Gender -->
                <div class="mb-3">
                    <label for="inputGender" class="form-label">Gender</label>
                    <input type="text" class="form-control @error('gender') is-invalid @enderror" id="inputGender" name="gender" required value="{{ $p->gender }}">
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Edit Image -->
                <!-- <div class="mb-3">
                    <label for="currentImage" class="form-label">Gambar Saat Ini:</label><br>
                    @if($p->image)
                        <img src="{{ asset('images/' . $p->image) }}" alt="Gambar Pegawai" width="25%">
                    @else
                        <p>Tidak ada gambar saat ini.</p>
                    @endif
                </div> -->
                <div class="mb-3">
                    <label for="inputImage" class="form-label">Unggah Gambar Baru (Maksimal 2MB)</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputImage" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid gap-2 d-md-block">
                    <a class="btn btn-danger" href="/pegawai" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
            @endforeach
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection