<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananUser extends Model
{
    protected $fillable = [
        'nomorSPA','nama', 'instansi', 'alamat','ntelp','contohygdianalisis',
        'unsurygdianalisis','jml_contoh','bentuk','asal_contoh','merk'
    ];


    public function transaksi()
    {
        return $this->belongsTo('App\Transaksi');
    }

    public function permintaanpelanggan()
    {
        return $this->hasMany('App\PermintaanPelanggan','pemesanan_id','id');
    }

    // public function ankimtan()
    // {
    //     return $this->belongsToMany('App\AnalisisKimiaTanah')->withPivot(['']);
    // }

    // public function pukorkom()
    // {
    //     return $this->belongsToMany('App\PupukOrganik_Kompos_Cair','permintaan_pelanggans','id_pupukorganik');
    // }

    // public function pupukkimia()
    // {
    //     return $this->belongsToMany('App\Pupukkimia','permintaan_pelanggans','id_pupukkimia');
    // }

    // public function tanaman()
    // {
    //     return $this->belongsToMany('App\AnilisisKimiaTanah','permintaan_pelanggans','id_tanaman');
    // }

    // public function pengair()
    // {
    //     return $this->belongsToMany('App\PengujianAir','permintaan_pelanggans','id_pengujianair');
    // }

    
}
