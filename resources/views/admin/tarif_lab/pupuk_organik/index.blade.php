@extends('layouts.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-1 font-weight-bold text-success">KATEGORI UJI PUPUK ORGANIK/KOMPOS/CAIR</h5>
            <a class="text-danger" target="_blank">*)per sampel</a>

            @if(auth()->user()->role == 'superadmin')
            <a data-toggle="modal" data-target="#modalCreate" class="fa fa-plus-circle fa-2x float-right text-success" data-toggle="tooltip" title="Tambahkan disini"></a>
            @include('admin.tarif_lab.pupuk_organik.create') 
            @endif
              
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-responsive-sm text-center" id="dataTable" width="100%" cellspacing="0">
            @if(session('action'))

            <div class="alert alert-info" role="alert">{{session('action')}}</div>

            @endif
                <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Uji</th>
                    <th>Metode</th>
                    <th>Tarif</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no=0; @endphp
                    @foreach($data as $datas)
                        @php $no++; @endphp

                    <tr>
                        
                        <td>{{$no}}</td>
                        <td class="text-left">{{$datas->jenis_uji}}</td>
                        <td class="text-left">{{$datas->metode}}</td>
                        <td class="text-left">Rp. {{ number_format($datas->tarif) }},-</td>
                        <td>{{$datas->created_at->diffForHumans()}}</td>
                        <td>{{$datas->updated_at}}</td>
                        <td>
                        <a data-toggle="tooltip" title="Edit disini" href="/tarifpupukorganik/{{$datas->id}}/edit" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['tarifpupukorganik.destroy', $datas->id],'style'=>'display:inline']) !!}

                        @if(auth()->user()->role == 'superadmin')
                        <button data-toggle="tooltip" title="Hapus disini" type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        @endif
                        
                        {!! Form::close() !!}
                        </form>
                        </td>
                    </tr>

                    @endforeach

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