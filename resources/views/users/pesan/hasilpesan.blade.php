<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BPTP Jatim</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="{{asset('css/halamanuser.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/fontawesome-2/css/all.min.css')}}">

  <!-- Style Pesan -->
  <link rel="stylesheet" href="{{asset('lib/pesan/pesan_1.css')}}">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<style>

.tab {position:absolute;left:250px; }

}

</style>
<body>
    <div class="row justify-content-center">
        <div class="col-sm-6"><br>
            <a href="/hasilpesan/{{$pesan->id}}/cetakpesan_pdf" class="btn btn-info btn-sm" target="_blank">Cetak PDF</a>
            <h6 class="text-center">Laboratorium Tanah</h6>
            <h6 class="text-center">Balai Pengkajian Teknologi Pertanian Jawa Timur</h6>
            <h6 class="text-center">Permintaan Pelanggan</h6>
                <h6>Nomor SPA <span class="tab">: {{$pesan->id}}</span></h6>
                <h6>Nama <span class="tab">: {{$pesan->nama}}</span></h6>
                <h6>Instansi/Perusahaan <span class="tab">: {{$pesan->instansi}}</span></h6>
                <h6>Alamat <span class="tab">: {{$pesan->alamat}}</span></h6>
                <h6>Nomer Telepon <span class="tab">: {{$pesan->ntelp}}</span></h6>
                <h6>Contoh yang dianalisis <span class="tab">: {{$pesan->contohygdianalisis}}</span></h6>
                <h6>Unsur yang dianalisis <span class="tab">: {{$pesan->unsurygdianalisis}}</span></h6>
                <h6>Jumlah Contoh <span class="tab">: {{$pesan->jml_contoh}}</span></h6>
                <h6>Bentuk <span class="tab">: {{$pesan->bentuk}}</span></h6>
                <h6>Asal Contoh <span class="tab">: {{$pesan->asal_contoh}}</span></h6>
                <h6>Merk <span class="tab">: {{$pesan->merk}}</span></h6>
                <h6>Tanggal pesan <span class="tab">: {{$pesan->created_at}}</span></h6>
                <h6>Tanggal diterima <span class="tab">:</span></h6>
        </div>

        <div class="col-sm-8">
                <table class="table table-borderless table-responsive-sm">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                
		
        </div>
    </div>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('js/halamanuser.js')}}"></script>

  <!-- Script Pesan -->
  <script src="{{asset('lib/pesan/pesan_1.js')}}"></script>


</body>
</html>
