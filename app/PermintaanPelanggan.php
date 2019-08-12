<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermintaanPelanggan extends Model
{
    protected $fillable = [
        'id',
        'pemesanan_id','id_ankimtan', 'id_pupukkimia', 'id_pupukorganik',
        'id_tanaman','id_pengujianair','harga',
    ];

    public function ankimtan()
    {
        return $this->belongsTo('App\AnalisisKimiaTanah','id_ankimtan');
    }

    public function pukorkom()
    {
        return $this->belongsTo('App\PupukOrganik_Kompos_Cair','id_pupukorganik');
    }

    public function pupukkimia()
    {
        return $this->belongsTo('App\Pupukkimia','id_pupukkimia');
    }

    public function tanaman()
    {
        return $this->belongsTo('App\Tanaman','id_tanaman');
    }

    public function pengair()
    {
        return $this->belongsTo('App\PengujianAir','id_pengujianair');
    }
    
}
