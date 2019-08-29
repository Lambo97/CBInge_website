<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $comites = array();
        for($y = $year; $y > 1980; $y--)
        {
            $comite = array();
            $comite['annee'] = $y;

            // Président
            $comite['president'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Président');
            })->first();

            // Trésorier
            $comite['tresorier'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Tresorier');
            })->first();

            // Secrétaire
            $comite['secretaire'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Secretaire');
            })->first();

            // Vice président
            $comite['vp'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Vice-président');
            })->first();

            //Présidente
            $comite['presidente'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Présidente');
            })->first();

            //Maître des chants
            $comite['mdc'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Maître des chants');
            })->first();

            //Délégué AGEL
            $comite['da'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Délégué AGEL');
            })->first();

            //Sans Fonctions
            $comite['sansFonctions'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Togé sans fonction');
            })->orderBy('name')->get();

            //Assistants
            $comite['assistants'] = User::whereHas('fonctions', function($query) use ($y){
                $query->where('annee', $y)->where('nom', 'Assistant');
            })->orderBy('name')->get();

            array_push($comites, $comite);
        }


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
