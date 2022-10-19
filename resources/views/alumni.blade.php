@extends('master.master')

@section('content')
        <section class="page-section bg-dark" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase text-warning">Alumni - Alumni Berprestasi</h3>
                    <h3 class="section-subheading text-white">Lembaga terpercaya, terbukti dengan lulusan yang berprestasi</h3>
                </div>
                <div class="row">
                    @foreach ($alumni as $item)
                    <div class="col-xl-4 pl-3 pr-3 pt-3 pb-3">
                        <center>
                            <div class="card card-artikel" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('img/alumni/'. $item->foto)}}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title ">{{$item->nama}}</h5>
                                  <h6>{{ $item->asal_sekolah }}</h6>
                                  <p class="text-dark">{{$item->akademi}}</p>
                                </div>
                            </div>
                        </center>

                    </div>
                    @endforeach
                </div>
                <center class="mt-4">
                    {{ $alumni->links() }}
                </center>

            </div>
        </section>


@endsection
