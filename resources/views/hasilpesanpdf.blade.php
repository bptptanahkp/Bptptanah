<!DOCTYPE html>
<html>
  <body>  
          <div class="header">
              <table >
                  <tr>
                      <td><b>Laboratorium Tanah</b></td>
                  </tr>

                  <tr>
                      <td><b>Balai Pengkajian Teknologi Pertanian Jawa Timur</b></td>
                  </tr>
                  <tr>
                    <td><b>Permintaan Pelanggan</b></td>
                  </tr>
              </table>
          </div>
              <table border="0" class="tabel">
                      <tr>
                            <td width="150px">Nomor </td>
                            <td>:&nbsp;{{$pesan->pemesanan_id}} </td>
                      </tr>

                      <tr>
                            <td width="150px">Nama</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->nama}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Instansi/Perusahaan</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->instansi}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Alamat</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->alamat}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Nomor Telp</td>
                            <td>:&nbsp;+62{{$pesan->pemesananuser->ntelp}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Contoh yang Dianalisis</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->contohygdianalisis}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Unsur yang Dianalisis</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->unsurygdianalisis}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Jumlah Contoh</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->jml_contoh}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Bentuk</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->bentuk}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Asal Contoh</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->asal_contoh}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Merk</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->merk}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Tanggal Pesan</td>
                            <td>:&nbsp;{{$pesan->pemesananuser->created_at}}</td>
                      </tr>

                      <tr>
                            <td width="150px">Tanggal Diterima</td>
                            <td>:</td>
                      </tr>
                      <tr>
                        <td width="150px">Total Bayar</td>
                        <td>:&nbsp;Rp. {{number_format($pesan->totalHarga)}},-</td>
                      </tr>
              </table>

              <br>
              <p style="text-align: center"> Data yang dipilih </p>
                <table class="table table-bordered table-responsive-sm tabel" border="1">
                            <tr>
                              <td rowspan="2" width="23px" class="tengah">No</td>
                              <td colspan="5" align="center" width="390px">Jenis Uji</td>
                              <td rowspan="2" class="tengah">Metode</td>
                              <td rowspan="2" class="tengah">Tarif (Rp.)</td>
                              
                            </tr>
                            <tr>
                                <th align="center">Analisis Kimia Tanah Rutin</th>
                                <th align="center">Pupuk organik/Kompos/Cair</th>
                                <th width="95px" align="center">Pupuk Kimia (Anorganik) / Batuan Mineral</th>
                                <th width="61" class="tengah2">Tanaman</th>
                                <th class="tengah2">Pengujian Air</th>
                            </tr>
                    <tbody>
                    @php $no=0; @endphp
                        @foreach($permintaan as $datas)
                            @php $no++; @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$datas->id_ankimtan ? $datas->ankimtan->jenis_uji : '-'}}</td>
                            <td>{{$datas->id_pupukkimia ? $datas->pupukkimia->jenis_uji : '-'}}</td>
                            <td>{{$datas->id_pupukorganik ? $datas->pukorkom->jenis_uji : '-'}}</td>
                            <td>{{$datas->id_tanaman ? $datas->tanaman->jenis_uji : '-'}}</td>
                            <td>{{$datas->id_pengujianair ? $datas->pengair->jenis_uji : '-'}}</td>
                            <td>
                                @if ($datas->ankimtan)
                                    {{$datas->ankimtan->metode ? $datas->ankimtan->metode : '-'}}
                                @elseif ($datas->pupukkimia)
                                    {{$datas->pupukkimia->metode ? $datas->pupukkimia->metode : '-'}}
                                @elseif ($datas->pukorkom)
                                    {{$datas->pukorkom->metode ? $datas->pukorkom->metode : '-'}}
                                @elseif ($datas->tanaman)
                                    {{$datas->tanaman->metode ? $datas->tanaman->metode : '-'}}
                                @else ($datas->pengair)
                                    {{$datas->pengair->metode ? $datas->pengair->metode : '-'}}
                                @endif
                            </td>
                            <td>{{number_format($datas->harga)}},-</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </body>
<style>
.header{
text-align: center;
font-family: Times;
font-size: 14px;

}
.tabel{

  font-family: Times;
  font-size: 12px;
}
.tengah{
  display: table-cell;
  text-align: center;
  line-height: 65px;
}
.tengah2{
display: table-cell;
  text-align: center;
  line-height: 50px;

}
</style>
</html>
