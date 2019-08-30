<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LettreMotivation extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }
}
