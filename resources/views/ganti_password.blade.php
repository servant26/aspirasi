@extends('master')

@section('konten')
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ganti Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Ganti Password</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="container mt-1 mb-5">
                <form id="dataForm" action="/ganti_password_bpd/update_bpd/{{ $data_admin->id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')

                    <!-- Old Password -->
                    <div class="mb-3 position-relative">
                        <label for="inputOldPassword" class="form-label">Masukkan Password Lama :</label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="inputOldPassword" name="old_password" required autofocus>
                            <div class="input-group-append">
                                <span class="input-group-text eye-icon" onclick="togglePasswordVisibility('inputOldPassword')">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        @error('old_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- New Password -->
                    <div class="mb-3 position-relative">
                        <label for="inputNewPassword" class="form-label">Ganti Password Baru :</label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="inputNewPassword" name="new_password" required>
                            <div class="input-group-append">
                                <span class="input-group-text eye-icon" onclick="togglePasswordVisibility('inputNewPassword')">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        @error('new_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-danger" href="/data_admin_bpd" role="button">Kembali</a>
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('js')
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script>
function togglePasswordVisibility(inputId) {
    const input = document.getElementById(inputId);
    const icon = input.parentElement.querySelector('i');
    
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

// document.getElementById('dataForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Mencegah formulir dikirimkan secara default

//     Swal.fire({
//         title: 'Berhasil!',
//         text: 'Password berhasil diperbarui',
//         icon: 'success',
//         confirmButtonText: 'OK'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             // Setelah menekan OK, kirimkan formulir
//             event.target.submit();
//         }
//     });
// });
</script>
@endsection
