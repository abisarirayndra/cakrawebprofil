@extends('master.master')

@section('content')
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#demo">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://cat.cakrakrisnamanggala.com/public/login">CAT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">E-Learning</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('kontak')}}">Hubungi Kami</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="head">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
              
                <!-- The slideshow -->
                {{-- image 1100x500 --}}
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/001.jpg')}}" alt="Los Angeles" width="100%" height="100%">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/001.jpg')}}" alt="Chicago" width="100%" height="100%">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/001.jpg')}}" alt="New York" width="100%" height="100%">
                  </div>
                </div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              
              </div>
        </header>
        {{-- Profil --}}
        <section class="page-section" id="profil">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4" style="border-right: solid 5px var(--primary);">
                        <div class="text-center"><img src="{{asset('assets/img/logos/krisna.png')}}" alt="Krisna" width="200" height="200"></div>
                    </div>
                    <div class="col-xl-8">
                        <p class="pt-2 pl-4" style="font-size: 16pt"> Efektif dan Atraktif adalah metode pembelajaran di Cakra Krisna Manggala.
                            Dengan metode asrama selama 2 bulan full kegiatan akan secara efektif untuk pembelajaran dan pelatihan anak-anak untuk persiapan masuk TNI-Polri dan Sekolah Kedinasan.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Program -->
        <section class="page-section bg-dark" id="program">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-white">Program Pelatihan</h2>
                    <h3 class="section-subheading text-white">Didukung dengan pendidik Profesional dibidangnya</h3>
                </div>
                <div class="row text-center">
                    <div class="col-xl-6">
                        <img src="{{asset('assets/img/logos/3.png')}}" alt="" width="500">
                    </div>
                    <div class="col-xl-6">
                        <div class="row text-center">
                            <div class="col-xl-4">
                                <img src="{{asset('assets/img/logos/asrama.png')}}" alt="" width="200" height="200">
                            </div>
                            <div class="col-xl-4">
                                <img src="{{asset('assets/img/logos/akademik.png')}}" alt="" width="200" height="200">
                            </div>
                            <div class="col-xl-4">
                                <img src="{{asset('assets/img/logos/kesehatan.png')}}" alt="" width="200" height="200">
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-xl-4">
                                <img src="{{asset('assets/img/logos/jasmani.png')}}" alt="" width="200" height="200">
                            </div>
                            <div class="col-xl-4">
                                <img src="{{asset('assets/img/logos/psikologi.png')}}" alt="" width="200" height="200">
                            </div>
                            <div class="col-xl-4">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Layanan Unggulan</h2>
                    <h3 class="section-subheading text-muted">Pelayanan yang terbaik untuk peserta didik</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">CAT</h4>
                        <p class="text-muted">Cakra Assesment Test (CAT) berdasarkan standar penilaian yang akurat. Program ini bersifat online dan bisa diakses kapanpun dan dimanampun.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-running fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Jasmani</h4>
                        <p class="text-muted">Aplikasi pemantau jasmani kesamaptaan. Aplikasi yang membantu para peserta didik agar bisa mengukur kemampuan jasmani.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-brain fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Mental</h4>
                        <p class="text-muted">Program pendampingan psikologis. Aplikasi asisten yang dapat diakses peserta didik untuk mendapatkan pendampingan psikologis dari Pendidik yang profesional.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Learning</h4>
                        <p class="text-muted">Aplikasi pendukung pembelajaran yang memudahkan proses belajar mengajar. Peserta didik bebas mengakases materi pembelajaran kapanpun dan dimanapun.</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Paket --}}
        <section class="page-section bg-dark" id="paket">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-heading text-uppercase" style="color: var(--warning)">Paket Pembelajaran</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5>Pratama</h5>
                            </div>
                            <div class="card-body">
                                <p>Layanan</p>
                                <ul>
                                    <li>Pembelajaran 1 Bulan</li>
                                </ul>
                                <div class="text-center mt-5">
                                    <button class="btn btn-warning" >Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5>Madya</h5>
                            </div>
                            <div class="card-body">
                                <p>Layanan</p>
                                <ul>
                                    <li>Pembelajaran 6 Bulan</li>
                                </ul>
                                <div class="text-center mt-5">
                                    <button class="btn btn-warning" >Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5>Pratama</h5>
                            </div>
                            <div class="card-body">
                                <p>Layanan</p>
                                <ul>
                                    <li>Pembelajaran 1 Tahun</li>
                                </ul>
                                <div class="text-center mt-5">
                                    <button class="btn btn-warning" >Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Dokumentasi Kegiatan</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                                <img class="img-fluid" src="{{asset('assets/img/002.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                                <img class="img-fluid" src="{{asset('assets/img/003.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                                <img class="img-fluid" src="{{asset('assets/img/004.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                                <img class="img-fluid" src="{{asset('assets/img/005.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                                <img class="img-fluid" src="{{asset('assets/img/006.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                                <img class="img-fluid" src="{{asset('assets/img/007.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Alumni - Alumni Berprestasi</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/1.jpg')}}" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/2.jpg')}}" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/3.jpg')}}" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 my-2">
                        <a href="#!"><img class="img-fluid d-block mx-auto" title="TNI AU" src="{{asset('assets/img/logos/au.png')}}" width="70" alt="" /></a>
                    </div>
                    <div class="col-md-2 col-sm-6 my-2">
                        <a href="#!"><img class="img-fluid d-block mx-auto" title="TNI AL" src="{{asset('assets/img/logos/al.png')}}" width="70" alt="" /></a>
                    </div>
                    <div class="col-md-2 col-sm-6 my-2">
                        <a href="#!"><img class="img-fluid d-block mx-auto" title="TNI AD" src="{{asset('assets/img/logos/ad.png')}}" width="70" alt="" /></a>
                    </div>
                    <div class="col-md-2 col-sm-6 my-2">
                        <a href="#!"><img class="img-fluid d-block mx-auto" title="AKPOL" src="{{asset('assets/img/logos/akpol.png')}}" width="70" alt="" /></a>
                    </div>
                    <div class="col-md-2 col-sm-6 my-2">
                        <a href="#!"><img class="img-fluid d-block mx-auto" title="AKMIL" src="{{asset('assets/img/logos/akmil.png')}}" width="70" alt="" /></a>
                    </div>
                    <div class="col-md-2 col-sm-6 my-2">
                        <a href="#!"><img class="img-fluid d-block mx-auto" title="Polisi" src="{{asset('assets/img/logos/polisi.png')}}" width="70" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Markas Pendidikan</h2>
                    <h3 class="section-subheading text-warning">Sekarang Lebih Dekat Dengan Anda</h3>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="text-center">
                            <h5 class="text-white mb-4">Markas Genteng</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.4598943172427!2d114.143994650333!3d-8.35633718648724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15563c88e13e5%3A0xcaca81fb9bb7f50e!2sCakra%20Krisna%20Manggala!5e0!3m2!1sen!2sid!4v1618213528785!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h6 class="text-warning mt-4 mb-4">Jl. KH. Wahid Hasyim, Dusun Kopen, Genteng Kulon, Kec. Genteng, Kabupaten Banyuwangi, Jawa Timur 68465</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="text-center">
                            <h5 class="text-white mb-4">Markas Banyuwangi</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.721870971966!2d114.34270345033161!3d-8.230698784878737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15b8859685e75%3A0x9371898cde674edc!2sCakra%20Krisna%20Manggala!5e0!3m2!1sen!2sid!4v1618213725342!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h6 class="text-warning mt-4 mb-4">Kebalenan, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68417</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="text-center">
                            <h5 class="text-white mb-4">Markas Jember</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.5235852409673!2d113.7094909503308!3d-8.149883683857656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695e3fc1b672f%3A0x2e6a0c860f943b8b!2sCakra%20Krisna%20Manggala!5e0!3m2!1sen!2sid!4v1618213994693!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h6 class="text-warning mt-4 mb-4">Jl. DR. Soebandi No.99, Cangkring, Patrang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68118</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
   
@endsection
