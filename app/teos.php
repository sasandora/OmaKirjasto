<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teos extends Model
{
    // Taulun nimi
    protected $table = 'teos';

    public function sarja(){
        return $this->belongsToMany(sarja::class);
    }


}

