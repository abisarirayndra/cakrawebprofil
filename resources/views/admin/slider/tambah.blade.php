@extends('master.konten')

@section('title')
<title>Tambah Gambar</title>
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
                              <h1 class="h4 text-gray-900 mb-4">Tambah Gambar</h1>
                          </div>
                          <form method="POST" action="{{route('admin.upslider')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="soal">Gambar/Foto (Ukuran 1100 x 500 px)</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Tambah
                              </button>
                            </div>
                          </form>
                          <div id="uploaded_image"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
              <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel">Crop &amp; Upload Gambar</h4>
                 <button type="button" class="close" data-dismiss="modal" >
                     <span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span>
                 </button>
              </div>
              <div class="modal-body">
                 <div class="row">
                    <div class="col-md-12 text-center">
                       <div id="image_demo"></div>
                    </div>
                 </div>
              </div>
              <div class="modal-footer">
                 <button class="btn btn-success crop_image">Crop &amp; Upload</button>
              </div>
           </div>
        </div>
  </div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
<script>  
    $(document).ready(function(){
      $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:250,
          height:200,
          type:'square' //circle
        },
        boundary:{
          width:1200,
          height:600
        }
      });
     
      $('#upload_image').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event) {
          $image_crop.croppie('bind', {
            url: event.target.result
          }).then(function(){
            console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);
        $('#uploadimageModal').modal('show');
      });
     
      $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport'
        }).then(function(response){
          $.ajax({
            url:"upload.php",
            type: "POST",
            data:{"image": response},
            success:function(data)
            {
              $('#uploadimageModal').modal('hide');
              $('#uploaded_image').html(data);
            }
          });
        })
      });
    });  
    </script>    
@endsection
