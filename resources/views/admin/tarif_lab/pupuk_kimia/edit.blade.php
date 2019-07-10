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
            <h5 class="m-0 font-weight-bold text-primary">EDIT PUPUK KIMIA (ANORGANIK) / BATUAN MINERAL</h5>
            <a class="text-danger" target="_blank">*)per sampel</a>
        </div>
        <div class="card-body">
        {!! Form::model($ed,['method'=>'PATCH', 'action'=> ['PupukkimiaController@update',$ed->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('id', 'Nomor :') !!}
            {{ Form::text('id', null,['class'=>'form-control','placeholder'=>'Nomor' ,'required'])}}
        </div>

        <div class="form-group">
            {!! Form::label('jenis_uji', 'Jenis Uji :') !!}
            {{ Form::text('jenis_uji', null,['class'=>'form-control','placeholder'=>'Jenis Uji' ,'required'])}}
        </div>

        <div class="form-group">
            {!! Form::label('metode', 'Metode :') !!}
            {!! Form::text('metode', null,['class'=>'form-control','placeholder'=>'Metode']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tarif', 'Tarif :') !!}
            {!! Form::text('tarif', null,['class'=>'form-control','placeholder'=>'Tarif', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Edit', ['class'=>'btn btn-warning pull-right']) !!}
        </div>

        {!! Form::close() !!}

</div>
@endsection
@section('script')
    <script src="{{asset('../resources/assets/assetsadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/assets/assetsadmin2/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
@stop

