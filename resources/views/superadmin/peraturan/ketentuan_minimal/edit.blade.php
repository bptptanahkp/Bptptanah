@extends('superadmin.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
 
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-success">EDIT KETENTUAN MINIMAL contoh tiap jenis analisis</h5>
            <a class="text-danger" target="_blank">*)per sampel</a>
        </div>
        <div class="card-body">
        <form action="/updateketentuan" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <div class="input-group">   
                    <input name="id" type="hidden" class="form-control" placeholder="Nomor" value="{{$ed->id}}" >      
                </div>
            </div>
            <div class="form-group">
                <label for="jenis_cth">Jenis Contoh<a class="text-danger">*</a></label> 
                <div class="input-group">  	
                    <input name="jenis_cth" type="text" class="form-control" placeholder="Jenis Contoh" value="{{$ed->jenis_cth}}" required>  	
                </div>
            </div>
            <div class="form-group">
                <label for="jml_min">Jumlah Minimal<a class="text-danger">*</a></label>
                <div class="input-group">  	
                    <input name="jml_min" type="text" class="form-control" placeholder="Jumlah Minimal" value="{{$ed->jml_min}}">
                </div>
            </div>
                <button type="submit" class="btn btn-warning ">Edit</button>
        </form>

</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
@stop

