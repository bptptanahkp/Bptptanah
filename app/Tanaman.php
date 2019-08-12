<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $fillable = [
        'id','jenis_uji', 'metode', 'tarif',
    ];

    public function permintaanpelanggan()
    {
        return $this->hasMany('App\PermintaanPelanggan');
    }
}
