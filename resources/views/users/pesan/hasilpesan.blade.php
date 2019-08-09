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
                <h6>Nomor SPA <span class="tab">: {{$pesan->pemesanan_id}}</span></h6>
                <h6>Nama <span class="tab">: {{$pesan->pemesananuser->nama}}</span></h6>
                <h6>Instansi/Perusahaan <span class="tab">: {{$pesan->pemesananuser->instansi}}</span></h6>
                <h6>Alamat <span class="tab">: {{$pesan->pemesananuser->alamat}}</span></h6>
                <h6>Nomer Telepon <span class="tab">: +62 {{$pesan->pemesananuser->ntelp}}</span></h6>
                <h6>Contoh yang dianalisis <span class="tab">: {{$pesan->pemesananuser->contohygdianalisis}}</span></h6>
                <h6>Unsur yang dianalisis <span class="tab">: {{$pesan->pemesananuser->unsurygdianalisis}}</span></h6>
                <h6>Jumlah Contoh <span class="tab">: {{$pesan->pemesananuser->jml_contoh}}</span></h6>
                <h6>Bentuk <span class="tab">: {{$pesan->pemesananuser->bentuk}}</span></h6>
                <h6>Asal Contoh <span class="tab">: {{$pesan->pemesananuser->asal_contoh}}</span></h6>
                <h6>Merk <span class="tab">: {{$pesan->pemesananuser->merk}}</span></h6>
                <h6>Tanggal pesan <span class="tab">: {{$pesan->pemesananuser->created_at}}</span></h6>
                <h6>Tanggal diterima <span class="tab">:</span></h6>
                <h6 class="datauser">Total Bayar <span class="tab">: Rp. {{number_format($pesan->totalHarga)}},-</span></h6>
        </div>

        <div class="col-sm-8">
                <table class="table table-border table-responsive-sm">
                        <thead>Analisis Kimia Tanah Rutin
                            <tr>
                                <th>No</th>
                                <th>Analisis Kimia Tanah Rutin</th>
                                <th>Pupuk organik/Kompos/cair</th>
                                <th>Pupuk Kimia(ANORGANIK)/ Batuan Mineral</th>
                                <th>Tanaman</th>
                                <th>Pengujian Air</th>
                                <th>Metode</th>
                                <th>Tarif</th>
                            </tr>
                        </thead>
                    <tbody>
                    @php $no=0; @endphp
                        @foreach($permintaan as $datas)
                            @php $no++; @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$datas->id_ankimtan ? $datas->id_ankimtan : '-'}}</td>
                            <td>{{$datas->id_pupukkimia ? $datas->id_pupukkimia : '-'}}</td>
                            <td>{{$datas->id_pupukorganik ? $datas->id_pupukorganik : '-'}}</td>
                            <td>{{$datas->id_tanaman ? $datas->id_tanaman : '-'}}</td>
                            <td>{{$datas->id_pengujianair ? $datas->id_pengujianair : '-'}}</td>
                            <td></td>
                            <td>{{$datas->harga}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- <table class="table table-border table-responsive-sm">
                        <thead>Analisis Kimia Tanah Rutin
                            <tr>
                                <th>No</th>
                                <th>Jenis Uji</th>
                                <th>Harga</th>
                                <th width="1%">Jumlah</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Analisis Kimia Tanah</td>
                            <td>
                                <ul>
                                    @foreach($permintaan->ankimtan as $a)
                                    <li>{{$a->jenis_uji}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{$permintaan->ankimtan->count()}}</td>
                        </tr>
                    </tbody>
                </table> -->
		
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
