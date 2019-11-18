@extends('layouts.b-admin2')


@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
    
    <!-- Page Heading -->
    <div class="card-header">
        <h1 class="h3 mb-2 text-gray-800 text-center">Dashboard</h1>
    </div>
    <div class="card-body">
            <p class="mb-4">Balai Pengkajian Teknologi Pertanian</P>
            
            <p class="mb-4"> Halooo {{auth()->user()->name}}  Selamat datang dihalaman admin</p>

    </div>

    </div>
   

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Transaksi Pemesanan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$transaksi}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Saran</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$saran}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        </div>
    
</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/app2.js')}}" type="application/javascript"></script>

    <script>
        swal("Login Berhasil", "Selamat Datang", "success");
    </script>
    
@stop