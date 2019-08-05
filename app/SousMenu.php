<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousMenu extends Model
{
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
