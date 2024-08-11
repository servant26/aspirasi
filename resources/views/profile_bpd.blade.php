@extends('usermaster')
@section('css')
<link href="{{ asset('bt/css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('bt/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('bt/css/style.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="isi">
<div class="container-fluid">
    <div class="container col-lg-10 mt-5 mb-5">
    <h1 class="mb-5" align="center">Tentang BPD</h1>
    <ol type="A">
        <li>
            <strong>Visi dan Misi</strong>
            <ol type="disc">
                <li><strong>Visi</strong></li>
                <p>lorem ipsum sit amet dolor....</p>
                <li><strong>Misi</strong></li>
                <p>lorem ipsum sit amet dolor dst....</p>
            </ol>
        </li>
        <br>
        <li>
            <strong>Sumpah/Janji Anggota BPD</strong>
            <p>"Demi Allah/Tuhan, saya bersumpah/berjanji, bahwa saya akan memenuhi kewajiban saya selaku anggota Badan Permusyawaratan Desa dengan sebaik-baiknya, sejujur-jujurnya, dan seadil-adilnya; 
            Bahwa saya akan selalu taat dalam mengamalkan dan mempertahankan Pancasila sebagai dasar negara, dan bahwa saya akan menegakkan kehidupan demokrasi dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 serta melaksanakan segala Peraturan Perundang-undangan, dengan selurus-lurusnya yang berlaku bagi Desa, Daerah, dan Negara Kesatuan Republik Indonesia".</p>
        </li>
        <br>
        <li><strong>Daftar Pegawai</strong></li>
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
        <li>
            <strong>Peraturan Daerah Kabupaten Paser Nomor 3 Tahun 2020 Tentang Badan Permusyawaratan Desa</strong>
            <ol type="disc">
                <li><strong>Kewajiban Anggota BPD (Pasal 56)</strong></li>
                <ol type="a">
                    <li>Memegang teguh dan mengamalkan Pancasila, melaksanakan UUD Negara Republik Indonesia Tahun 1945, serta mempertahankan dan memelihara keutuhan NKRI dan Bhinneka Tunggal Ika;</li>
                    <li>Melaksanakan kehidupan demokrasi yang berkeadilan gender dalam penyelenggaraan Pemerintahan desa;</li>
                    <li>Mendahulukan kepentingan umum di atas kepentingan pribadi, kelompok, dan / atau golongan;</li>
                    <li>Menghormati nilai sosial budaya dan adat istiadat masyarakat desa;</li>
                    <li>Menjaga norma dan etika dalam hubungan kerja dengan lembaga Pemerintah Desa dan lembaga desa lainnya;</li>
                    <li>Mengawal aspirasi masyarakat, menjaga kewibawaan dan kestabilan penyelenggaraan Pemerintahan Desa serta mempelopori penyelenggaraan Pemerintahan Desa berdasarkan tata kelola pemerintahan yang baik.</li>
                </ol><br>
                <li><strong>Kewenangan BPD (Pasal 59)</strong></li>
                <ol type="a">
                    <li>Mengadakan pertemuan dengan masyarakat untuk mendapatkan aspirasi;</li>
                    <li>Menyampaikan aspirasi masyarakat kepada Pemerintah Desa secara lisan dan tertulis;</li>
                    <li>Mengajukan rancangan Peraturan Desa yang menjadi kewenangannya;</li>
                    <li>Melaksanakan monitoring dan evaluasi kinerja Kepala Desa;</li>
                    <li>Meminta keterangan tentang penyelenggaraan Pemerintahan Desa kepada Pemerintah Desa;</li>
                    <li>Menyatakan pendapat atas penyelenggaraan Pemerintahan Desa, pelaksanaan pembangunan desa, pembinaan kemasyarakatan desa, dan pemberdayaan masyarakat desa;</li>
                    <li>Mengawal aspirasi masyarakat, menjaga kewibawaan dan kestabilan penyelenggaraan Pemerintahan Desa serta mempelopori penyelenggaraan Pemerintahan Desa berdasarkan tata kelola pemerintahan yang baik;</li>
                    <li>Menyusun peraturan tata tertib BPD;</li>
                    <li>Menyampaikan laporan hasil pengawasan yang bersifat insidentil kepada Bupati melalui Camat;</li>
                    <li>Menyusun dan menyampaikan usulan rencana biaya operasional BPD secara tertulis kepada Kepala Desa untuk dialokasikan dalam Rancangan Anggaran dan Pendapatan Belanja Desa;</li>
                    <li>Mengelola biaya operasional BPD;</li>
                    <li>Mengusulkan pembentukan Forum Komunikasi Antar Kelembagaan Desa kepada Kepala Desa;</li>
                    <li>Melakukan kunjungan kepada masyarakat dalam rangka monitoring dan evaluasi penyelenggaraan Pemerintahan Desa.</li>
                </ol>
            </ol>
        </li>
        <br>
        <li>
            <strong>Peraturan Daerah Kabupaten Paser Nomor 3 Tahun 2020 Tentang Badan Permusyawaratan Desa</strong>
            <ol type="disc">
                <li><strong>Fungsi BPD (Pasal 33)</strong></li>
                <ol type="a">
                    <li>Membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa;</li>
                    <li>Menampung dan menyalurkan aspirasi masyarakat desa;</li>
                    <li>Melakukan pengawasan kinerja Kepala Desa.</li>
                </ol><br>
                <li><strong>Tugas BPD (Pasal 34)</strong></li>
                <ol type="a">
                    <li>Menggali aspirasi masyarakat;</li>
                    <li>Menampung aspirasi masyarakat;</li>
                    <li>Mengelola aspirasi masyarakat;</li>
                    <li>Menyalurkan aspirasi masyarakat;</li>
                    <li>Menyelenggarakan musyawarah BPD;</li>
                    <li>Menyelenggarakan musyawarah desa;</li>
                    <li>Membentuk panitia pemilihan Kepala Desa;</li>
                    <li>Menyelenggarakan musyawarah desa khusus untuk pemilihan Kepala Desa antarwaktu;</li>
                    <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa;</li>
                    <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa;</li>
                    <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa;</li>
                    <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga desa lainnya;</li>
                    <li>Melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
                </ol><br>
                <li><strong>Hak BPD (Pasal 48)</strong></li>
                <ol type="a">
                    <li>Mengawasi dan meminta keterangan tentang penyelenggaraan Pemerintahan Desa kepada Pemerintah Desa;</li>
                    <li>Menyatakan pendapat atas penyelenggaraan Pemerintahan Desa, pelaksanaan pembangunan Desa, pembinaan kemasyarakatan desa, dan pemberdayaan masyarakat desa;</li>
                    <li>Mendapatkan biaya operasional pelaksanaan tugas dan fungsinya dari Anggaran Pendapatan dan Belanja Desa.</li>
                </ol><br>
                <li><strong>Pengawasan (Pasal 49)</strong></li>
                <ol type="a">
                    <li>BPD melakukan pengawasan melalui monitoring dan evaluasi pelaksanaan tugas Kepala Desa.</li>
                    <li>Monitoring dan evaluasi sebagaimana dimaksud pada ayat(1) terhadap perencanaan, pelaksanaan dan pelaporan penyelenggaraan Pemerintah Desa.</li>
                </ol>
            </ol>
        </li>
    </ol>
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

@section('js')
    <!-- all js here -->
    <script src="{{ asset('bt/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('bt/js/owl.carousel.min.js') }}"></script>
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
                        items: 1
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 5
                    }
                }
            });
        }
        slider_carouselInit();

    </script>
@endsection