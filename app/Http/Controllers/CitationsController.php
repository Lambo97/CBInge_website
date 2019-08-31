<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCitation;
use App\CitationLike;


class CitationsController extends Controller
{
    /**
     * Display the forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // \Auth::user()->forum_check = PostInsulte::orderBy('created_at', 'desc')->first()->id;
        $citation = PostCitation::orderBy('score','desc')->paginate(10);
        return view('citations.indexcitation', compact('citation'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'message' => 'required'
            
            
        ]);

        // Create Post
        $citation = new PostCitation;
        $citation->message = $request->input('message');
        $citation->score = 0;
        $citation->id_auteur = auth()->user()->id;
        $citation->save();

        return redirect('/citations')->with('success', 'Citation envoyée');
    }

    public function edit(PostCitation $post)
    {
        //Check if post exists before editing
        if (!isset($post)){
            return redirect('/citations')->with('error', 'Pas de citation à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/citations')->with('error', "Vous n'avez pas l'autorisation de modifier cette citation");
        }
        return view('citations.editcitation', compact('post'));
    }

    public function update(Request $request, PostCitation $post)
    {
        $this->validate($request, [
            'message' => 'required'
            
        ]);

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/citations')->with('error', "Vous n'avez pas l'autorisation de modifier cette citation");
        }

        $post->message = $request->input('message');
        
        $post->save();
        return redirect('/citations')->with('success', 'Citation updatée');

    }

    public function destroy(PostCitation $post)
    {
        //Check if user exists before deleting
        if (!isset($post))
        {
            return redirect('/citations')->with('error', "Pas de citation trouvée");
        }

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/citations')->with('error', "Vous n'avez pas l'autorisation de supprimer cette citation");
        }

        
        $post->delete();
        return redirect('/citations')->with('success', 'Citation supprimée');
    }

   

    public function like(PostCitation $post)
    {
        $likes = CitationLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == 1)
            {
                $like->delete();
                $post->score = $post->like->where('value', 1)->count() - $post->like->where('value', -1)->count();
                PostCitation::where('id', $post->id)->update(['score' => $post->score]);
                return response()->json(['score' => $post->score, 'nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {
                $like->value = 1;
                $like->save();
                $post->score = $post->like->where('value', 1)->count() - $post->like->where('value', -1)->count();
                PostCitation::where('id', $post->id)->update(['score' => $post->score]);
                return response()->json(['score' => $post->score, 'nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => TRUE, 'is_dislike' => FALSE]);
            }
        }
        else
        {
        $like = new CitationLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        $post->score = $post->like->where('value', 1)->count() - $post->like->where('value', -1)->count();
        PostCitation::where('id', $post->id)->update(['score' => $post->score]);
        return response()->json(['score' => $post->score, 'nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(),'is_like' => TRUE, 'is_dislike' => FALSE]);
    }

    public function dislike(PostCitation $post)
    {   
        $likes = CitationLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == -1)
            {   
                $like->delete();
                $post->score = $post->like->where('value', 1)->count() - $post->like->where('value', -1)->count();
                PostCitation::where('id', $post->id)->update(['score' => $post->score]);
                return response()->json(['score' => $post->score, 'nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {   
                $like->value = -1;
                $like->save();
                $post->score = $post->like->where('value', 1)->count() - $post->like->where('value', -1)->count();
                PostCitation::where('id', $post->id)->update(['score' => $post->score]);
                return response()->json(['score' => $post->score, 'nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
            }
        }
        
        $like = new CitationLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();       
        $post->score = $post->like->where('value', 1)->count() - $post->like->where('value', -1)->count();
        PostCitation::where('id', $post->id)->update(['score' => $post->score]);
        return response()->json(['score' => $post->score, 'nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
    }

    
}
