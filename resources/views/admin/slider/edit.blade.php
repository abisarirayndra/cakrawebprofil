@extends('master.konten')

@section('title')
<title>Edit Slider Gambar</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"/>

@endsection

@section('content')
<body class="bg-gradient-primary">

  <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Edit Slider Gambar</h1>
                          </div>
                          <form method="POST" action="{{route('admin.updateslider', [$slider->id])}}" enctype="multipart/form-data">
                            @csrf
                            <img src="{{asset('/img/slider/'. $slider->gambar)}}" alt="" width="500">
                            <div class="form-group mt-5">
                              <label for="soal">Ubah Gambar/Foto (Ukuran 1100 x 500 px)</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Update
                              </button>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

