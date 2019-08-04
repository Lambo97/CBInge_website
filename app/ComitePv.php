<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComitePv extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
