<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dossier;
use App\Fichier;
use App\User;


class FileController extends Controller
{
    public function index($user_id)
    {
        $dossier = Dossier::where('titre', $user_id)->first();
        // Check for correct user
        if(auth()->user()->id !== $dossier->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Page non autorisée');
        }

        return view('file.index', compact('dossier'));
    }

    public function dossier(Dossier $dossier)
    {
        // Check for correct user
        if(auth()->user()->id !== $dossier->id_proprietaire and $dossier->public == 0){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Page non autorisée');
        }

        return view('file.index', compact('dossier'));
    }

    public function fichier(Fichier $fichier)
    {
        // Check for correct user
        if(auth()->user()->id !== $dossier->id_proprietaire and $dossier->public == 0){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Page non autorisée');
        }
        return response()->file(storage_path('app/public/file/perso/'.$fichier->url));
    }

    /*----------------- Fonctions pour les dossiers ---------------------------*/
    public function add_dossier(Dossier $parent)
    {
        // Check for correct user
        if(auth()->user()->id !== $parent->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Impossible de créer un dossier ici');
        }
        return view('file.add_dossier', compact('parent'));
    }

    public function store_dossier(Request $request, Dossier $parent)
    {
        $this->validate($request, [
            'titre' => 'required', 
        ]);

        // Check for correct user
        if(auth()->user()->id !== $parent->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Impossible de créer un dossier ici');
        }

        $url = $parent->url.str_replace(" ", "_", strtolower($request->input('titre'))).'/';

        $dossier = new Dossier;
        $dossier->titre = $request->input('titre');
        $dossier->url = $url;
        $dossier->id_proprietaire = auth()->user()->id;
        $dossier->id_parent = $parent->id;
        $dossier->save();

        $dossier = Dossier::where('url', $url)->first();

        return redirect('/file/dossier/'.$dossier->id)->with('success', 'Dossier créé');
    }

    public function edit_dossier(Dossier $dossier)
    {
        // Check for correct user
        if(auth()->user()->id !== $dossier->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Page non autorisée');
        }
        return view('file.edit_dossier', compact('dossier'));
    }

    public function update_dossier(Request $request, Dossier $dossier)
    {
        $this->validate($request, [
            'titre' => 'required', 
        ]);

        // Check for correct user
        if(auth()->user()->id !== $dossier->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', "Impossible d'updater le dossier");
        }

        $dossier->titre = $request->input('titre');
        $dossier->save();

        return redirect('/file/dossier/'.$dossier->id)->with('success', 'Dossier updaté');
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
            return redirect('/file/'.$parent->titre);
        else
            return redirect('/file/dossier'.$parent->id);
    }

    /*----------------- Fonctions pour les fichiers ---------------------------*/
    public function add_fichier(Dossier $parent)
    {
        // Check for correct user
        if(auth()->user()->id !== $parent->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Impossible de créer un dossier ici');
        }
        return view('file.add_fichier', compact('parent'));
    }

    public function store_fichier(Request $request, Dossier $parent)
    {
        $this->validate($request, [
            'titre' => 'required',
            'file' => 'required|file|max:1000000'
        ]);

        // Check for correct user
        if(auth()->user()->id !== $parent->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Impossible de créer un fichier ici');
        }

        // Handle File Upload
        if($request->hasFile('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload File
            $path = $request->file('file')->storeAs('public/file/perso/'.$parent->url, $fileNameToStore);
        } else {
            redirect('/file/add_fichier/'.$parent->id)->with('error', 'Aucun fichier soumis');
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

        return redirect('/file/dossier/'.$parent->id)->with('success', 'Dossier créé');
    }

    public function edit_fichier(Fichier $fichier)
    {
        // Check for correct user
        if(auth()->user()->id !== $fichier->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', 'Page non autorisée');
        }
        return view('file.edit_fichier', compact('fichier'));
    }

    public function update_fichier(Request $request, Fichier $fichier)
    {
        $this->validate($request, [
            'titre' => 'required', 
        ]);

        // Check for correct user
        if(auth()->user()->id !== $fichier->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', "Impossible d'updater le fichier");
        }

        // Handle File Upload
        if($request->hasFile('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload File
            $path = $request->file('file')->storeAs('public/file/perso/'.$fichier->dossier->url, $fileNameToStore);
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

        return redirect('/file/dossier/'.$fichier->dossier->id)->with('success', 'Dossier updaté');
    }

    public function destroy_fichier(Fichier $fichier)
    {
        // Check for correct user
        if(auth()->user()->id !== $fichier->id_proprietaire){
            return redirect('/file/'.auth()->user()->id)->with('error', "Impossible d'écraser ce fichier");
        }
        $dossier = $fichier->dossier;
        unlink(storage_path('app/public/file/perso/'.$fichier->url));
        $fichier->delete();
        if($dossier->titre == auth()->user()->id)
            return redirect('/file/'.$dossier->titre);
        else
            return redirect('/file/dossier'.$dossier->id);
    }
}
