@extends('master.konten')

@section('title')
<title>Tambah Dokumentasi</title>
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
                              <h1 class="h4 text-gray-900 mb-4">Tambah Foto</h1>
                          </div>
                          <form method="POST" action="{{route('admin.updokumentasi')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="soal">Foto (Ukuran 500 x 500 px)</label>
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                  <input type="text" class="form-control" name="keterangan" id="area" required>
                                  <span><div id="notif"></div></span>
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


