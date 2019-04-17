<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teos extends Model
{
    // Taulun nimi
    protected $table = 'teos';
    protected $fillable = [
        'alkupenimi',
        'suominimi',
        'painos',
        'kunto',
        'tyyppi',
        'hinta',
        'suomentaja',
        'kirjoittajaid',
        'kustantajaid'

    ];

    public function sarja()
    {
        return $this->belongsToMany(sarja::class);
    }
}
