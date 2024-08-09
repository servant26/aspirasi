@extends('master')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <section class="content">
                <div class="container-fluid">
                    <div class="container mt-1 mb-5">
                    @foreach($aspirations as $a)
                    <form action="/detail/update" method="post">
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

                        <!-- Jenis Aspirasi -->
                        <div class="mb-3">
                            <label for="inputKategori" class="form-label">Jenis Aspirasi :</label>
                            <input type="text" 
                                value="{{ $a->jenis_aspirasi == 1 ? 'Keluhan' : ($a->jenis_aspirasi == 2 ? 'Kritik' : ($a->jenis_aspirasi == 3 ? 'Saran' : '')) }}" 
                                class="form-control" 
                                id="inputKategori" 
                                name="jenis_aspirasi" 
                                readonly>
                        </div>
                        
                        <!-- Isi Aspirasi -->
                        <div class="mb-3">
                            <label for="inputAspirasi" class="form-label">Isi Aspirasi :</label>
                            <textarea class="form-control" id="inputAspirasi" name="isi_aspirasi" rows="5" readonly>{{ $a->isi_aspirasi }}</textarea>
                        </div>

                        <!-- Isi Tanggapan Anda -->
                        <div class="mb-3">
                            <label for="inputTanggapan" class="form-label">Isi Tanggapan Anda :</label>
                            <textarea class="form-control" id="inputTanggapan" name="isi_tanggapan" rows="3" required>{{ $a->isi_tanggapan }}</textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-danger" href="/dashboard" role="button">Kembali</a>
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
