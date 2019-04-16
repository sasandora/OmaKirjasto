<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kuva extends Model
{
    //
    protected $table = 'kuva';
    protected $fillable = [
        'url',
        'kirjaid'
    ];

}
