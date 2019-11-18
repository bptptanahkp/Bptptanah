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

  <link rel="shortcut icon" href="{{asset('photo/logo.png')}}">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  @include('users.includes.user_header')
  <!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  @include('users.includes.intro_carousel')
  <!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
   <!--  <section id="featured-services">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
      </div>
    </section> --><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Balai Pengkajian Teknologi Pertanian Jawa Timur (BPTP Jatim)</h3>
          <p>BPTP Jawa Timur merupakan gabungan (merger) dari berbagai unit kerja di jajaran Badan Litbang Pertanian yang ada di Jawa Timur (16 unit kerja), yaitu eks Sub Balithorti Malang, Sub Balithorti Tlekung, Sub Balittan Mojosari, Sub Balitnak Grati, beserta kebun percobaan yang berada dibawahnya, dan Balai Informasi Pertanian Wonocolo, Surabaya, yang dibentuk berdasarkan SK Mentan No. 798/Kpts/OT.210/ 12/1994, tanggal Desember 1994, dan mulai efektif pada tanggal 1 April 1995 dengan nama BPTP Karangploso. Dalam perjalanannya, BPTP Karangploso mengalami reorganisasi lagi dengan keluarnya SK Mentan terbaru No. 350/Kpts/OT.210/6/2001, tanggal 14 Juni 2001, menjadi BPTP Jawa Timur dengan hanya dua unit kerja yang tergabung di dalamnya, yaitu Laboratorium Diseminasi Wonocolo dan Kebun Percobaan Mojosari.</p>
        </header>

        <div class="row about-cols">

          

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col" style="min-height:600px;">
              <div class="img">
                <img src="{{asset('photo/carousel1.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Visi</a></h2>
              <p>
                Menjadi Lembaga Penghasilan dan Pengembang Inovasi Pertanian Tepat Guna Termuka Bertaraf Internasional
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col" style="min-height:600px;">
              <div class="img">
                <img src="{{asset('photo/carousel3.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misi</a></h2>
              <p>
                1. Mewujudkan peningkatan daya saing produk pertanian dan kesejahteraan petani berbasis inovasi pertanian spesifik lokasi. <br>
                2. Menumbuhkan kemitraan dengan instansi terkait regional dan internasional untuk memberdayakan petani dalam mengelola usahataninya. <br>
                3. Meningkatkan kapasitas profesionalisme dan akuntabilitas program dan pelaksanaan penelitian/pengkajian/diseminasi BPTP Jawa Timur. <br>
              </p>

            </div>
          </div>

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col" style="min-height:600px;">
              <div class="img">
                <img src="{{asset('photo/carousel2.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Motto</a></h2>
              <p>
                Membangun bersama selamanya
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!-- Pengaturan Untuk pelanggan -->
    @include('users.includes.peraturan')


    <!-- Daftar & Pesan Pengujian Tanah -->
    @include('users.pesan.pesan')

    @include('users.includes.lihatproses')


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Layanan</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jl. Raya Karangploso Km. 4, Kepuharjo, Karangploso, Turi Rejo, Kepuharjo, Kec. Karang Ploso, Malang, Jawa Timur 65152</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Nomor Telepon</h3>
              <p><a href="tel:0341-494052">0341-494052</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:bptpjatim@yahoo.com">bptpjatim@yahoo.com dan</a>
                  <a href="bptp-jatim@litbang.pertanian.go.id">bptp-jatim@litbang.pertanian.go.id</a>
              </p>
            </div>
          </div>

        </div>

          <div class="section-header">
             <h3>Kritik dan Saran</h3>
          </div>

        <div class="form">
          <div id="sendmessage">Pesan telah terkirim. Terima Kasih</div>
          <div id="errormessage"></div>
          <form action="/saran" method="POST" enctype="multipart/form-data" role="form" class="contactForm">
            {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>

              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="mail" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Kirim</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('js/halamanuser.js')}}"></script>

  <!-- Script Pesan -->
  <script src="{{asset('lib/pesan/pesan_1.js')}}"></script>


</body>
</html>