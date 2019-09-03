<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delations extends Model
{
  public function auteur(){
      return $this->belongsTo('App\User', 'id_auteur');
  }
}
