@extends('layouts.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Hasil Permintaan User</h5>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-responsive-sm text-center" id="dataTable" width="100%" cellspacing="0">

                <thead>
                <tr>
                    <th rowspan="2" style="vertical-align:middle;">No</th>
                    <th rowspan="2" style="vertical-align:middle;">NomorSPA</th>
                    <th rowspan="2" style="vertical-align:middle;">Nama</th>
                    <th colspan="5">Jenis Uji</th>
                    <th rowspan="2" style="vertical-align:middle;">Metode</th>
                    <th rowspan="2" style="vertical-align:middle;">Harga</th>
                </tr>
                <tr>
                    <th>Anilisis Kimia Tanah</th>
                    <th>Pupuk Organik</th>
                    <th>Pupuk Kimia</th>
                    <th>Tanaman</th>
                    <th>Pengujian Air</th>
                </tr>
                </thead>
                <tbody>
                @php $no=0 @endphp
                    @foreach($permintaan as $pesans)
                        @php $no++  @endphp

                    <tr>
                        
                        <td>{{$pesans->id}}</td>
                        <td>{{$pesans->pemesananuser->id}}</td>
                        <td>{{$pesans->pemesananuser->nama}}</td>
                        <td>{{$pesans->id_ankimtan ? $pesans->ankimtan->jenis_uji : '-'}}</td>
                        <td>{{$pesans->id_pupukkimia ? $pesans->pupukkimia->jenis_uji : '-'}}</td>
                        <td>{{$pesans->id_pupukorganik ? $pesans->pukorkom->jenis_uji : '-'}}</td>
                        <td>{{$pesans->id_tanaman ? $pesans->tanaman->jenis_uji : '-'}}</td>
                        <td>{{$pesans->id_pengujianair ? $pesans->pengair->jenis_uji : '-'}}</td>
                        <td>
                            @if ($pesans->ankimtan)
                                {{$pesans->ankimtan->metode ? $pesans->ankimtan->metode : '-'}}
                            @elseif ($pesans->pupukkimia)
                                {{$pesans->pupukkimia->metode ? $pesans->pupukkimia->metode : '-'}}
                            @elseif ($pesans->pukorkom)
                                {{$pesans->pukorkom->metode ? $pesans->pukorkom->metode : '-'}}
                            @elseif ($pesans->tanaman)
                                {{$pesans->tanaman->metode ? $pesans->tanaman->metode : '-'}}
                            @else ($pesans->pengair)
                                {{$pesans->pengair->metode ? $pesans->pengair->metode : '-'}}
                            @endif
                        </td>
                        <td>{{number_format($pesans->harga)}},-</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            <div class="row justify-content-center">{!! $permintaan->render() !!}
            </div>
        </div>
</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
@stop