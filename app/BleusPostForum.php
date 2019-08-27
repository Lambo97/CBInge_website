<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BleusPostForum extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }

    public function comment(){
        return $this->hasMany('App\BleusCommentForum', 'post_id');
    }

    public function like(){
        return $this->hasMany('App\BleusPostLike', 'post_id');
    }
}
