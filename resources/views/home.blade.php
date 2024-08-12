@extends('usermaster')
@section('css')
<style>
.banner{
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.9)), url('{{ asset('images/cover.jpg') }}');
    background-size: cover;
    background-position: center;
}

.banner-content{
    height: 100%;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.banner-content p.fs-2,
.banner-content p.d-none.d-sm-block {
    text-shadow: 1px 2px 6px rgba(0, 0, 0, 1);
}

.banner-content .btn.btn-warning {
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
    color: white;
    transition: transform 0.3s ease;
}

.banner-content .btn.btn-warning:hover {
    transform: scale(1.1);
}
</style>
@endsection

@section('content')
<div class="container-fluid banner">
    <div class="container banner-content col-lg-6">
        <div class="text-center">
            <p class="fs-2">
                Selamat Datang di Web Aspirasi Masyarakat Desa Lolo
            </p>
            <p class="d-none d-sm-block">Merupakan sebuah website layanan yang menerima segala aspirasi dari Masyarakat di Desa Lolo</p>
            <a class="btn btn-warning" href="/buat_aspirasi" role="button">Ajukan Aspirasi</a>
        </div>
    </div>
</div>

<!-- Awal Character
<div id="char" class="container-fluid bg-dark text-white p-5">
    <div class="container vm-content col-lg-6">
        <div class="text-center">
            <p class="fs-1">
                Visi Misi
            </p>
        </div>
    </div>
</div>  -->
@endsection
