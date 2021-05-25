@extends('master.master')

@section('content')
        <section class="page-section bg-dark" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-warning">Dokumentasi Kegiatan</h2>
                    <h3 class="section-subheading text-white">Galeri kegiatan yang sudah dilalui</h3>
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
        
   
@endsection