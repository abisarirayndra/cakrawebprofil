@extends('master.konten')

@section('title')
<title>Edit Dokumentasi</title>
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
                              <h1 class="h4 text-gray-900 mb-4">Edit Foto</h1>
                          </div>
                          <form method="POST" action="{{route('admin.updatedokumentasi', [$dok->id])}}" enctype="multipart/form-data">
                            @csrf
                            <img src="{{asset('/img/dok/'. $dok->foto)}}" width="200" alt="">
                            <div class="form-group">
                              <label for="soal">Foto (Ukuran 500 x 500 px)</label>
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                  <input type="text" class="form-control" onkeyup="cek()" name="keterangan" id="area" value="{{$dok->keterangan}}">
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
<script>
    var target=document.getElementById("area");
    var batas_karakter=50;
    function cek(){
        // jika jumlah karakter yg diketikkan lebih dari atau sama dengan 100
        if(target.value.length >= batas_karakter ){
        //disable textarea
        target.readOnly=true;
        //memberikan warna merah pada text pemberitahuan
        document.getElementById("notif").style.color="red";
        // menampilkan pemberitahuan
        document.getElementById("notif").innerHTML="Maksimal 50 Karakter !";
        }
        //jika tidak
    else{
        //hitung jumlah karakter yg sudah diketikkan
        var jumlah_karakter=target.value.length;
        // untuk mengetahui jumlah karakter yg tersisa, maka batas_karakter dikurangi karakter yg telah diketikkan
        var sisa=batas_karakter-jumlah_karakter;
        // tampilkan pemberitahuan berapa karakter lagi yg tersisa
        document.getElementById("notif").innerHTML=sisa+" Karakter tersisa !";
        }
    }
    </script>

@endsection


