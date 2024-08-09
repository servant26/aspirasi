<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aspirasi Masyarakat</title>
    @yield('css')
    <link rel="icon" href="" type="image/png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Bootstrap -->
    <link href="{{ asset('bt\css\bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bt\js\bootstrap.bundle.min.js') }}"></script>
    <!--=============== REMIXICONS ===============-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container{
            max-width: 1170px;
            margin:auto;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color: #24262b;
            padding: 70px 0;
        }
        .footer-col{
        width: 25%;
        padding: 0 15px;
        }
        .footer-col h4{
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left:0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
        }
        .footer-col ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
            color: #ffffff;
            padding-left: 8px;
        }
        .footer-col .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255,255,255,0.2);
            margin:0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px){
        .footer-col{
            width: 50%;
            margin-bottom: 30px;
        }
        }
        @media(max-width: 574px){
        .footer-col{
            width: 100%;
        }
        }

        .navbar-logo {
            height: 60px; /* Sesuaikan tinggi ini dengan tinggi navbar Anda */
            max-height: 100%;
            width: auto; /* Memastikan rasio aspek gambar tetap */
        }
        
        .navbar-nav .nav-link:hover {
            color: #e91e63; /*Ganti dengan warna yang kamu inginkan */
            transition: color 0.3s ease;
        }

    </style>
</head>

<body>
<!--Awal Navbar-->
<nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid m-2 d-flex align-items-center">
    <div class="dropdown">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images\paser.png') }}" class="navbar-logo">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown mx-3 active"> 
          <a class="nav-link active" href="/" role="button" aria-expanded="false">
            Home
          </a>
        </li>
        <li class="nav-item dropdown mx-3 active"> 
          <a class="nav-link active" href="/profile_bpd" role="button" aria-expanded="false">
            Profile BPD
          </a>
        </li>
        <li class="nav-item dropdown mx-3 active"> 
          <a class="nav-link active" href="/buat_aspirasi" role="button" aria-expanded="false">
            Buat Aspirasi
          </a>
        </li>
        <li class="nav-item dropdown mx-3">
          <a class="nav-link active" href="#lihat_aspirasi" role="button" aria-expanded="false">
            Lihat Aspirasi
          </a>
        </li>
        <li class="nav-item dropdown mx-3">
          <a class="nav-link active" href="faq" role="button" aria-expanded="false">
            FAQ
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir navbar-->

@yield('content')

<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Kontak dan Alamat</h4>
  	 			<ul>
  	 				<li><a href="#">+62 12345678</a></li>
  	 				<li><a href="#">Lolo, Kec. Kuaro, Kabupaten Paser, Kalimantan Timur</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Sosial Media</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/ipeh.kanor.5?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://www.instagram.com/pemdeslolo?igsh=MTcxNGJ4MzZiMHY3dQ==" target="_blank"><i class="fab fa-instagram"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

</body>
</html>
