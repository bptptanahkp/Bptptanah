@extends('layouts.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Hasil Pemesanan User</h5>
            @if(session('action'))

            <div class="alert alert-info" role="alert">{{session('action')}}</div>

            @endif
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-responsive-sm text-center" id="dataTable" width="100%" cellspacing="0">

                <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>NomorSPA</th>
                    <th>Nama</th>
                    <th>Instansi/Perusahaan</th>
                    <th>Alamat</th>
                    <th>Nomer Tlp</th>
                    <th>Merk</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Proses</th>
                </tr>
                </thead>
                <tbody>
                @php $no=0 @endphp
                    @foreach($pesan as $pesans)
                        @php $no++  @endphp

                    <tr>
                        
                        <td>{{$no}}</td>
                        <td>{{$pesans->pemesanan_id}}</td>
                        <td>{{$pesans->nama}}</td>
                        <td>{{$pesans->pemesananuser->instansi}}</td>
                        <td>{{$pesans->pemesananuser->alamat}}</td>
                        <td>{{$pesans->pemesananuser->ntelp}}</td>
                        <td>{{$pesans->pemesananuser->merk}}</td>
                        <td>{{$pesans->totalHarga}}</td>
                        <td>
                        @if($pesans->status === 0)
                              <span class="badge badge-danger"><a href="{{ route('datapesan.getStatus', $pesans)}}">Non Aktif</a></span>
                              @else
                              <span class="badge badge-success"><a href="{{ route('datapesan.getStatus', $pesans)}}">Aktif</a></span>
                        @endif
                        </td>
                        <td>{{$pesans->proses}}</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            <div class="row justify-content-center">{!! $pesan->render() !!}
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
@stop