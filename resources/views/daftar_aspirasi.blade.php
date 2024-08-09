@extends('master')

@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar aspirasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Sudah ditanggapi</li>
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
                    <th>Alamat(s)</th>
                    <th>Nomor Telepon</th>
                    <th>Jenis Aspirasi</th>
                    <th>Status</th>
                    <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($aspirations as $index => $a)
                    <tr>
                      <td>{{ $index + 1 }}</td> <!-- Nomor Urut -->
                      <td>{{ $a->nama }}</td>
                      <td>{{ $a->alamat }}</td>
                      <td>{{ $a->nomor_telepon }}</td>
                      <td>
                      @if($a->jenis_aspirasi == 1)
                        <p>Keluhan</p>
                      @elseif($a->jenis_aspirasi == 2)
                        <p>Kritik</p>
                      @elseif($a->jenis_aspirasi == 3)
                        <p>Saran</p>
                      @else
                        <button type="button" class="btn btn-secondary">Status Tidak Dikenal</button>
                      @endif
                      </td>
                      <td>
                      @if(is_null($a->isi_tanggapan))
                        <span class="badge badge-warning">Belum ditanggapi</span>
                      @else
                        <span class="badge badge-info">Sudah ditanggapi</span>
                      @endif
                      </td>
                    <td><a class="btn btn-success" href="/dashboard/detail/{{ $a->id }}" role="button">Detail</a></td>
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
@endsection