<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Petunjuk Pendaftaran</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <style>
        body{
            background-image: url('/back/img/petunjuk.JPG');
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>



<body class="">
    @include('sweetalert::alert')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-8 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="text-right pt-3 pr-3">
                            <a href="{{route('welcome')}}" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="text-center mt-4">
                            <img src="{{asset('assets/img/favicon.ico')}}" width="50" alt="">

                        </div>
                        <div class="text-center mt-4 mb-4">
                            <h4 class="text-dark"><i class="fas fa-hashtag text-warning"></i> Petunjuk Pendaftaran</h4>
                        </div>
                        <ul>
                            <li>Registrasi akun email dan password pada sistem</li>
                            <li>Login dengan email dan password yang sudah diregistrasi</li>
                            <li>Setelah berhasil login ke sistem, isi formulir dengan data yang sebenarnya</li>
                            <li>Cetak formulir yang sudah diisi dengan mendownload file formulir pada sistem</li>
                            <li>Setalah download file, print file dengan kertas A4 sebagai bukti pendaftaran</li>
                            <li>Datang ke markas Cakra Krisna Manggala yang dituju dengan membawa bukti pendaftaran</li>
                            <li>Melakukan tahap administrasi selanjutnya di markas Cakra Krisna Manggala</li>
                        </ul>
                        <div class="text-center mb-4 mt-4">
                            <a href="{{route('register')}}" class="btn btn-sm btn-warning">Registrasi Email</a>
                            <hr>
                            <h6>Sudah Pernah Mendaftar ?</h6>
                            <a href="{{ route('masuk') }}" class="btn btn-sm btn-success">Ya, Login</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('back/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('back/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('back/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
