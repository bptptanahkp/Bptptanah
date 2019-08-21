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
        <td>NomorSPA</td>
        <td>Nama</td>
        <td>Instansi</td>
        <td>Alamat</td>
        <td>No Telp</td>
        <td>Contoh Yang Dianalisis</td>
        <td>Unsur Yang Dianalisis</td>
        <td>Jumlah Contoh</td>
        <td>Bentuk</td>
        <td>Asal Contoh</td>
        <td>Merk</td>
        <td>Created</td>
        <td>Update</td>
      </tr>
    </thead>
    <tbody>

    	@if($data)

    		@foreach($data as $hasilpesanuser)
      <tr>

        <td class="text-left">{{$hasilpesanuser->nomorSPA}}</td>
        <td class="text-left">{{$hasilpesanuser->nama}}</td>
        <td class="text-left">{{$hasilpesanuser->instansi}}</td>
        <td class="text-left">{{$hasilpesanuser->alamat}}</td>
        <td class="text-left">{{$hasilpesanuser->no_telp}}</td>
        <td class="text-left">{{$hasilpesanuser->contohygdianalisis}}</td>
        <td class="text-left">{{$hasilpesanuser->unsurygdianalisi}}</td>
        <td class="text-left">{{$hasilpesanuser->jml_cth}}</td>
        <td class="text-left">{{$hasilpesanuser->bentuk}}</td>
        <td class="text-left">{{$hasilpesanuser->asal_cth}}</td>
        <td class="text-left">{{$hasilpesanuser->merk}}</td>
        <td>{{$hasilpesanuser->created_at->diffForHumans()}}</td>
        <td>{{$hasilpesanuser->updated_at->diffForHumans()}}</td>

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- 
    <script>
        $('button#delete').on('click', function(){
            var href = $(this).attr('href');
            var title = $(this).data('title');


            swal({
              title: "Are you sure?"+ title+ " ?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                swal("Poof! Your imaginary file has been deleted!", {
                  icon: "success",
                });
              } 
            });
        })
    </script> -->
@stop
