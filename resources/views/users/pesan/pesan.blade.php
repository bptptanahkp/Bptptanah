<!--==========================
      Daftar & Pesan
    ============================-->
    <section id="pesan"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Daftar Pesan</h3>
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
            <a class="btn btn-outline-success btn-block text-success" data-toggle="modal" data-target="#modalCreate">Pesan</a>
          </div>
          @include('users.includes.modal_pesan')
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
                            </tr>
                        </thead>
                    <tbody>
                    @if($ankimtan)

                        @foreach($ankimtan as $ankimtans)

                        <tr>
                            <td>{{$ankimtans->id}}</td>
                            <td class="text-left">{{$ankimtans->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtans->metode}}</td>
                            <td>Rp.{{number_format($ankimtans->tarif)}}</td>
                        </tr>

                        @endforeach

                    @endif

                    @if($ankimtansub1)
                        <tr>
                        <td>{{$ankimtansub1->id}}</td>
                        <td class="text-left">{{$ankimtansub1->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub1->metode}}</td>
                        <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub1_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub1_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub1_1->tarif)}},-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub1_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub1_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub1_2->tarif)}},-</td>
                        </tr>

                    @endif
                    
                    @if($ankimtansub2)
                        <tr>
                        <td>7</td>
                        <td class="text-left">{{$ankimtansub2->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub2->metode}}</td>
                        <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub2_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub2_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub2_1->tarif)}},-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub2_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub2_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub2_2->tarif)}},-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub2_3->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub2_3->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub2_3->tarif)}},-</td>
                        </tr>

                    @endif

                    @if($ankimtansub3)
                        <tr>
                        <td>8</td>
                        <td class="text-left">{{$ankimtansub3->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub3->metode}}</td>
                        <td></td>
                        </tr>
                    @endif

                    @if($ankimtansub3_1)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_1->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_2)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_2->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_3->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_3->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_3->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_4)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_4->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_4->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_4->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub3_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub3_5->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub3_5->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub3_5->tarif)}},-</td>
                        </tr>

                    @endif

                    @if($ankimtansub4)
                        <tr>
                        <td>9</td>
                        <td class="text-left">{{$ankimtansub4->jenis_uji}}</td>
                        <td class="text-left">{{$ankimtansub4->metode}}</td>
                        <td></td>
                        </tr>
                    @endif
                    @if($ankimtansub4_1)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_1->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_1->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_1->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_2)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_2->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_2->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_2->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_3)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_3->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_3->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_3->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_4)
                         <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_4->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_4->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_4->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_5)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_5->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_5->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_5->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_6)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_6->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_6->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_6->tarif)}},-</td>
                        </tr>
                    @endif

                    @if($ankimtansub4_7)
                        <tr>
                            <td></td>
                            <td class="text-left">{{$ankimtansub4_7->jenis_uji}}</td>
                            <td class="text-left">{{$ankimtansub4_7->metode}}</td>
                            <td>Rp. {{number_format($ankimtansub4_7->tarif)}},-</td>
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
                            </tr>
                        </thead>
                    <tbody>
                    @if($pukorkom)

                        @foreach($pukorkom as $pukorkoms)

                        <tr>
                            <td>{{$pukorkoms->id}}</td>
                            <td class="text-left">{{$pukorkoms->jenis_uji}}</td>
                            <td class="text-left">{{$pukorkoms->metode}}</td>
                            <td>Rp. {{ number_format($pukorkoms->tarif) }},-</td>
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
                            </tr>
                        </thead>
                    <tbody>
                    @if($pukkimia)

                        @foreach($pukkimia as $pukkimias)

                        <tr>
                            <td>{{$pukkimias->id}}</td>
                            <td class="text-left">{{$pukkimias->jenis_uji}}</td>
                            <td class="text-left">{{$pukkimias->metode}}</td>
                            <td>Rp. {{ number_format($pukkimias->tarif) }},-</td>
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
                            </tr>
                        </thead>
                    <tbody>
                    @if($tanaman)

                        @foreach($tanaman as $tanamans)

                        <tr>
                            <td>{{$tanamans->id}}</td>
                            <td class="text-left">{{$tanamans->jenis_uji}}</td>
                            <td class="text-left">{{$tanamans->metode}}</td>
                            <td>Rp. {{ number_format($tanamans->tarif) }},-</td>
                        </tr>

                        @endforeach

                    @endif

                        @if($tanamansub1)
                            <tr>
                                <td>{{$tanamansub1->id}}</td>
                                <td class="text-left">{{$tanamansub1->jenis_uji}}</td>
                                <td class="text-left">{{$tanamansub1->metode}}</td>
                                <td></td>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$tanamansub1_1->jenis_uji}}</td>
                                    <td class="text-left">{{$tanamansub1_1->metode}}</td>
                                    <td>Rp. {{number_format($tanamansub1_1->tarif)}},-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$tanamansub1_2->jenis_uji}}</td>
                                    <td class="text-left">{{$tanamansub1_2->metode}}</td>
                                    <td>Rp. {{number_format($tanamansub1_2->tarif)}},-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$tanamansub1_3->jenis_uji}}</td>
                                    <td class="text-left">{{$tanamansub1_3->metode}}</td>
                                    <td>Rp. {{number_format($tanamansub1_3->tarif)}},-</td>
                                </tr>
                            </tr>
                        @endif
 
                    </tbody>
                </table>
                </div>
            </div>

        <!-- Tarif Pengujian Air -->

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
                            </tr>
                        </thead>
                    <tbody>
                    @if($pengair)

                        @foreach($pengair as $pengair)

                        <tr>
                            <td>{{$pengair->id}}</td>
                            <td class="text-left">{{$pengair->jenis_uji}}</td>
                            <td class="text-left">{{$pengair->metode}}</td>
                            <td>Rp. {{ number_format($pengair->tarif) }},-</td>
                        </tr>

                        @endforeach

                    @endif
                    </tbody>
                </table>
                </div>
            </div>
            



<div class="col-lg-4 col-md-6 pesan-item filter-f wow fadeInUp">
            <div class="pesan-wrap">
              <figure>
                <img src="{{asset('photo/carousel2.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('photo/carousel2.jpg')}}" data-lightbox="pesan" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="pesan-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 pesan-item filter-a wow fadeInUp" data-wow-delay="0.1s">
            <div class="pesan-wrap">
              <figure>
                  <img src="{{asset('photo/carousel1.jpg')}}" class="img-fluid" alt="">
                  <a href="{{asset('photo/carousel1.jpg')}}" class="link-preview" data-lightbox="pesan" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="pesan-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

        
      </div>
    </section><!-- #pesan -->