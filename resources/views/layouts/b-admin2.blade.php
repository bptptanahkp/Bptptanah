<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BPTP Jatim -Admin</title>

  <!-- Custom fonts for this template-->
  
  
  <!-- Custom styles for this template-->

  
  <link rel="stylesheet" href="{{asset('fonts/fontawesome-2/css/all.min.css')}}">
  <link href="{{asset('css/b-admin2.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/datatables/dataTables.bootstrap4.min.css')}}">
 
  <link rel="shortcut icon" href="{{asset('photo/logo.png')}}">
  

</head>

<body id="page-top" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.includes._sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layouts.includes._navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>BPTP Jatim &copy; Balai Pengkajian Teknologi Pertanian</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/b-admin2.js')}}"></script>
  <script src="{{asset('css/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('css/datatables/jquery.dataTables.min.js')}}"></script>
  <!-- <script src="{{asset('js/app2.js')}}" type="application/javascript"></script> -->
  <script src="{{asset('fonts/fontawesome/all.min.js')}}"></script>
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
