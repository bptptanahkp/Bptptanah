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

<body>
<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">BPTP Jatim</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/">Home</a></li>
          <li><a href="#about">Lihat Proses</a></li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
</header>

@include('users.includes.intro_carousel')
  <!-- #intro -->

  <main id="main">
    <div class="text-center">
        <table class="table table-responsive">
        <tr>
                <td>{{$data_lihatpesan->nama}}</td>
                <td>{{$data_lihatpesan->pemesanan_id}}</td>
                <td>{{$data_lihatpesan->status}}</td>
                <td>{{$data_lihatpesan->proses}}</td>
        </tr>
        <tr></tr>
        </table>
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
