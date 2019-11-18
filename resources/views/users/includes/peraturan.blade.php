<!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Prosedur Pesan Uji Tanah</h3>
        </header>

        <div class="row">

          <div class="col-lg-12 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            @if($peraturan)
                @foreach($peraturan as $peraturans)
                    <h4 class="title"><a>{{$peraturans->id}}. {{$peraturans->peraturan}}</a></h4>
                @endforeach
            @endif
            <div class="col-lg-11 box wow bounceInUp float-right" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <table class="table table-borderless table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Contoh</th>
                                <th>Jumlah Minimal</th>
                            </tr>
                        </thead>
                    <tbody>
                    @if($ketentuan_min)

                        @foreach($ketentuan_min as $k_mins => $value)

                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->jenis_cth}}</td>
                            <td>:  {{$value->jml_min}}</td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->