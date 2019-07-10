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
                <h5>Permintaan Pelanggan</h5>
            </div>
        </div>
        <div class="modal-body">

        {!! Form::open(['method'=>'POST', 'action'=> 'UserController@store','files'=>true]) !!}


            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    {!! Form::label('nama', 'Nama :') !!}
                    {!! Form::text('nama', null,['class'=>'form-control']) !!}
                </div>
                <div class="col-sm-5">
                    {!! Form::label('instansi', 'Instansi/Perusahaan :') !!}
                    {!! Form::text('instansi', null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    {!! Form::label('alamat', 'Alamat :') !!}
                    {!! Form::text('alamat', null,['class'=>'form-control']) !!}
                </div>
                <div class="col-sm-5">
                    {!! Form::label('ntelp', 'Nomer Telepon :') !!}
                    {!! Form::text('ntelp', null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    {!! Form::label('contohygdianalisis', 'Contoh Yang Dianalisis :') !!}
                    {!! Form::text('contohygdianalisis', null,['class'=>'form-control','placeholder'=>'tanah,pupuk organik,pupuk anorganik, .........................']) !!}
                </div>
                <div class="col-sm-5">
                    {!! Form::label('unsurygdianalisis', 'Unsur Yang Dianalisis :') !!}
                    {!! Form::text('unsurygdianalisis', null,['class'=>'form-control','placeholder'=>'Lengkap, ......................']) !!}
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    {!! Form::label('jml_contoh', 'Jumlah Contoh :') !!}
                    {!! Form::text('jml_contoh', null,['class'=>'form-control']) !!}
                </div>
                <div class="col-sm-5">
                    {!! Form::label('bentuk', 'Bentuk :') !!}
                    {!! Form::select('bentuk', [
                        'padat'=>'Padat','cair'=>'Cair','granula'=>'Granula','remah'=>'Remah'
                        ],null,['class'=>'form-control chosen-type', 'placeholder' => 'Please Choose']) !!}
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-5">
                    {!! Form::label('asal_contoh', 'Asal Contoh :') !!}
                    {!! Form::text('asal_contoh', null,['class'=>'form-control']) !!}
                </div>
                <div class="col-sm-5">
                    {!! Form::label('merk', 'Merk :') !!}
                    {!! Form::text('merk', null,['class'=>'form-control']) !!}
                </div>
            </div>




<!--==========================
      Daftar & Pesan
    ============================-->
    <section id="pesan"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Tarif Lab. Tanah 2018</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="pesan-flters">
              <li data-filter="*" class="filter-active">All</li>
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
                            <td>
                                {{Form::checkbox('nilai[]',$value->id)}}
                            </td>
                        </tr>

                        @endforeach

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
                            <td class="text-left">{{ Form::label('jenis_uji',$value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label('metode',$value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>
                                {{Form::checkbox('nilai[]',$value->id)}}
                            </td>
                        </tr>

                        @endforeach

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
                            <td class="text-left">{{ Form::label('jenis_uji',$value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label('metode',$value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>
                                {{Form::checkbox('nilai[]',$value->id)}}
                            </td>
                        </tr>

                        @endforeach

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
                            <td class="text-left">{{ Form::label('jenis_uji',$value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label('metode',$value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>
                                {{Form::checkbox('nilai[]',$value->id)}}
                            </td>
                        </tr>

                        @endforeach

                    @endif

                    @if($sub1)
                            <tr>
                                <td>{{$sub1->id}}</td>
                                <td class="text-left">{{$sub1->jenis_uji}}</td>
                                <td class="text-left">{{$sub1->metode}}</td>
                                <td></td>
                                <td></td>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$sub1_1->jenis_uji}}</td>
                                    <td class="text-left">{{$sub1_1->metode}}</td>
                                    <td>Rp. {{number_format($sub1_1->tarif)}},-</td>
                                    <td>
                                        {{Form::checkbox('nilai[]',$value->id)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-left">
                                    Pengukuran {!! Form::select('role_id',[''=>'','Za'=>'Za'], null,['class'=>'form-control col-sm-4']) !!}
                                    </td>
                                    <td class="text-left">{{$sub1_2->metode}}</td>
                                    <td>Rp. {{number_format($sub1_2->tarif)}},-</td>
                                    <td>
                                        {{Form::checkbox('nilai[]',$value->id)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$sub1_3->jenis_uji}}</td>
                                    <td class="text-left">{{$sub1_3->metode}}</td>
                                    <td>Rp. {{number_format($sub1_3->tarif)}},-</td>
                                    <td>
                                        {{Form::checkbox('nilai[]',$value->id)}}
                                    </td>
                                </tr>
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
                            <td class="text-left">{{ Form::label('jenis_uji',$value->jenis_uji) }}</td>
                            <td class="text-left">{{ Form::label('metode',$value->metode) }}</td>
                            <td>Rp. {{ Form::label('tarif',number_format($value->tarif))}}</td>
                            <td>
                                {{Form::checkbox('nilai[]',$value->id)}}
                            </td>
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




