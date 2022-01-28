<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Pusat bimbingan belajar persiapan masuk TNI/Polri dan Kedinasan" />
        <meta name="author" content="LKP Cakra Krisna Manggala" />
        <title>Cakra Krisna Manggala - Pusat Bimbingan Belajar Persiapan Masuk TNI Polri dan Kedinasan</title>
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="{{route('welcome')}}"><h6>Cakra Krisna Manggala</h6></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('welcome')}}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('dokumentasi')}}">Dokumentasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('alumni')}}">Alumni</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('info')}}">Info</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://elearning.cakrakrisnamanggala.com/petunjuk-pendaftaran">Pendaftaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('kontak')}}">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        @include('sweetalert::alert')
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-left">Copyright © Cakra Krisna Manggala {{\Carbon\Carbon::now()->isoFormat('Y')}}</div>
                <div class="col-lg-6 text-lg-right">
                    <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/cakrakrisnamanggala?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/cakrakrisna.manggala.7" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://vt.tiktok.com/ZSJuy6HjK/" target="_blank"><i class="fab fa-tiktok"></i></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="" title="cakrakrisnamanggala@gmail.com"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="{{asset('assets/mail/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('assets/mail/contact_me.js')}}"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>
    @yield('js')
</body>
</html>
