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
                    <div class="col-xl-4 pl-3 pr-3">
                        <center>
                            <div class="card card-artikel" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('img/dok/'. $item->foto)}}" alt="Card image cap">
                                <div class="card-body">
                                <h6>[ {{\Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y')}} ]</h6>
                                  <h5 class="card-title ">{{$item->keterangan}}</h5>
                                </div>
                            </div>
                        </center>

                    </div>
                    @endforeach
                </div>
                <center class="mt-4">
                    {{ $dok->links() }}
                </center>
                </div>
        </section>


@endsection
