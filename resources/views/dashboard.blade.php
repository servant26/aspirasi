@extends('master')

@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Selamat datang Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $aspirations->count() }}</h3>

                <p>Daftar Aspirasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="/daftar_aspirasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>{{ $aspirations->filter(function($aspiration) { return is_null($aspiration->isi_tanggapan); })->count() }}</h3>
                <p>Belum ditanggapi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-times"></i>
              </div>
              <a href="/belum_ditanggapi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{ $aspirations->filter(function($aspiration) { return !is_null($aspiration->isi_tanggapan); })->count() }}</h3>
                <p>Sudah ditanggapi</p>
              </div>
              <div class="icon">
                <i class="fa fa-upload"></i>
              </div>
              <a href="/sudah_ditanggapi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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