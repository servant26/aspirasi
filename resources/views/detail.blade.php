@extends('master')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail aspirasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Detail Aspirasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <section class="content">
                <div class="container-fluid">
                    <div class="container mb-5">
                    @foreach($aspirations as $a)
                    <form id="detailForm" action="/detail_bpd/update_bpd" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $a->id }}">
                        
                        <!-- Nama Pengirim -->
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama Pengirim :</label>
                            <input type="text" value="{{ $a->nama }}" class="form-control" id="inputNama" name="nama_pengirim" readonly>
                        </div>

                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="inputAlamat" class="form-label">Alamat :</label>
                            <input type="text" value="{{ $a->alamat }}" class="form-control" id="inputAlamat" name="alamat" readonly>
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="mb-3">
                            <label for="inputTelepon" class="form-label">Nomor Telepon :</label>
                            <input type="tel" value="{{ $a->nomor_telepon }}" class="form-control" id="inputTelepon" name="nomor_telepon" readonly>
                        </div>
                        
                        <!-- Isi Aspirasi -->
                        <div class="mb-3">
                            <label for="inputAspirasi" class="form-label">Isi Aspirasi :</label>
                            <textarea class="form-control" id="inputAspirasi" name="isi_aspirasi" rows="5" readonly>{{ $a->isi_aspirasi }}</textarea>
                        </div>

                        <!-- Isi Tanggapan Anda -->
                        <div class="mb-3">
                            <label for="inputTanggapan" class="form-label">Isi Tanggapan Anda :</label>
                            <textarea class="form-control" id="inputTanggapan" name="isi_tanggapan" rows="3" required autofocus>{{ $a->isi_tanggapan }}</textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-danger" href="/dashboard_bpd" role="button">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>     
                    @endforeach    
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>
    </section>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('detailForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah formulir dikirimkan secara default

    Swal.fire({
        title: 'Berhasil!',
        text: 'Aspirasi berhasil ditanggapi',
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
