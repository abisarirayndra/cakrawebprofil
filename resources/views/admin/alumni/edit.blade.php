@extends('master.konten')

@section('title')
<title>Edit Alumni</title>
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
                              <h1 class="h4 text-gray-900 mb-4">Edit Alumni</h1>
                          </div>
                          <form method="POST" action="{{route('admin.updatealumni',[$alumni->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$alumni->nama}}">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <img src="{{asset('/img/alumni/'.$alumni->foto)}}" width="200" alt="">
                                </div>
                                <div class="row">
                                    <label for="soal">Foto (Ukuran 500 x 500 px)</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="akademi">Akademi</label>
                                <input type="text" class="form-control" name="akademi" value="{{$alumni->akademi}}">
                            </div>
                            <div class="form-group">
                                <label for="akademi">Asal Sekolah</label>
                                <input type="text" class="form-control" name="asal_sekolah" value="{{$alumni->asal_sekolah}}">
                            </div>
                            <div class="form-group">
                                <label for="ig">Instagram</label>
                                <input type="text" class="form-control" name="ig" value="{{$alumni->ig}}">
                            </div>
                            <div class="form-group">
                                <label for="fb">Facebook</label>
                                <input type="text" class="form-control" name="fb" value="{{$alumni->fb}}">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" name="twitter" value="{{$alumni->twitter}}">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                  <textarea name="testi" class="ckeditor" id="ckeditor" cols="50" rows="10">{{$alumni->testi}}</textarea>
                                  <span><div id="notif"></div></span>
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

@section('js')
<script type="text/javascript" src="{{asset('back/vendor/ckeditor/ckeditor.js')}}"></script>


@endsection



