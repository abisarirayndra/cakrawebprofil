@extends('master.konten')

@section('title')
<title>Tambah Info</title>
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
                              <h1 class="h4 text-gray-900 mb-4">Tambah Info</h1>
                          </div>
                          <form method="POST" action="{{route('admin.upinfo')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                            <div class="form-group">
                              <label for="soal">Foto (Ukuran 1100 x 500 px)</label>
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                            <div class="form-group">
                                <label for="artikel">Artikel</label>
                                <textarea name="artikel" class="ckeditor" id="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Tambah
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

@section('js')
<script type="text/javascript" src="{{asset('back/vendor/ckeditor/ckeditor.js')}}"></script>

   
@endsection



