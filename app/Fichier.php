<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    public function dossier(){
        return $this->belongsTo('App\Dossier', 'id_dossier');
    }

    public function auteur(){
        return $this->belongsTo('App\User', 'id_proprietaire');
    }
}
