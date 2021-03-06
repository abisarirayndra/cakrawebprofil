<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')

    <!-- Custom fonts for this template-->
    <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Cakra Web Profile</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.slider')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Slider Gambar</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.deskripsi')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Deskripsi Cakra</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dokumentasi')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dokumentasi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.alumni')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Alumni</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.info')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Info</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
@yield('content')
@include('sweetalert::alert')

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('back/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('back/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('back/js/sb-admin-2.min.js')}}"></script>

@yield('js')

</body>


</html>