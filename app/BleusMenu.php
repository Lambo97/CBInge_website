<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BleusMenu extends Model
{
    public static function navMenu(){
        return BleusMenu::where('afficher', '1')->get();
    }
}
