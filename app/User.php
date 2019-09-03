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
        $dateNow = date("Y-m-d H:i:s",$timenow);
        return User::where([['last_login_at', '>=', $dateNow],['droit', '<', 7]])->get();
    }

    public static function bleusConnectedNow()
    {
        $timenow = time() - (15*60); // 15 min
        $dateNow = date("Y-m-d H:i:s",$timenow);
        return User::where([['last_login_at', '>=', $dateNow],['droit', 7]])->get();
    }

    public static function connectedToday()
    {
        $timeYesterday = time() - (24*60*60); // 24 h
        $dateYesterday = date("Y-m-d H:i:s",$timeYesterday);

        return User::where([['last_login_at', '>=', $dateYesterday], ['droit', '<', 7]])->get();
    }

    public static function bleusConnectedToday()
    {
        $timeYesterday = time() - (24*60*60); // 24 h
        $dateYesterday = date("Y-m-d H:i:s",$timeYesterday);

        return User::where([['last_login_at', '>=', $dateYesterday], ['droit', 7]])->get();
    }

    public static function anniversaire()
    {

        $anniversaires = User::whereDay('date_de_naissance', date('d'))->whereMonth('date_de_naissance', date('m'))->get();

        foreach($anniversaires as $user)
        {
            $user->age = date('Y') - date('Y' ,strtotime($user->date_de_naissance));
        }
        return $anniversaires;
    }

    public function parrains()
    {
        return $this->belongsToMany('App\User', 'bleu_parrain', 'bleu_id', 'parrain_id');
    }

    public function bleus()
    {
        return $this->belongsToMany('App\User', 'bleu_parrain', 'parrain_id', 'bleu_id');
    }

    public function fonctions()
    {
        return $this->belongsToMany('App\Fonction')->withPivot('annee');
    }

    public function sendPasswordResetNotification($token)
    {
        $from = "comite@cbinge.com";
        $to = $this->email;
        $subject = "Reset Password";
        $message = "Pour réinitialiser votre mot de passe, cliquez sur ce lien: https://www.cbinge.com/password/reset/".$token;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
    }

}
