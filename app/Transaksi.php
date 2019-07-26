<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'id','nomorSPA', 'nama', 'totalHarga',
    ];


    public function pemesananuser()
    {
        return $this->belongsTo('App\PemesananUser');
    }

    public function permintaanpelanggan()
    {
        return $this->hasMany('App\PermintaanPelanggan');
    }
}
