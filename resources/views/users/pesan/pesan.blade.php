<!--==========================
      Daftar & Pesan
    ============================-->
    <section id="pesan"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Pesan</h3>
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
        </div>

        <div class="row pesan-container">

        <!-- Tarif Analisis Kimia tanah -->
            <div class="col-lg-12 col-md-12 pesan-item filter-analisiskt wow fadeInUp">
                <div class="pesan-wrap">
                    <div class="pesan-info">
                        <h4><a href="#">Analisis Kimia Tanah Rutin</a></h4>
                        <p>App</p>
                    </div>
                    <table class="table table-hover text-center">
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
                            <td class="text-left">Rp. {{ number_format($ankimtans->tarif) }},-</td>
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
                    <table class="table table-hover text-center">
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
                            <td class="text-left">Rp. {{ number_format($ankimtans->tarif) }},-</td>
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
                    <table class="table table-hover text-center">
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
                            <td class="text-left">Rp. {{ number_format($ankimtans->tarif) }},-</td>
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
                    <table class="table table-hover text-center">
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
                            <td class="text-left">Rp. {{ number_format($ankimtans->tarif) }},-</td>
                        </tr>

                        @endforeach

                    @endif
                    </tbody>
                </table>
                </div>
            </div>

        <!-- Tarif Tanaman -->

            <div class="col-lg-12 col-md-12 pesan-item filter-air wow fadeInUp">
                <div class="pesan-wrap">
                    <div class="pesan-info">
                        <h4><a href="#">Pengujian Air</a></h4>
                        <p>App</p>
                    </div>
                    <table class="table table-hover text-center">
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
                            <td class="text-left">Rp. {{ number_format($ankimtans->tarif) }},-</td>
                        </tr>

                        @endforeach

                    @endif
                    </tbody>
                </table>
                </div>
            </div>
            
          <div class="col-lg-4 col-md-6 pesan-item filter-analisiskt wow fadeInUp">
            <div class="pesan-wrap">
              <figure>
                <img src="{{('lib/pesan/pesan/carousel1.jpg')}}" class="img-fluid" alt="">
                <a href="{{('lib/pesan/pesan/carousel1.jpg')}}" data-lightbox="pesan" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
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
                <img src="img/pesan/web3.jpg" class="img-fluid" alt="">
                <a href="img/pesan/web3.jpg" class="link-preview" data-lightbox="pesan" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
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