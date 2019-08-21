<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPesanUser extends Model
{
    //
     protected $fillable = [
        'nomorSPA','nama', 'instansi', 'alamat','ntelp','contohygdianalisis',
        'unsurygdianalisis','jml_contoh','bentuk','asal_contoh','merk'
    ];
}
