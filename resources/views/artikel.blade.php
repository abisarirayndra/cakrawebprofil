@extends('master.masterdark')

@section('content')
        <section class="page-section mt-3" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('welcome')}}">Beranda</a></li>
                          <li class="breadcrumb-item"><a href="{{route('info')}}">Info</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                      </nav>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h3>Pembeleajaran yang aktif dan efektif di LKP Cakra Krisna Manggala</h3>
                </div>
                <div class="text-center">
                    <img src="{{asset('img/slider/sliderbaru3.jpg')}}" width="800" alt="">
                </div>
                <div class="text-justify mt-5">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet eget sit amet tellus cras. Arcu felis bibendum ut tristique et egestas quis. Aliquam id diam maecenas ultricies mi eget mauris pharetra et. Massa sapien faucibus et molestie ac feugiat sed lectus. Id diam maecenas ultricies mi eget. Interdum posuere lorem ipsum dolor sit amet. Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Sapien faucibus et molestie ac feugiat sed lectus vestibulum. Mauris ultrices eros in cursus turpis. Duis ut diam quam nulla porttitor massa id neque. Aliquet lectus proin nibh nisl condimentum id venenatis a. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Lectus proin nibh nisl condimentum id. Volutpat lacus laoreet non curabitur gravida arcu ac.

Malesuada proin libero nunc consequat interdum varius sit amet. Viverra ipsum nunc aliquet bibendum enim. Rhoncus urna neque viverra justo. Eros donec ac odio tempor orci dapibus ultrices in iaculis. In aliquam sem fringilla ut morbi tincidunt. Tempus egestas sed sed risus pretium quam. Nunc sed velit dignissim sodales ut eu sem integer. Tellus orci ac auctor augue mauris augue neque gravida. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Condimentum mattis pellentesque id nibh tortor. Vitae justo eget magna fermentum iaculis eu non diam phasellus. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Eget nunc scelerisque viverra mauris in.
                    </p>
                </div>
                <div class="row">
                    <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                    <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 12-4-2021</div>
                </div>
            </div>
        </section>
        
   
@endsection