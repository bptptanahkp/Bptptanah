@extends('superadmin.b-admin2')

@section('link')
    <link rel="stylesheet" href="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" style="padding:25px">

        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title">Ubah Status Data Pesan</h4>
                <p class="card-category">Pilih untuk Aktif atau Non Aktif</p>
            </div>
            <div class="card-body">
                <form action="{{ route('superdatapesan.changeStatus', $getDatapesan->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">

                    <div class="form-group">
                        <label for="status">Pilih Status data pesan</label>
                        <select name="status" type="text" class="form-control">
                            <option value="0" @if($getDatapesan->status == "0") selected @endif>Non Aktif</option>
                            <option value="1" @if($getDatapesan->status == "1") selected @endif>Aktif</option>
                        </select>                         
                    </div>

                    <div class="form-group">
                        <label for="proses">Proses <a class="text-danger">*</a></label>
                        <h6>contoh : 20%    </h6>
                        <input name="proses" type="text" class="form-control" value="{{$getDatapesan->proses}}" required>                     
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan <a class="text-danger">*</a></label>
                        <input name="keterangan" type="text" class="form-control" value="{{$getDatapesan->keterangan}}">                     
                    </div>

                    <button type="submit" class="btn btn-success pull-right">Simpan</button>
                    <div class="clearfix"></div>
                    </div>
                </div>
                </form>
            </div>

    </div>
</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
@stop