<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCitation extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }
    
    

    public function like(){
        return $this->hasMany('App\CitationLike', 'post_id');
    }
}
