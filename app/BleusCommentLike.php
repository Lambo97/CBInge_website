<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BleusCommentLike extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function comment(){
        return $this->belongsTo('App\BleusCommentForum', 'comment_id');
    }
}
