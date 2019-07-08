<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalisisKimiaTanah extends Model
{
    protected $fillable = [
        'jenis_uji', 'metode', 'tarif',
    ];
}
