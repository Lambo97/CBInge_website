<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class ComiteController extends Controller
{
    /**
     * Display the current comite.
     *
     * @return \Illuminate\Http\Response
     */
    public function actuel()
    {
        $year = year();

        // Président
        $president = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Président');
        })->first();

        // Trésorier
        $tresorier = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Tresorier');
        })->first();

        // Secrétaire
        $secretaire = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Secretaire');
        })->first();

        // Vice président
        $vp = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Vice-président');
        })->first();

        //Présidente
        $presidente = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Présidente');
        })->first();

        //Maître des chants
        $mdc = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Maître des chants');
        })->first();

        //Délégué AGEL
        $da = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Délégué AGEL');
        })->first();

        //Sans Fonctions
        $sansFonctions = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Togé sans fonction');
        })->orderBy('name')->get();

        //Assistants
        $assistants = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Assistant');
        })->orderBy('name')->get();



        return view('comite.actuel', compact('year', 'president', 'tresorier', 'secretaire', 'vp', 'presidente', 'mdc', 'da', 'sansFonctions', 'assistants'));
    }


    public function anciens()
    {
        $year = year();

        $comites = DB::table('users')->join('fonction_user', 'users.id', '=', 'fonction_user.user_id')->join('fonctions', 'fonction_user.fonction_id', '=', 'fonctions.id')->select('users.id', 'name', 'prenom', 'surnom', 'nom', 'annee')->get();

        return view('comite.anciens', compact('comites'));
    }


    public function webmaster()
    {
        $year = year();

        $webmasters = User::whereHas('fonctions', function($query){
            $query->where('nom', 'Webmaster');
        })->distinct()->orderBy('annee_bapteme', 'desc')->get();

        foreach($webmasters as $webmaster)
        {
            $fonctions_annees = $webmaster->fonctions()->where('nom', 'Webmaster')->orderBy('pivot_annee')->get();
            $webmaster->annee_debut = $fonctions_annees->first()->pivot['annee'];
            $webmaster->annee_fin = $fonctions_annees->last()->pivot['annee'];;
        }

        return view('comite.webmaster', compact('webmasters', 'year'));
    }
}
