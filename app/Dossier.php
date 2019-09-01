<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    public function parent(){
        return $this->belongsTo('App\Dossier', 'id_parent');
    }

    public function sous_dossiers(){
        return $this->hasMany('App\Dossier', 'id_parent');
    }

    public function fichiers(){
        return $this->hasMany('App\Fichier', 'id_dossier');
    }

}
