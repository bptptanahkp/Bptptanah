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
        return $this->belongsTo('App\PemesananUser','pemesanan_id');
    }

    
}
