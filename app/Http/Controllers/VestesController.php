<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vestes;


class VestesController extends Controller
{
    /**
     * Display the forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // \Auth::user()->forum_check = PostInsulte::orderBy('created_at', 'desc')->first()->id;
        $veste = Vestes::orderBy('nom','asc')->paginate(10);
        return view('vestes.indexvestes', compact('veste'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'taille' => 'required'
            
            
        ]);

        // Create Post
        $vestes = new Vestes;
        $vestes->taille = $request->input('taille');
        if(Vestes::where('id' ,auth()->user()->id)->first())
        {
        return redirect('/vestes')->with('error', 'Vous avez déjà choisi une veste!');
        }
        $vestes->id = auth()->user()->id;
        $vestes->nom = auth()->user()->name;
        $vestes->save();

        return redirect('/vestes')->with('success', 'Votre veste a bien étée ajoutée!');
    }

    public function edit(Vestes $post)
    {
        //Check if post exists before editing
        if (!isset($post)){
            return redirect('/vestes')->with('error', 'Pas de veste à modifier');
        }
        // Check for correct user
        if(auth()->user()->id !== $post->id and auth()->user()->droit > 1)
        {
            return redirect('/vestes')->with('error', "Vous n'avez pas l'autorisation de changer ce choix de veste");
        }
        return view('vestes.editvestes', compact('post'));
    }

    public function update(Request $request, Vestes $post)
    {
        $this->validate($request, [
            'taille' => 'required'
            
        ]);

        if(auth()->user()->id !== $post->id and auth()->user()->droit > 1)
        {
            return redirect('/vestes')->with('error', "Vous n'avez pas l'autorisation de modifier ce choix de veste");
        }

        $post->taille = $request->input('taille');
        
        $post->save();
        return redirect('/vestes')->with('success', 'Votre choix a bien été modifié!');

    }

    public function destroy(Vestes $post)
    {
        //Check if user exists before deleting
        if (!isset($post))
        {
            return redirect('/vestes')->with('error', "Pas de veste trouvée");
        }

        if(auth()->user()->id !== $post->id and auth()->user()->droit > 1)
        {
            return redirect('/vestes')->with('error', "Vous n'avez pas l'autorisation de supprimer ce choix de veste");
        }

        
        $post->delete();
        return redirect('/vestes')->with('success', 'Choix de veste supprimé');
    }

   

   

    
}
