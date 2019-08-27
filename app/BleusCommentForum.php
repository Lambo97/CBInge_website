<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BleusCommentForum extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }

    public function post(){
        return $this->belongsTo('App\BleusPostForum', 'post_id');
    }

    public function like(){
        return $this->hasMany('App\BleusCommentLike', 'comment_id');
    }
}
