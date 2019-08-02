<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostForum extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id_auteur');
    }

    public function comment(){
        return $this->hasMany('App\CommentForum', 'post_id');
    }

    public function like(){
        return $this->hasMany('App\PostLike', 'post_id');
    }
}
