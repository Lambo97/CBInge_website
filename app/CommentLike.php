<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function comment(){
        return $this->belongsTo('App\CommentForum', 'comment_id');
    }
}
