@extends('master.masterdark')

@section('content')
        <section class="page-section mt-5" id="portfolio">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-heading text-uppercase text-dark">Informasi</h2>
                </div>
                @foreach ($artikel as $item)
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6 mb-4">
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
                    </div>
                </div>
                @endforeach
            </div>
        </section>


@endsection
