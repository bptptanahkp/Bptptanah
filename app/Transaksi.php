<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'id','pemesanan_id', 'nama', 'totalHarga',
    ];


    public function pemesananuser()
    {
        return $this->hasOne('App\PemesananUser');
    }

    public function permintaanpelanggan()
    {
        return $this->hasMany('App\PermintaanPelanggan');
    }
}
