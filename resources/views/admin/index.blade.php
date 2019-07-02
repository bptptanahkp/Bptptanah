@extends('layouts.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">Tarif Lab. TANAH 2018</h1>
        <p class="mb-4">Badan Pengkajian Teknologi Pertanian</P>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">ANALISIS KIMIA TANAH RUTIN</h5>
            <a class="text-danger" target="_blank">*)per sampel</a>
            <a data-toggle="modal" data-target="#modalCreate" class="fa fa-plus-circle fa-2x float-right text-success"></a>
            @include('admin.create')
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Uji</th>
                    <th>Metode</th>
                    <th>Tarif</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Jenis Uji</th>
                    <th>Metode</th>
                    <th>Tarif</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>C-Organik</td>
                      <td>spektrofotometer</td>
                      <td>Rp.24.000,-</td>
                      <td>
                        <a href="" class="fa fa-edit text-warning"></a>
                        <a href="" class="fa fa-trash text-danger"></a>
                      </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
@stop