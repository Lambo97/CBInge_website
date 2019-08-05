<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function sousMenus(){
        return $this->hasMany('App\SousMenu', 'id_menu');
    }

    public static function navMenu(){
        return Menu::where(function ($query) {
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
