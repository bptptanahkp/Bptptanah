@extends('layouts.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" style="padding:25px">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">Saran Pelanggan</h1>
        <p class="mb-4">Badan Pengkajian Teknologi Pertanian</P>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Saran</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-responsive-sm text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <td>Nama</td>
        <td>Email</td>
        <td>Subject</td>
        <td>Pesan</td>
        <td>Created</td>
        <td>Update</td>
      </tr>
    </thead>
    <tbody>

    	@if($data)

    		@foreach($data as $saran)
      <tr>

        <td class="text-left">{{$saran->nama}}</td>
        <td class="text-left">{{$saran->mail}}</td>
        <td class="text-left">{{$saran->subject}}</td>
        <td class="text-left">{{$saran->pesan}}</td>
        <td>{{$saran->created_at->diffForHumans()}}</td>
        <td>{{$saran->updated_at->diffForHumans()}}</td>

      </tr>
      @endforeach

      @endif

    </tbody>
  </table>
</div>
</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>


@stop