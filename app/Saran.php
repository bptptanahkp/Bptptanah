<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    protected $fillable = [
        'nama','mail', 'subject', 'pesan',
    ];
}
