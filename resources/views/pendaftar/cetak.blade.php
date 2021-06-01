@extends('master.pendaftar')

@section('title')
<title>Profil Pendaftar</title>

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Formulir Pendaftaran</h1>
    <p class="mb-4">Diisi dengan data yang benar-benar sesuai dengan identitas/KTP.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5><i class="fas fa-hashtag text-warning"></i> Tahapan Pendaftaran</h5>
            <ul>
                <li>Mencetak formulir dibawah sebagai bukti pendaftaran</li>
                <li>Datang ke lokasi markas yang dipilih dengan membawa bukti pendaftaran yang sudah dicetak</li>
                <li>Melakukan proses administrasi selanjutnya di markas</li>
            </ul>
            <div class="p-3 mt-3">
                <h5 class="mb-4">Data Pendaftar Cakra Krisna Manggala</h5>
                <div class="row">
                    <div class="col-xl-4 col-sm-4 text-center">
                        <img src="{{asset('/img/pendaftar/'. $data->foto)}}" width="150" alt="">
                    </div>
                    <div class="col-xl-8 col-sm-8">
                        <div class="row">
                            <table>
                                <tr>
                                    <td><b>Nama</b></td>
                                    <td class="pl-4">{{$user}}</td>
                                </tr>
                                <tr>
                                    <td><b>Tempat, Tanggal Lahir</b></td>
                                    <td class="pl-4">{{$data->tempat_lahir}}, {{\Carbon\Carbon::parse($data->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                                </tr>
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td class="pl-4">{{$data->alamat}}</td>
                                </tr>
                                <tr>
                                    <td><b>Asal Sekolah</b></td>
                                    <td class="pl-4">{{$data->sekolah}}</td>
                                </tr>
                                <tr>
                                    <td><b>No. Telpon/WhatsApp</b></td>
                                    <td class="pl-4">{{$data->wa}}</td>
                                </tr>
                                <tr>
                                    <td><b>Nama Wali</b></td>
                                    <td class="pl-4">{{$data->wali}}</td>
                                </tr>
                                <tr>
                                    <td><b>Markas Yang Dipilih</b></td>
                                    <td class="pl-4">{{$data->markas}}</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Daftar</b></td>
                                    <td class="pl-4">{{\Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y HH:mm')}}</td>
                                </tr>
                            </table>
                                <a href="{{route('pendaftar.cetak_pdf', [$data->id])}}" target="_blank" class="btn btn-success mt-4"><i class="fas fa-cloud-download-alt"></i> Unduh PDF</a>
                                <a href="{{route('pendaftar.edit', [$data->id])}}" class="btn btn-warning mt-4 ml-3"><i class="fas fa-edit"></i> Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@endsection

@section('js')
<script type="text/javascript" src="{{asset('back/vendor/ckeditor/ckeditor.js')}}"></script>

   
@endsection



