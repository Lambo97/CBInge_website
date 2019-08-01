<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentForum extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }

    public function post(){
        return $this->belongsTo('App\PostForum', 'post_id');
    }
}
