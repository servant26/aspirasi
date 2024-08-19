@extends('master')

@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Daftar Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Jabatan</th>
                    <th>Gender</th>
                    <th style="width: 15%;"><a class="btn btn-primary" href="/pegawai_bpd/tambah_bpd" role="button">Tambah</a></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($pegawai as $index => $a)
                    <tr>
                      <td>{{ $index + 1 }}</td> <!-- Nomor Urut -->
                      <td>{{ $a->nama }}</td>
                      <td><img src="{{ asset('images/' . $a->image) }}" alt="Gambar Pegawai" width="100"></td>
                      <td>{{ $a->jabatan }}</td>
                      <td>{{ $a->gender }}</td>
                      <td>
                      <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-warning" href="/pegawai_bpd/edit_bpd/{{ $a->id }}" role="button">Edit</a>
                        <a class="btn btn-danger delete-btn" href="/pegawai_bpd/hapus_bpd/{{ $a->id }}" role="button" data-id="{{ $a->id }}">Hapus</a>
                      </div>  
                      </td>
                    </tr> 
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- SweetAlert2 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(e) {
          e.preventDefault();
          const url = this.getAttribute('href');

          Swal.fire({
            title: 'Konfirmasi Hapus',
            text: "Anda yakin ingin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = url;
            }
          });
        });
      });
    });
  </script>
@endsection
