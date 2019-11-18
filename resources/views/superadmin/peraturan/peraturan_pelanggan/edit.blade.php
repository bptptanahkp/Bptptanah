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
            <h5 class="m-0 font-weight-bold text-primary">Peraturan Pelanggan</h5>
        </div>
        <div class="card-body">
        <form action="/updateperaturan" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <div class="input-group">   
                    <input name="id" type="hidden" class="form-control" placeholder="Nomor" value="{{$ed->id}}">      
                </div>
            </div>
            <div class="form-group">
                <label for="peraturan">Peraturan<a class="text-danger">*</a></label> 
                <div class="input-group">  	
                    <input name="peraturan" type="text" class="form-control" placeholder="Peraturan" value="{{$ed->peraturan}}" required>  	
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

