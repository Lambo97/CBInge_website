<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BleusPostLike extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function post(){
        return $this->belongsTo('App\BleusPostForum', 'post_id');
    }
}
