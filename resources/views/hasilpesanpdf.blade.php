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

body{

}

.judul{
    text-align:center;
}
.datauser{
}
.tab{
    padding-right:40px;
}

}

</style>
<body>
            <h6 class="judul">Laboratorium Tanah</h6>
            <h6 class="judul">Balai Pengkajian Teknologi Pertanian Jawa Timur</h6>
            <h6 class="judul">Permintaan Pelanggan</h6>
                <h6 class="datauser">Nomor SPA <span class="tab">: {{$pesan->pemesanan_id}}</span></h6>
                <h6 class="datauser">Nama <span class="tab">: {{$pesan->pemesananuser->nama}}</span></h6>
                <h6 class="datauser">Instansi/Perusahaan <span class="tab">: {{$pesan->pemesananuser->instansi}}</span></h6>
                <h6 class="datauser">Alamat <span class="tab">: {{$pesan->pemesananuser->alamat}}</span></h6>
                <h6 class="datauser">Nomer Telepon <span class="tab">: {{$pesan->pemesananuser->ntelp}}</span></h6>
                <h6 class="datauser">Contoh yang dianalisis <span class="tab">: {{$pesan->pemesananuser->contohygdianalisis}}</span></h6>
                <h6 class="datauser">Unsur yang dianalisis <span class="tab">: {{$pesan->pemesananuser->unsurygdianalisis}}</span></h6>
                <h6 class="datauser">Jumlah Contoh <span class="tab">: {{$pesan->pemesananuser->jml_contoh}}</span></h6>
                <h6 class="datauser">Bentuk <span class="tab">: {{$pesan->pemesananuser->bentuk}}</span></h6>
                <h6 class="datauser">Asal Contoh <span class="tab">: {{$pesan->pemesananuser->asal_contoh}}</span></h6>
                <h6 class="datauser">Merk <span class="tab">: {{$pesan->pemesananuser->merk}}</span></h6>
                <h6 class="datauser">Tanggal pesan <span class="tab">: {{$pesan->pemesananuser->created_at}}</span></h6>
                <h6 class="datauser">Tanggal diterima <span class="tab">:</span></h6>
                <h6 class="datauser">Total Bayar <span class="tab">: Rp. {{$pesan->totalHarga}},-</span></h6>

        <div class="col-sm-8">
                <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Unsur</th>
                                <th>Tarif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>jajal</td>
                                <td>80000</td>
                            </tr>
                        </tbody>
                </table>
                
		
        </div>

  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('js/halamanuser.js')}}"></script>

  <!-- Script Pesan -->
  <script src="{{asset('lib/pesan/pesan_1.js')}}"></script>


</body>
</html>