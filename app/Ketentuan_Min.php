<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ketentuan_Min extends Model
{
    protected $fillable = [
        'id','jenis_cth','jml_min'
    ];
}
