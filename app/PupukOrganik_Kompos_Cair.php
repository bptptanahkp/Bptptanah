<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PupukOrganik_Kompos_Cair extends Model
{
    protected $fillable = [
        'id','jenis_uji', 'metode', 'tarif',
    ];
    public function pemesananuser()
    {
        return $this->belongsToMany('App\PemesananUser','permintaan_pelanggans','id_pupukorganik');
    }
}
