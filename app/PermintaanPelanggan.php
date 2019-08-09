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

    
    
}
