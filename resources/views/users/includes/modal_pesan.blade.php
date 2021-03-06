<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <div class="modal-title col-12 text-center">
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5>Laboratorium Tanah</h5>
                <h5>Balai Pengkajian Teknologi Pertanian Jawa Timur</h5>
                <h5>Permintaan Pelanggan Uji Tanah</h5>
            </div>
        </div>
        <div class="modal-body">

        {!! Form::open(['method'=>'POST', 'action'=> 'UserController@store','files'=>true]) !!}


            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('nama', 'Nama :') !!}
                    {!! Form::text('nama', null,['class'=>'form-control','required']) !!}
                </div>
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('instansi', 'Instansi/Perusahaan :') !!}
                    {!! Form::text('instansi', null,['class'=>'form-control','required']) !!}
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('alamat', 'Alamat :') !!}
                    {!! Form::text('alamat', null,['class'=>'form-control','required']) !!}
                </div>
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('ntelp', 'Nomer Telepon :') !!}
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">+62</span>
                    {!! Form::text('ntelp', null,['class'=>'form-control','required']) !!}
                    @include('users.includes.pesan_error')
                    </div>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('contohygdianalisis', 'Contoh Yang Dianalisis :') !!}
                    {!! Form::text('contohygdianalisis', null,['class'=>'form-control','placeholder'=>'tanah,pupuk organik,pupuk anorganik, .........................','required']) !!}
                </div>
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('unsurygdianalisis', 'Unsur Yang Dianalisis :') !!}
                    {!! Form::text('unsurygdianalisis', null,['class'=>'form-control','placeholder'=>'Lengkap, ......................','required']) !!}
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('jml_contoh', 'Jumlah Contoh :') !!}
                    {!! Form::text('jml_contoh', null,['class'=>'form-control','required']) !!}
                </div>
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('bentuk', 'Bentuk :') !!}
                    {!! Form::select('bentuk', [
                        'padat'=>'Padat','cair'=>'Cair','granula'=>'Granula','remah'=>'Remah'
                        ],null,['class'=>'form-control chosen-type', 'placeholder' => 'Please Choose','required']) !!}
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    <a class="text-danger">*</a>
                    {!! Form::label('asal_contoh', 'Asal Contoh :') !!}
                    {!! Form::text('asal_contoh', null,['class'=>'form-control','required']) !!}
                </div>
                <div class="col-sm-5">
                    {!! Form::label('merk', 'Merk :') !!}
                    {!! Form::text('merk', null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div></div>




<!--==========================
      Daftar & Pesan
    ============================-->
    <section id="pesan"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Kategori Uji Tanah</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="pesan-flters">
              <!-- <li data-filter="*" class="filter-active">All</li> -->
              <li data-filter=".filter-analisiskt">Analisis Kimia Tanah</li>
              <li data-filter=".filter-po">Pupuk Organik</li>
              <li data-filter=".filter-pkb">Pupuk Kimia (Anorganik)</li>
              <li data-filter=".filter-tanaman">Tanaman</li>
              <li data-filter=".filter-air">Pengujian Air</li>

            </ul>
          </div>
          <div id="daftar" class="col-sm-12 text-right">
          </div>
        </div>

        <div class="row pesan-container">

        <!-- Tarif Analisis Kimia tanah -->
            <div class="col-lg-12 col-md-12 pesan-item filter-analisiskt wow fadeInUp">
                <div class="pesan-wrap">
                    <div class="pesan-info">
                        <h4><a href="#">Analisis Kimia Tanah Rutin</a></h4>
                        <p>App</p>
                    </div>
                    <table class="table table-hover table-responsive-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Uji</th>
                                <th>Metode</th>
                                <th>Tarif</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                    <tbody>
                    @if($ankimtan)

                        @foreach($ankimtan as $ankimtans => $value)

                        <tr>
                            <td>{{$value->id}}</td>
                            <td class="text-left">{{ Form::label('jenis_uji',$value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label('metode',$value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$value->id)}}</td>
                        </tr>

                        @endforeach

                    @endif

                    @if($ankimtansub1)
                        <tr>
                        <td>{{$ankimtansub1->id}}</td>
                        <td class="text-left">{{$ankimtansub1->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub1->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub1_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub1_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub1_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub1_1->id)}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub1_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub1_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub1_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub1_2->id)}}</td>
                        </tr>

                    @endif
                    
                    @if($ankimtansub2)
                        <tr>
                        <td>7</td>
                        <td class="text-left">{{$ankimtansub2->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub2->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub2_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub2_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub2_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub2_1->id)}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub2_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub2_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub2_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub2_2->id)}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub2_3->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub2_3->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub2_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub2_3->id)}}</td>
                        </tr>

                    @endif

                    @if($ankimtansub3)
                        <tr>
                        <td>8</td>
                        <td class="text-left">{{$ankimtansub3->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub3->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                    @endif

                    @if($ankimtansub3_1)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub3_1->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_2)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub3_2->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_3->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_3->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub3_3->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_4->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_4->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_4->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub3_4->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_5->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_5->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_5->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub3_5->id)}}</td>
                        </tr>

                    @endif

                    @if($ankimtansub4)
                        <tr>
                        <td>9</td>
                        <td class="text-left">{{$ankimtansub4->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub4->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                    @endif

                    @if($ankimtansub4_1)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub4_1->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_2)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub4_2->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_3->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_3->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub4_3->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_4->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_4->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_4->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub4_4->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_5->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_5->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_5->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub4_5->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_6)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_6->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_6->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_6->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub4_6->id)}}</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_7)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_7->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_7->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_7->tarif)}},-</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$ankimtansub4_7->id)}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                </div>
            </div>

        <!-- Tarif Pupuk Organik/Kompos/Cair -->
            
            <div class="col-lg-12 col-md-12 pesan-item filter-po wow fadeInUp">
                <div class="pesan-wrap">
                    <div class="pesan-info">
                        <h4><a href="#">Pupuk Organik/Kompos/Cair</a></h4>
                        <p>App</p>
                    </div>
                    <table class="table table-hover table-responsive-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Uji</th>
                                <th>Metode</th>
                                <th>Tarif</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                    <tbody>
                    @if($pukorkom)

                        @foreach($pukorkom as $pukorkoms => $value)

                        <tr>
                            <td>{{$value->id}}</td>
                            <td class="text-left">{{ Form::label($value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label($value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$value->id)}}</td>

                        @endforeach

                    @endif

                    @if($pupukorganiksub1)
                        <tr>
                        <td>8</td>
                        <td class="text-left">{{$pupukorganiksub1->jenis_uji}}</td>
                        <td class="text-left">{{$pupukorganiksub1->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                    @endif

                    @if($pupukorganiksub1_1)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_1->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_1->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_1->id)}}</td>
                    @endif

                    @if($pupukorganiksub1_2)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_2->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_2->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_2->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_3->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_3->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_3->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_4->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_4->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_4->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_4->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_5->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_5->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_5->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_5->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_6)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_6->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_6->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_6->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_6->id)}}</td>
                    @endif

                    @if($pupukorganiksub1_7)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_7->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_7->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_7->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_7->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_8)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_8->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_8->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_8->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_8->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_9)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_9->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_9->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_9->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_9->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_10)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_10->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_10->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_10->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_10->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_11)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_11->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_11->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_11->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_11->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_12)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_12->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_12->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_12->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_12->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub1_13)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub1_13->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub1_13->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub1_13->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukorganik[]',$pupukorganiksub1_13->id)}}</td>
                            
                        </tr>
                    @endif

                    @if($pupukorganiksub2)
                        <tr>
                        <td>10</td>
                        <td class="text-left">{{$pupukorganiksub2->jenis_uji}}</td>
                        <td class="text-left">{{$pupukorganiksub2->metode}}</td>
                        <td>Rp. {{number_format($pupukorganiksub2->tarif)}},-</td>
                        <td>
                            {{Form::checkbox('id_pupukorganik[]',$pupukorganiksub2->id)}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukorganiksub2_1->jenis_uji}}</td>
                            <td class="text-left">{{$pupukorganiksub2_1->metode}}</td>
                            <td>Rp. {{number_format($pupukorganiksub2_1->tarif)}},-</td>
                            <td>
                                {{Form::checkbox('id_pupukorganik[]',$pupukorganiksub2_1->id)}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                </div>
            </div>

        <!-- Tarif Pupuk Kimia (Anorganik) -->

            <div class="col-lg-12 col-md-12 pesan-item filter-pkb wow fadeInUp">
                <div class="pesan-wrap">
                    <div class="pesan-info">
                        <h4><a href="#">Pupuk Kimia (Anorganik)/Batuan Mineral</a></h4>
                        <p>App</p>
                    </div>
                    <table class="table table-hover table-responsive-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Uji</th>
                                <th>Metode</th>
                                <th>Tarif</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                    <tbody>
                    @if($pukkimia)

                        @foreach($pukkimia as $pukkimias => $value)

                        <tr>
                            <td>{{$value->id}}</td>
                            <td class="text-left">{{ Form::label($value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label($value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>{{Form::checkbox('id_ankimtan[]',$value->id)}}</td>
                        </tr>

                        @endforeach

                    @endif

                    @if($pupukkimiasub1)
                        <tr>
                        <td>8</td>
                        <td class="text-left">{{$pupukkimiasub1->jenis_uji}}</td>
                        <td class="text-left">{{$pupukkimiasub1->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_1)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_1->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_1->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_1->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_2)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_2->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_2->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_2->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_3->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_3->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_3->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_4->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_4->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_4->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_4->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_5->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_5->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_5->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_5->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_6)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_6->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_6->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_6->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_6->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_7)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_7->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_7->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_7->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_7->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_8)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_8->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_8->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_8->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_8->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_9)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_9->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_9->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_9->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_9->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_10)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_10->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_10->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_10->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_10->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_11)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_11->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_11->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_11->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_11->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_12)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_12->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_12->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_12->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_12->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_13)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub1_13->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub1_13->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub1_13->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub_13->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2)
                        <tr>
                        <td>8</td>
                        <td class="text-left">{{$pupukkimiasub2->jenis_uji}}</td>
                        <td class="text-left">{{$pupukkimiasub2->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_1)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_1->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_1->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_1->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_2)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_2->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_2->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_2->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_3->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_3->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_3->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_4->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_4->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_4->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_4->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_5->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_5->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_5->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_5->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_6)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_6->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_6->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_6->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_6->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_7)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_7->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_7->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_7->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_7->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_8)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_8->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_8->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_8->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_8->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub1_9)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_9->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_9->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_9->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_9->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_10)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_10->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_10->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_10->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_10->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_11)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_11->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_11->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_11->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_11->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_12)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_12->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_12->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_12->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_12->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub2_13)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub2_13->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub2_13->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub2_13->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub2_13->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3)
                        <tr>
                        <td>8</td>
                        <td class="text-left">{{$pupukkimiasub3->jenis_uji}}</td>
                        <td class="text-left">{{$pupukkimiasub3->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_1)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_1->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_1->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_1->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_2)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_2->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_2->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_2->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_3->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_3->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_3->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_4->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_4->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_4->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_4->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_5->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_5->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_5->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_5->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_6)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_6->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_6->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_6->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_6->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_7)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_7->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_7->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_7->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_7->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_8)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_8->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_8->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_8->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_8->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_9)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_9->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_9->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_9->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_9->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_10)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_10->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_10->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_10->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_10->id)}}</td>
                        </tr>
                    @endif

                    @if($pupukkimiasub3_11)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$pupukkimiasub3_11->jenis_uji}}</td>
                            <td class="text-left">{{$pupukkimiasub3_11->metode}}</td>
                            <td>Rp. {{number_format($pupukkimiasub3_11->tarif)}},-</td>
                            <td>{{Form::checkbox('id_pupukkimia[]',$pupukkimiasub3_11->id)}}</td>
                        </tr>
                    @endif

                    
                    </tbody>
                </table>
                </div>
            </div>

        <!-- Tarif Tanaman -->

            <div class="col-lg-12 col-md-12 pesan-item filter-tanaman wow fadeInUp">
                <div class="pesan-wrap">
                    <div class="pesan-info">
                        <h4><a href="#">Tanaman</a></h4>
                        <p>App</p>
                    </div>
                    <table class="table table-hover table-responsive-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Uji</th>
                                <th>Metode</th>
                                <th>Tarif</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                    <tbody>
                    @if($tanaman)

                        @foreach($tanaman as $tanamans => $value)

                        <tr>
                            <td>{{$value->id}}</td>
                            <td class="text-left">{{ Form::label($value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label($value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>{{Form::checkbox('id_tanaman[]',$value->id)}}</td>
                        </tr>

                        @endforeach

                    @endif

                    @if($tanamansub1)
                        <tr>
                        <td>3</td>
                        <td class="text-left">{{$tanamansub1->jenis_uji}}</td>
                        <td class="text-left">{{$tanamansub1->metode}}</td>
                        <td></td>
                        <td></td>
                        </tr>
                    @endif

                    @if($tanamansub1_1)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_1->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_1->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_1->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_1->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_2)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_2->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_2->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_2->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_2->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_3->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_3->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_3->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_3->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_4->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_4->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_4->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_4->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_5->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_5->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_5->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_5->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_6)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_6->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_6->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_6->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_6->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_7)    
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_7->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_7->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_7->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_7->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_8)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_8->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_8->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_8->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_8->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_9)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_9->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_9->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_9->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_9->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_10)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_10->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_10->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_10->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_10->id)}}</td>
                        </tr>
                    @endif

                    @if($tanamansub1_11)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$tanamansub1_11->jenis_uji}}</td>
                            <td class="text-left">{{$tanamansub1_11->metode}}</td>
                            <td>Rp. {{number_format($tanamansub1_11->tarif)}},-</td>
                            <td>{{Form::checkbox('id_tanaman[]',$tanamansub1_11->id)}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                </div>
            </div>

        <!-- Tarif Pengujian -->

            <div class="col-lg-12 col-md-12 pesan-item filter-air wow fadeInUp">
                <div class="pesan-wrap">
                    <div class="pesan-info">
                        <h4><a href="#">Pengujian Air</a></h4>
                        <p>App</p>
                    </div>
                    <table class="table table-hover table-responsive-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Uji</th>
                                <th>Metode</th>
                                <th>Tarif</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                    <tbody>
                    @if($pengair)

                        @foreach($pengair as $pengair => $value)

                        <tr>
                            <td>{{$value->id}}</td>
                            <td class="text-left">{{ Form::label($value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label($value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>{{Form::checkbox('id_pengujianair[]',$value->id)}}</td>
                        </tr>

                        @endforeach

                    @endif
                    

  
                    </tbody>
                </table>
                </div>
            </div>
            

        </div>
      </div>
    </section>
    
    <!-- #pesan -->

      
        <div class="modal-footer">

          {!! Form::submit('Pesan', ['class'=>'btn btn-outline-success btn-block']) !!}

          {!! Form::close() !!}
                </div>
        </div>
    </div>
  </div>
</div>




