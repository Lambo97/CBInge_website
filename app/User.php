<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'prenom', 'surnom', 'login', 'date_de_naissance', 'adresse', 'ville', 'code_postal', 'gsm', 'entree_inge', 'autre_etudes', 'probleme_sante', 'description', 'photo', 'annee_bapteme', 'droit', 'section', 'citation', 'boisson', 'guindaille', 'titre_guindaille', 'last_login_at', 'surnom_forum'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function connectedNow()
    {
        $timenow = time() - (15*60); // 15 min
        return User::where('last_login_at', '>=', $timenow)->get();
    }

    public static function connectedToday()
    {
        $timeYesterday = time() - (24*60*60); // 24 h
        $dateYesterday = date("Y-m-d H:i:s",$timeYesterday);

        return User::where([['last_login_at', '>=', $dateYesterday], ['droit', '<', 7]])->get();
    }
}
