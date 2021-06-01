@extends('master.master')

@section('content')
        <section class="page-section bg-dark" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-warning">Dokumentasi Kegiatan</h2>
                    <h3 class="section-subheading text-white">Galeri kegiatan yang sudah dilalui</h3>
                </div>
                <div class="row">
                    @foreach ($dok as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">{{$item->keterangan}}</div>
                                </div>
                                <img class="img-fluid" src="{{asset('img/dok/'. $item->foto)}}" alt="" />
                            </a>
                            {{-- <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
        </section>
        
   
@endsection