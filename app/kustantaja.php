<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kustantaja extends Model
{
    //
    protected $table = 'kustantaja';
    protected $fillable = [
        'nimi',
        'kotipaikka'
    ];
}
