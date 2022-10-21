@extends('master.master')

@section('style')
<style>
    .card-artikel {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
  }

  /* On mouse-over, add a deeper shadow */
  .card-artikel:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  .portfolio-item {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
  }

  /* On mouse-over, add a deeper shadow */
  .portfolio-item:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
</style>
@endsection

@section('content')

        <!-- Masthead-->
        <header class="head" style="margin-bottom: -40px">
              <div class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('assets/img/logos/bg.webp') }}'); height:400px; background-size: cover;" >
                <div class="container-fluid pt-3">
                        <img src="{{ asset('assets/img/logos/cakra-logo.webp') }}" width="100" alt="Cakra">
                        <div class="text-warning mt-2">
                            <h4>Bimbingan Belajar</h4>
                            <h4>Cakra Krisna Manggala</h4>
                        </div>
                        <div class="text-white">
                            <h5>Bimbel Persiapan Masuk TNI/POLRI dan Sekolah Kedinasan</h5>
                        </div>
                        <a href="https://elearning.cakrakrisnamanggala.com/petunjuk-pendaftaran" class="btn btn-warning text-dark mt-3" autofocus target="_blank" rel="noopener noreferrer"><b>Daftar Sekarang !</b></a>
                        <a href="#contact" class="btn btn-success mt-3 ml-2"><i class="fab fa-whatsapp"></i> Hubungi Kami</a>
                </div>
              </div>
        </header>
        <section class="page-section bg-dark" id="services">
            <div class="container-fluid">
                {{-- <div class="text-center">
                    <h3 class="section-heading text-uppercase text-white">Layanan Unggulan</h3>
                    <h3 class="section-subheading text-muted"></h3>
                </div> --}}
                <div class="row text-center" style="margin-top: -50px; margin-bottom: -50px">
                    <div class="col-xl-4" style="border-right: 5px solid; border-color:rgb(255, 217, 0)">
                        {{-- <img src="{{ asset('assets/img/logos/cakra-logo.webp') }}" width="200" alt="Cakra"> --}}
                        <h6 class="text-white text-left">
                            <div class="text-warning d-inline">CAKRA KRISNA MANGGALA</div> yang artinya Pemimipin yang Kuat, Cerdas dan Bijaksana dikandung maksud bagi yang mengikuti Lembaga Kursus dan Pelatihan (LKP) <div class="text-warning d-inline">CAKRA KRISNA MANGGALA</div> walaupun pintar dan kuat tetapi tetap memiliki sikap dan budipekerti santun, rendah hati sehingga bisa memiliki karakter kepribadian yang baik dan bijaksana.

                        </h6>
                    </div>
                    <div class="col-xl-5" style="border-right: 5px solid; border-color:rgb(255, 217, 0)">
                        <h6 class="text-warning text-left">Dokumen Resmi</h6>
                        <h6 class="text-white text-left">NPSN K9997403 <br>
                            Akta Notaris No 1 Tanggal 03 Juni 2020 <br>
                            SK Kemenkumham No AHU-0005302.AH.01.07 Tahun 2020 <br>
                            Ijin Operasional LKP Satuan Non Formal No. 421.9/3114/429.101/2021 <br>
                        </h6>
                    </div>
                    <div class="col-xl-3">
                        <div class="h6 text-warning text-left mb-4">Media Sosial</div>
                        <div class="text-left">
                            <a class="btn btn-primary" style="background-color: #ac2bac;" href="https://instagram.com/cakrakrisnamanggala?utm_medium=copy_link" role="button"
                            ><i class="fab fa-instagram"></i
                            ></a>
                            <a class="btn btn-primary" style="background-color: #ed302f;" href="https://www.youtube.com/channel/UC2qFrrXJs4zMZtQEap6ij9w" role="button"
                            ><i class="fab fa-youtube"></i
                            ></a>
                            <!-- Github -->
                            <a class="btn btn-primary" style="background-color: #333333;" href="https://vt.tiktok.com/ZSJuy6HjK/" role="button"
                            ><i class="fab fa-tiktok"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="portfolio" style="margin-bottom: -50px">
            <div class="container">
                <div class="text-center mb-5">
                    <h3 class="text-uppercase text-dark" style="text-align: left">Informasi Terbaru !</h3>
                </div>

                <div class="row">
                    @foreach ($artikel as $item)
                    <div class="col-xl-4 col-sm-6 pl-3 pr-3">
                        <center>
                            <div class="card card-artikel" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('/img/artikel/'.$item->foto)}}" alt="Card image cap">
                                <div class="card-body">
                                <h6>[ {{\Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y')}} ]</h6>
                                  <h5 class="card-title "><a href="{{route('artikel', [$item->id])}}"><h5 class="text-dark">{{substr($item->judul, 0, 50)}}</h5></a></h5>
                                  <p class="card-text">{!!substr($item->artikel, 0, 50)!!} ...</p>
                                  {{-- <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div> --}}
                                  {{-- <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> {{\Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y')}}</div> --}}
                                  <a href="{{route('artikel', [$item->id])}}" class="btn btn-primary text-dark">Baca</a>

                                </div>
                            </div>
                        </center>

                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-sm-6 col-xs-6 mb-4">
                        <div class="text-center">
                            <a href="{{route('artikel', [$item->id])}}"><img class="img-fluid" src="{{asset('/img/artikel/'.$item->foto)}}" width="250" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6 mb-4">
                        <div class="row">
                            <a href="{{route('artikel', [$item->id])}}"><h5>{{$item->judul}}</h5></a>
                        </div>
                        <div class="row">
                            <p>{!!substr($item->artikel, 0, 200)!!}</p>
                        </div>
                        <div class="row">
                            <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                            <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> {{\Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y')}}</div>
                        </div>
                    </div> --}}
                </div>

            </div>
        </section>

        <!-- Services-->
        <section class="page-section bg-dark" id="services">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase text-white">Layanan Unggulan</h3>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3 text-white">CAT</h4>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3 text-white">E-Learning</h4>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-brain fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3 text-white">Kelas Interaktif</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Program-Program</h3>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{ asset('assets/img/logos/akademik.webp') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Akademik</div>
                                <div class="portfolio-caption-subheading text-muted">Matematika, WK/IPU, B. Inggris, B. Indonesia</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{ asset('assets/img/logos/jasmani.webp') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Jasmani</div>
                                <div class="portfolio-caption-subheading text-muted">Jasmani Kesamaptaan Darat dan Air Lengkap</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{ asset('assets/img/logos/psiko.webp') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Psikologi</div>
                                <div class="portfolio-caption-subheading text-muted">Kecerdasan, Kepribadian, Minat, Kecermatan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        {{-- <center> --}}
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{ asset('assets/img/logos/mcu.webp') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Medical Check-up</div>
                                <div class="portfolio-caption-subheading text-muted">Bekerja sama dengan klinik profesional untuk pemeriksaan kesehatan</div>
                            </div>
                        </div>
                        {{-- </center> --}}

                    </div>
                </div>

            </div>
        </section>
        {{-- Profil --}}
        <section class="page-section" id="profil" style="background-image: url('{{ asset('assets/img/logos/alumni.webp') }}'); background-size: cover; height: 550px;">
            <div class="jumbotron jumbotron-fluid" style="background: transparent; height:400px;" >
              <div class="container pt-3">
                    <center>
                        <div class="text-warning mt-2">
                            <h3 class="mb-3">Para Alumni Cakra Krisna Manggala</h3>
                        </div>
                        <div class="text-white">
                        <h5 class="mb-3">Bergabunglah Dengan Kami, Gapai Mimpimu, Susul Kesuksesan Teman-Temanmu !</h5>
                        </div>
                        <a href="{{ route('alumni') }}" class="btn btn-warning text-dark mt-3"><b>Selengkapnya</b></a>
                    </center>
              </div>
            </div>
      </section>

        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Markas Pendidikan</h3>
                    <h3 class="section-subheading text-warning"></h3>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="text-center">
                            <h5 class="text-white mb-3">Markas Genteng</h5>
                            <center>
                                <a href="https://wa.link/gx3ykf" target="_blank" rel="noopener noreferrer" class="btn btn-success mb-3"><i class="fab fa-whatsapp"></i> Genteng</a>
                            </center>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.487962736502!2d114.15612021416095!3d-8.353563186479464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15570dc5e9019%3A0x1fa9a7b8ac41efee!2sCakra%20Krisna%20Manggala%20-%20Chapter%20Genteng!5e0!3m2!1sen!2sid!4v1641861043819!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h6 class="text-warning mt-4 mb-4">Jl. KH. Imam Bahri, Dusun Krajan, Genteng Wetan, Kec. Genteng, Kabupaten Banyuwangi, Jawa Timur 68465</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="text-center">
                            <h5 class="text-white mb-3">Markas Banyuwangi</h5>
                            <center>
                                <a href="https://wa.link/rf6r7i" target="_blank" rel="noopener noreferrer" class="btn btn-success mb-3"><i class="fab fa-whatsapp"></i> Banyuwangi</a>
                            </center>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.9348089778314!2d114.34611491415934!3d-8.209311084635003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd145158da26ebd%3A0x54265ae2ce109c5c!2sCakra%20Krisna%20Manggala!5e0!3m2!1sen!2sid!4v1641861204238!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h6 class="text-warning mt-4 mb-4">Kebalenan, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68417</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="text-center">
                            <h5 class="text-white mb-3">Markas Jember</h5>
                            <center>
                                <a href="https://wa.link/eeb3xj" target="_blank" rel="noopener noreferrer" class="btn btn-success mb-3"><i class="fab fa-whatsapp"></i> Jember</a>
                            </center>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.5235852409673!2d113.7094909503308!3d-8.149883683857656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695e3fc1b672f%3A0x2e6a0c860f943b8b!2sCakra%20Krisna%20Manggala!5e0!3m2!1sen!2sid!4v1618213994693!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h6 class="text-warning mt-4 mb-4">Jl. DR. Soebandi, Cangkring, Patrang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68118</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
