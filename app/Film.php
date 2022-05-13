<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $table = 'oeuvres';

    protected $fillable = [
        'nom',
        'synopsis',
        'video',
        'type',
        'genre',
        'dt_sortie',
        'duree',
        'description',
        'acteur1',
        'acteur2',
        'acteur3',
        'acteur4',
        'realisateur'
    ];
}
