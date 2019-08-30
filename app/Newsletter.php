<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }
}
