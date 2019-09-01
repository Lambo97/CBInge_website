<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }

    
}
