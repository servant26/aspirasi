@extends('usermaster')
@section('css')
<link href="{{ asset('bt/css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('bt/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('bt/css/style.css') }}" rel="stylesheet" type="text/css" />
<!-- Tambahkan CSS untuk Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />

<style>
.visi{
    margin-left: 10%;
    margin-right: 10%
}

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

.title-line {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }
        .title-line::before,
        .title-line::after {
            content: "";
            flex: 1;
            border-bottom: 2px solid #000;
            margin-left: 5%;
            margin-right: 5%;
        }
        .title-line:not(:empty)::before {
            margin-right: 10px;
        }
        .title-line:not(:empty)::after {
            margin-left: 10px;
        }
        @media (max-width: 576px) {
            .container p {
                font-size: 0.9rem; /* Menyesuaikan ukuran font untuk teks dalam mode handphone */
            }

            .visi h4, .visi h5 {
                font-size: 1.2rem; /* Menyesuaikan ukuran font untuk Visi dalam mode handphone */
            }

            .title-line h4 {
                font-size: 1.2rem; /* Menyesuaikan ukuran font untuk Misi dalam mode handphone */
            }

            .container ol {
                font-size: 0.9rem; /* Menyesuaikan ukuran font untuk daftar misi dalam mode handphone */
            }
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

<!--Awal Cover-->
<div id="synopsis" class="container-fluid">
    <div class="container">
            <div class="col-lg-12 col-md-12 mb-1 mt-5 m-3">
                <h1 class="mb-4">Profile Desa</h1>
            </div>
        <div class="row mt-2 m-3">
            <div class="col-lg-3 col-md-4 mb-4">
                <img src="{{ asset('images/kepala_desa.png') }}" alt="Kepala Desa Lolo" class="img-fluid w-100 mb-2">
            </div>
            <div class="col-lg-9 col-md-8 d-flex align-items-center">
                <div class="w-100">
                    <p style="text-align:justify;">
                    Desa Lolo adalah bagian dari wilayah Kecamatan Kuaro, Kabupaten Paser, yang awalnya dikenal sebagai Desa Keluang Lolo. Desa ini kemudian mengalami pemekaran wilayah yang menghasilkan desa baru, yakni Desa Keluang Paser Jaya sebagai hasil dari proses pemekaran tersebut. Desa induk, yang tetap bernama Desa Lolo, merupakan kesatuan masyarakat hukum yang memiliki batas-batas wilayah yang jelas dan diakui secara resmi. Desa ini memiliki kewenangan untuk mengatur dan mengurus kepentingan masyarakat setempat berdasarkan asal-usul dan adat istiadat yang telah diwariskan turun-temurun, yang diakui serta dihormati dalam sistem pemerintahan Negara Kesatuan Republik Indonesia. Dengan posisi ini, Desa Lolo tidak hanya menjadi entitas administratif, tetapi juga menjadi penjaga nilai-nilai budaya dan tradisi yang penting bagi kehidupan masyarakatnya.
                    </p>
                </div>
            </div>
        </div>
    </div>  
</div>
<!--Akhir Cover-->



        

<div id="gallery" class="container-fluid bg-dark text-white p-5">
    <div class="container vm-content col-lg-6">
        <div class="text-center">
            <p class="fs-3">
                More Info
            </p>
        </div>
    </div>
</div>

<div class="visi">
    <h4 align="center" class="mt-5">Visi</h4>
    <h5 align="center" class="mb-5">“BerIMAN” Berorientasi pengawasan Inisiatif Menyerap Aspirasi Akuntabel dan Netralitas</h5>
</div>

<div class="container-fluid">
        <div class="title-line">
            <h4>Misi</h4>
        </div>
        <div class="container col-lg-9 mt-1 mb-5">
        <ol>
            <strong><li>Berorientasi Pengawasan</li></strong>
                <ul style="list-style-type: disc;">
                    <li>Bertindak secara objektif dan jujur</li>
                    <li>Melakukan pengawasan preventif dan korektif</li>
                    <li>Menciptakan hubungan kerja harmonis dan bersinergi mewujudkan pelayanan prima</li>
                </ul>
            <strong><li>Inisiatif</li></strong>
                <ul style="list-style-type: disc;">
                    <li>Proaktif bertindak mencari solusi</li>
                    <li>Menemukan peluang dalam mencapai tujuan</li>
                    <li>Berpikir kreatif memecahkan masalah</li>
                </ul>
            <strong><li>Menyerap Aspirasi</li></strong>
                <ul style="list-style-type: disc;">
                    <li>Menampung, mengelola dan menyalurkan aspirasi</li>
                    <li>Mendorong partisipasi dan mendengar langsung kebutuhan masyarakat</li>
                    <li>Memberi jawaban, tanggapan langsung serta menyatakan pendapat </li>
                </ul>
            <strong><li>Akuntabel</li></strong>
                <ul style="list-style-type: disc;">
                    <li>Melaksanakan tupoksi dengan jujur, bertanggungjawab, disiplin dan berintegritas tinggi</li>
                    <li>Menggunakan barang milik negara secara bertanggung jawab, efektif dan efisien</li>
                    <li>Tidak menyalahgunakan kewenangan jabatan</li>
                </ul>
            <strong><li>Netralitas</li></strong>
                <ul style="list-style-type: disc;">
                    <li>Tidak berpihak dari segala bentuk pengaruh manapun selalu berasaskan Peraturan</li>
                    <li>Tidak berpihak kepada kepentingan manapun tetap berpedoman kepada Undang-Undang dan Peraturan yang berlaku</li>
                    <li>Pengambilan keputusan berdasarkan musyawarah mufakat atau pemungutan suara</li>
                </ul>
        </ol>
    </div>
</div>

<div class="title-line">
    <h4>Daftar Anggota BPD</h4>
</div>

<div class="container-fluid">
        <div class="container col-lg-10 mt-1">
                <!-- card area start -->
                <div class="card_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel slider_carousel">
                                    @foreach($pegawai as $a)
                                        <div class="card_box">
                                            <img class="img-fluid w-100" src="{{ asset('images/' . $a->image) }}" alt="">
                                            <div class="card_text">
                                                <h4>{{ $a->nama }}</h4>
                                                <p>{{ $a->jabatan }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card area end -->
    </div>
</div>

<div class="title-line">
    <h4>Lokasi Kantor Desa Lolo</h4>
</div>

<div class="container-fluid">
        <div class="container col-lg-10 mt-1 mb-5">
            <!-- Tambahkan div untuk peta -->
            <div id="map" style="height: 400px;"></div>
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

@section('js')
<!-- all js here -->
<script src="{{ asset('bt/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('bt/js/owl.carousel.min.js') }}"></script>
<!-- Tambahkan script untuk Leaflet -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script>
    function slider_carouselInit() {
        $('.owl-carousel.slider_carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            stagePadding: 2,
            autoplay: false,
            nav: true,
            navText: ["<i class='far fa-arrow-alt-circle-left'></i>","<i class='far fa-arrow-alt-circle-right'></i>"],
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5
                }
            }
        });
    }
    slider_carouselInit();

    // Inisialisasi peta
    var map = L.map('map').setView([-1.8918, 116.1725], 13); // Sesuaikan koordinat dengan lokasi BPD Desa Lolo

    // Tambahkan layer tile dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Tambahkan marker untuk lokasi BPD Desa Lolo
    var marker = L.marker([-1.8918, 116.1725]).addTo(map)
        .bindPopup('<b>Kantor BPD Desa Lolo</b><br />Desa Lolo, Paser.').openPopup();

</script>
@endsection