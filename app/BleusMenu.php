<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BleusMenu extends Model
{
 

    public static function navMenu(){
        return BleusMenu::where(function ($query) {
                if (\Auth::check())
                {
                    $query->where('droit', '0')
                      ->orWhere('droit', '>=', \Auth::user()->droit);
                }
                else
                {
                    $query->where('droit', '0');
                }
            })
            ->where('afficher', '1')->get();
    }
}
