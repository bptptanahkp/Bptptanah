<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalisisKimiaTanah extends Model
{
    protected $fillable = [
        'id','jenis_uji', 'metode', 'tarif',
    ];

    public function pemesananuser()
    {
        return $this->hasMany('App\PemesananUser');
    }
}
