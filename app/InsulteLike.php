<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsulteLike extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function post(){
        return $this->belongsTo('App\PostInsulte', 'post_id');
    }
}
