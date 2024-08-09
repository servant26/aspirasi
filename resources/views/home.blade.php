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