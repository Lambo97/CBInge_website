<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dossier;
use App\Fichier;
use App\User;
use App\Cour;


class TuyauxController extends Controller
{
    public function index()
    {
        $categories = array('Cours obligatoire' => ['Bloc 1', 'Bloc 2', 'Bloc 3'], "Cours à option" => ['Chimie et sciences des matériaux', 'Mécanique', 'Physique', 'Electricité et électronique', 'Informatique', 'Constructions', "Géoressources et géologie de l'environnement", 'Génie biomédical', 'Architecture'], 'Cours de Master'=> ['Ingénieur civil des constructions', 'Ingénieur civil des mines et géologue', 'Ingénieur civil en chimie et sciences des matériaux', 'Ingénieur civil électromécanicien', 'Ingénieur civil en aérospatiale', 'Ingénieur civil électricien', 'Ingénieur civil en informatique', 'Ingénieur civil en sciences des données', 'Ingénieur civil physicien', 'Ingénieur civil mécanicien', 'Ingénieur civil biomédical', 'Ingénieur civil architecte']);
        $cours = Cour::orderBy('titre')->get();
        return view('tuyaux.index', compact('cours', 'categories'));
    }

    public function dossier(Dossier $dossier)
    {
        return view('tuyaux.dossier', compact('dossier'));
    }

    public function fichier(Fichier $fichier)
    {
        return response()->file(storage_path('app/public/file/tuyaux/'.$fichier->url));
    }

    /*----------------- Fonctions pour les dossiers ---------------------------*/
    public function add_dossier(Dossier $parent)
    {
        return view('tuyaux.add_dossier', compact('parent'));
    }

    public function store_dossier(Request $request, Dossier $parent)
    {
        $this->validate($request, [
            'titre' => 'required', 
        ]);

        $url = $parent->url.str_replace(" ", "_", strtolower($request->input('titre'))).'/';

        $dossier = new Dossier;
        $dossier->titre = $request->input('titre');
        $dossier->url = $url;
        $dossier->id_proprietaire = auth()->user()->id;
        $dossier->id_parent = $parent->id;
        $dossier->save();

        $dossier = Dossier::where('url', $url)->first();

        return redirect('/tuyaux/dossier/'.$dossier->id)->with('success', 'Dossier créé');
    }

    public function edit_dossier(Dossier $dossier)
    {
        return view('tuyaux.edit_dossier', compact('dossier'));
    }

    public function update_dossier(Request $request, Dossier $dossier)
    {
        $this->validate($request, [
            'titre' => 'required', 
        ]);

        $dossier->titre = $request->input('titre');
        $dossier->save();

        return redirect('/tuyaux/dossier/'.$dossier->id)->with('success', 'Dossier updaté');
    }

    public function destroy_dossier(Dossier $dossier)
    {
        $parent = $dossier->parent;
        if($dossier->sous_dossiers)
        {
            foreach($dossier->sous_dossiers as $sous_dossier)
            {   
                $this->destroy_dossier($sous_dossier);
            }
        }
        if($dossier->fichiers)
        {
            foreach($dossier->fichiers as $fichier)
            {
                $this->destroy_fichier($fichier);
            }
        }
        if(is_dir($dossier->url))
        {
            rmdir($dossier->url);
        }
        $dossier->delete();
        if($parent->titre == auth()->user()->id)
            return redirect('/tuyaux/'.$parent->titre);
        else
            return redirect('/tuyaux/dossier'.$parent->id);
    }

    /*----------------- Fonctions pour les fichiers ---------------------------*/
    public function add_fichier(Dossier $parent)
    {
        return view('tuyaux.add_fichier', compact('parent'));
    }

