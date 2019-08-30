<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LettreMotivation;
use Illuminate\Support\Facades\Storage;

class LettreMotivationController extends Controller
{
    public function index()
    {
        $lettres = LettreMotivation::where('annee', date('y'))->get();
        return view('lettremotivation', compact('lettres'));
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'file' => ['file', 'mimes:pdf', 'required', 'max:20000']
        ]);
        
        // Handle File Upload
        if($request->hasFile('file')){
            $fileNameToStore= auth()->user()->prenom.'_'.auth()->user()->name.'.pdf';
            // Upload Image
            $path = $request->file('file')->storeAs('public/lettres_motivation/'.date('Y').'/', $fileNameToStore);
        } else {
            redirect('/lettremotivation')->with('error', 'Aucun fichier soumis');
        }

        // Si l'assistant à déjà uploader une lettre on écrase la précédante
        $already = LettreMotivation::where('id_auteur', auth()->user()->id)->count();
        if($already > 0)
        {
            $lettre = LettreMotivation::where('id_auteur', auth()->user()->id)->first();
            Storage::delete(storage_path('app/public/lettres_motivation/'.date('Y').'/'.$lettre->url));
            $lettre->delete();
        }

        // Create Post
        $lettre = new LettreMotivation;
        $lettre->id_auteur = auth()->user()->id;
        $lettre->annee = date('y');
        $lettre->url = $fileNameToStore;
        $lettre->save();

        return redirect('/lettremotivation')->with('success', 'Lettre envoyée');
    }

    public function get(LettreMotivation $lettre)
    {
        return response()->file(storage_path('app/public/lettres_motivation/'.date('Y').'/'.$lettre->url));
    }
}
