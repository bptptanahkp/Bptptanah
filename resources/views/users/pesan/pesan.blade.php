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
                        @if($sub1)
                            <tr>
                                <td>{{$sub1->id}}</td>
                                <td class="text-left">{{$sub1->jenis_uji}}</td>
                                <td class="text-left">{{$sub1->metode}}</td>
                                <td></td>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$sub1_1->jenis_uji}}</td>
                                    <td class="text-left">{{$sub1_1->metode}}</td>
                                    <td>Rp. {{number_format($sub1_1->tarif)}},-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$sub1_2->jenis_uji}}</td>
                                    <td class="text-left">{{$sub1_2->metode}}</td>
                                    <td>Rp. {{number_format($sub1_2->tarif)}},-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-left">{{$sub1_3->jenis_uji}}</td>
                                    <td class="text-left">{{$sub1_3->metode}}</td>
                                    <td>Rp. {{number_format($sub1_3->tarif)}},-</td>
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