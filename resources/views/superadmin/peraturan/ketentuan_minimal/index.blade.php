@extends('superadmin.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-1 font-weight-bold text-success">Ketentuan Minimal contoh tiap jenis analisis:</h5>
            <a data-toggle="modal" data-target="#modalCreate" class="fa fa-plus-circle fa-2x float-right text-success" data-toggle="tooltip" data-placement="top" title="Tambahkan disini"></a>
            @include('superadmin.peraturan.ketentuan_minimal.create')
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-responsive-sm text-center" id="dataTable" width="100%" cellspacing="0">
            @if(session('action'))

            <div class="alert alert-info" role="alert">{{session('action')}}</div>

            @endif
                <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Jenis Contoh</th>
                    <th>Jumlah Minimal</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($data)

                    @foreach($data as $datas)

                    <tr>
                        
                        <td>{{$datas->id}}</td>
                        <td class="text-left">{{$datas->jenis_cth}}</td>
                        <td class="text-left">{{$datas->jml_min}}</td>
                        <td>{{$datas->created_at->diffForHumans()}}</td>
                        <td>{{$datas->updated_at}}</td>
                        <td>
                        <a data-toggle="tooltip" title="edit disini" href="editketentuan/{{$datas->id}}/edit" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
                        
                        <a href="hapusketentuan/{{$datas->id}}/hapus" data-toggle="tooltip" title="Hapus disini" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        
                        </form>
                        </td>
                    </tr>

                    @endforeach

                @endif
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