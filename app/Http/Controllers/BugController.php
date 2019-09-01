<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bug;


class BugController extends Controller
{
    /**
     * Display the forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // \Auth::user()->forum_check = PostInsulte::orderBy('created_at', 'desc')->first()->id;
        $bug = Bug::orderBy('created_at','asc')->paginate(10);
        return view('bug.indexbug', compact('bug'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'message' => 'required'
            
            
        ]);

        // Create Post
        $bug = new Bug;
        $bug->message = $request->input('message');
        $bug->lefait = 'Personne';
        $bug->id_auteur = auth()->user()->id;
        $bug->save();

        return redirect('/bug')->with('success', 'Merci d\'avoir signalé un bug!');
    }

    public function edit(Bug $post)
    {
        //Check if post exists before editing
        if (!isset($post)){
            return redirect('/bug')->with('error', 'Pas de bug à modifier');
        }
        // Check for correct user
        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bug')->with('error', "Vous n'avez pas l'autorisation de changer ce bug");
        }
        return view('bug.editbug', compact('post'));
    }

    public function update(Request $request, bug $post)
    {
        $this->validate($request, [
            'message' => 'required'
            
        ]);

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bug')->with('error', "Vous n'avez pas l'autorisation de modifier ce bug");
        }

        $post->message = $request->input('message');
        $post->lefait = $request->input('lefait');
        $post->save();
        return redirect('/bug')->with('success', 'Votre bug a bien été modifié!');

    }

    public function destroy(Bug $post)
    {
        //Check if user exists before deleting
        if (!isset($post))
        {
            return redirect('/bug')->with('error', "Pas de bug trouvé");
        }

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bug')->with('error', "Vous n'avez pas l'autorisation de supprimer ce bug");
        }

        
        $post->delete();
        return redirect('/bug')->with('success', 'Bug supprimé');
    }

   

   

    
}
