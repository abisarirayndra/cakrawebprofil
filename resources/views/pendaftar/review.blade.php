<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    <title>Bukti Pendaftaran</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link media="all" type="text/css" rel="stylesheet" href="{{ ltrim(public_path('css/bootstrap.min.css'), '/') }}">

    </head>

<body>
    <div class="container">
    
            <center>
                <img src="{!!$logo!!}" width="80" alt="">
                <h5>Cakra Krisna Manggala</h5>
                <h6 class="mb-5">Data Pendaftar Cakra Krisna Manggala</h6>
            </center>
    
                        <div class="row">
                            <center>
                                <img src="{!!$foto!!}" width="100" alt="">
                            </center>
                        </div>
                        <div class="row mt-4">
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
                        </div>
                        <div class="mt-5">
                            <h6><i class="fas fa-hashtag text-warning"></i> Tahapan Pendaftaran</h6>
                            <ul>
                                <li>Datang ke lokasi markas yang dipilih dengan membawa bukti pendaftaran yang sudah dicetak</li>
                                <li>Melakukan proses administrasi selanjutnya di markas</li>
                            </ul>
                        </div>
                        
        
    </div>
    
</body>

</html>