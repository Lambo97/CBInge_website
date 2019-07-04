<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'surnom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'date_de_naissance' => ['required', 'date'],
            'adresse' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'code_postal' => ['required', 'integer'],
            'gsm' => ['required', 'string', 'max:12', 'min:10'],
            'entree_inge' => ['required', 'integer', 'min:2000', 'max:'.date('Y')],
            'description' => ['required','string', 'max:4000']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        //Remove space and - from name and firstname
        $prenom_ok = str_replace([' ','-'], '', $data['prenom']);
        $name_ok = str_replace([' ','-'], '', $data['name']);
        // Create the login of the user
        $login = strtolower(substr($prenom_ok, 0, 2)).strtolower($name_ok);
        $year = date('Y');

        $user = User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'surnom' => $data['surnom'],
            'login' => $login,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'date_de_naissance' => date("Y-m-d", strtotime($data['date_de_naissance'])),
            'adresse' => $data['adresse'],
            'ville' => $data['ville'],
            'code_postal' => $data['code_postal'],
            'gsm' => str_replace([' ','-','.','/'], '', $data['gsm']),
            'entree_inge' => $data['entree_inge'],
            'annee_bapteme' => $year,
            'autre_etudes' => $data['autre_etudes'],
            'probleme_sante' => $data['probleme_sante'],
            'description' => $data['description'],
            'droit' => 8,
            'photo' => 'noimage.jpg'
        ]);

        $admins = User::where('droit', 1)->get();
        if($admins){
            Notification::send($admins, new NewUser($user));
        }
        

        return $user;
    }
}
