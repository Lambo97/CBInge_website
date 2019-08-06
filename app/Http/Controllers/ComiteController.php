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
        $year = date('Y');
        if(date('m')<9)
        {
            $year = $year-1;
        }

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

        //Sans Fonctions
        $sansFonctions = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Togé sans fonction');
        })->orderBy('name')->get();

        //Assistants
        $assistants = User::whereHas('fonctions', function($query) use ($year){
            $query->where('annee', $year)->where('nom', 'Assistant');
        })->orderBy('name')->get();



        return view('comite.actuel', compact('year', 'president', 'tresorier', 'secretaire', 'vp', 'presidente', 'sansFonctions', 'assistants'));
    }


    public function anciens()
    {
        $year = date('Y');
        if(date('m')<9)
        {
            $year = $year-1;
        }

        
        $comites = array();
        for($y = $year-1; $y > 2016; $y--)
        {
            $comite = array();
            $comite['annee'] = $y;

            // Président
            $comite['president'] = User::whereHas('fonctions', function($query) use ($year){
                $query->where('annee', $year)->where('nom', 'Président');
            })->first();

            // Trésorier
            $comite['tresorier'] = User::whereHas('fonctions', function($query) use ($year){
                $query->where('annee', $year)->where('nom', 'Tresorier');
            })->first();

            // Secrétaire
            $comite['secretaire'] = User::whereHas('fonctions', function($query) use ($year){
                $query->where('annee', $year)->where('nom', 'Secretaire');
            })->first();

            // Vice président
            $comite['vp'] = User::whereHas('fonctions', function($query) use ($year){
                $query->where('annee', $year)->where('nom', 'Vice-président');
            })->first();

            //Présidente
            $comite['presidente'] = User::whereHas('fonctions', function($query) use ($year){
                $query->where('annee', $year)->where('nom', 'Présidente');
            })->first();

            //Sans Fonctions
            $comite['sansFonctions'] = User::whereHas('fonctions', function($query) use ($year){
                $query->where('annee', $year)->where('nom', 'Togé sans fonction');
            })->orderBy('name')->get();

            //Assistants
            $comite['assistants'] = User::whereHas('fonctions', function($query) use ($year){
                $query->where('annee', $year)->where('nom', 'Assistant');
            })->orderBy('name')->get();

            array_push($comites, $comite);
        }


        return view('comite.anciens', compact('comites'));
    }
}
