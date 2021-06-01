@extends('master.masterdark')

@section('content')
        <section class="page-section mt-3" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('welcome')}}">Beranda</a></li>
                          <li class="breadcrumb-item"><a href="{{route('info')}}">Info</a></li>
                          <li class="breadcrumb-item active" aria-current="page">{{$artikel->judul}}</li>
                        </ol>
                      </nav>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h3>{{$artikel->judul}}</h3>
                </div>
                <div class="text-center">
                    <img src="{{asset('img/info/'. $artikel->foto)}}" width="800" alt="">
                </div>
                <div class="text-justify mt-5">
                    {!!$artikel->artikel!!}
                </div>
                <div class="row">
                    <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                    <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> {{\Carbon\Carbon::parse($artikel->created_at)->isoFormat('dddd, D MMMM Y')}}</div>
                </div>
            </div>
        </section>
        
   
@endsection