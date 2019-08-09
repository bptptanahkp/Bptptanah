<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pupukkimia extends Model
{
    protected $fillable = [
        'id','jenis_uji', 'metode', 'tarif',
    ];

    public function pemesananuser()
    {
        return $this->belongsToMany('App\PemesananUser','permintaan_pelanggans','id_pupukkimia');
    }
}
