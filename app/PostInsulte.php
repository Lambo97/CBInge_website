<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostInsulte extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }

    

    public function like(){
        return $this->hasMany('App\InsulteLike', 'post_id');
    }
}
