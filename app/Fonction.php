<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('annee');
    }
}