    public function store_fichier(Request $request, Dossier $parent)
    {
        $this->validate($request, [
            'titre' => 'required',
            'file' => 'required|file|max:1000000'
        ]);

        // Handle File Upload
        if($request->hasFile('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload File
            $path = $request->file('file')->storeAs('public/file/tuyaux/'.$parent->url, $fileNameToStore);
        } else {
            redirect('/tuyaux/add_fichier/'.$parent->id)->with('error', 'Aucun fichier soumis');
        }

        if($request->input('public'))
        {
            $public = 1;
        }
        else
        {
            $public = 0;
        }

        $fichier = new Fichier;
        $fichier->titre = $request->input('titre');
        $fichier->commentaire = $request->input('commentaire');
        $fichier->url = $parent->url.$fileNameToStore;
        $fichier->id_proprietaire = auth()->user()->id;
        $fichier->id_dossier = $parent->id;
        $fichier->size = $request->file('file')->getSize();
        $fichier->public = $public;
        $fichier->save();

        return redirect('/tuyaux/dossier/'.$parent->id)->with('success', 'Dossier créé');
    }

    public function edit_fichier(Fichier $fichier)
    {
        // Check for correct user
        if(auth()->user()->id !== $fichier->id_proprietaire and auth()->user()->droit != 1 ){
            return redirect('/tuyaux/'.auth()->user()->id)->with('error', 'Page non autorisée');
        }
        return view('tuyaux.edit_fichier', compact('fichier'));
    }

    public function update_fichier(Request $request, Fichier $fichier)
    {
        $this->validate($request, [
            'titre' => 'required', 
        ]);

        // Check for correct user
        if(auth()->user()->id !== $fichier->id_proprietaire and auth()->user()->droit != 1 ){
            return redirect('/tuyaux/'.auth()->user()->id)->with('error', "Impossible d'updater le fichier");
        }

        // Handle File Upload
        if($request->hasFile('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload File
            $path = $request->file('file')->storeAs('public/file/tuyaux/'.$fichier->dossier->url, $fileNameToStore);
            unlink(storage_path('app/public/file/perso/'.$fichier->url));
            $fichier->url = $fichier->dossier->url.$fileNameToStore;
        }

        if($request->input('public'))
        {
            $public = 1;
        }
        else
        {
            $public = 0;
        }

        $fichier->titre = $request->input('titre');
        $fichier->commentaire = $request->input('commentaire');
        $fichier->public = $public;
        $fichier->save();

        return redirect('/tuyaux/dossier/'.$fichier->dossier->id)->with('success', 'Dossier updaté');
    }

    public function destroy_fichier(Fichier $fichier)
    {
        // Check for correct user
        if(auth()->user()->id !== $fichier->id_proprietaire and auth()->user()->droit != 1 ){
            return redirect('/tuyaux/'.auth()->user()->id)->with('error', "Impossible d'écraser ce fichier");
        }
        $dossier = $fichier->dossier;
        unlink(storage_path('app/public/file/tuyaux/'.$fichier->url));
        $fichier->delete();
        if($dossier->titre == auth()->user()->id)
            return redirect('/tuyaux/'.$dossier->titre);
        else
            return redirect('/tuyaux/dossier'.$dossier->id);
    }


    /*----------------- Fonctions pour les cours ---------------------------*/
    public function add_cours()
    {
        return view('tuyaux.add_cours');
    }

    public function store_cours(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required', 
            'professeur' => 'required', 
            'code' => 'required|unique:cours',
            'categorie' => 'required',
            'sous_categorie' => 'required' 
        ]);

        $dossier = new Dossier;
        $dossier->titre = $request->input('titre');
        $dossier->url = $request->input('code').'/';
        $dossier->id_proprietaire = auth()->user()->id;
        $dossier->id_parent = null;
        $dossier->save();

        $dossier = Dossier::where('url', $request->input('code').'/')->first();

        $cours = new Cour;
        $cours->titre = $request->input('titre');
        $cours->professeur = $request->input('professeur');
        $cours->code = $request->input('code');
        $cours->categorie = $request->input('categorie');
        $cours->sous_categorie = $request->input('sous_categorie');
        $cours->id_dossier = $dossier->id;
        $cours->save();

        return redirect('/tuyaux')->with('success', 'Cours ajouté');
    }

    public function edit_cours()
    {   
        $categories = array('Cours obligatoire' => ['Bloc 1', 'Bloc 2', 'Bloc 3'], "Cours à option" => ['Chimie et sciences des matériaux', 'Mécanique', 'Physique', 'Electricité et électronique', 'Informatique', 'Constructions', "Géoressources et géologie de l'environnement", 'Génie biomédical', 'Architecture'], 'Cours de Master'=> ['Ingénieur civil des constructions', 'Ingénieur civil des mines et géologue', 'Ingénieur civil en chimie et sciences des matériaux', 'Ingénieur civil électromécanicien', 'Ingénieur civil en aérospatiale', 'Ingénieur civil électricien', 'Ingénieur civil en informatique', 'Ingénieur civil en sciences des données', 'Ingénieur civil physicien', 'Ingénieur civil mécanicien', 'Ingénieur civil biomédical', 'Ingénieur civil architecte']);
        $cours = Cour::orderBy('titre')->get();
        return view('tuyaux.edit_cours', compact('cours', 'categories'));
    }

    public function update_cours(Request $request, Cour $cours)
    {
        $this->validate($request, [
            'titre' => 'required', 
            'professeur' => 'required', 
            'code' => 'required',
            'categorie' => 'required',
            'sous_categorie' => 'required' 
        ]);

        $cours->titre = $request->input('titre');
        $cours->professeur = $request->input('professeur');
        $cours->code = $request->input('code');
        $cours->categorie = $request->input('categorie');
        $cours->sous_categorie = $request->input('sous_categorie');
        $cours->save();

        return redirect('/tuyaux')->with('success', 'Cours updaté');
    }

    public function destroy_cours(Cour $cours)
    {
        $dossier = $fichier->dossier;
        unlink(storage_path('app/public/file/perso/'.$fichier->url));
        $fichier->delete();
        if($dossier->titre == auth()->user()->id)
            return redirect('/file/'.$dossier->titre);
        else
            return redirect('/file/dossier'.$dossier->id);
    }

    public function cours(Cour $cours)
    {
        return response()->json($cours);
    }
}
