<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananUser extends Model
{
    protected $fillable = [
        'nomorSPA','nama', 'instansi', 'alamat','ntelp','contohygdianalisis',
        'unsurygdianalisis','jml_contoh','bentuk','asal_contoh','merk'
    ];



    public function permintaanpelanggan()
    {
        return $this->hasMany('App\PermintaanPelanggan','pemesanan_id','id');
    }

    

    
}
