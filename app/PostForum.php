<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostForum extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }
}
