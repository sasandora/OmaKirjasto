<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kirjoittaja extends Model
{
    //
    protected $table = 'kirjoittaja';
    protected $fillable = [
        'nimi',
        'kuvaus'
    ];


}

