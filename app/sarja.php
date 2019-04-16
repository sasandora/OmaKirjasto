<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sarja extends Model
{
    //
    protected $table = 'sarja';
    protected $fillable = [
        'nimi',
        'kuvaus'
    ];

    public function teos(){
        return $this->belongsToMany(teos::class);
    }

}
