<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vestes extends Model
{
    public function auteur(){
        return $this->belongsTo('App\User', 'id');
    }

}