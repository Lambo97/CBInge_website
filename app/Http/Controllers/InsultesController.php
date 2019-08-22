<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostInsulte;
use App\InsulteLike;


class InsultesController extends Controller
{
    /**
     * Display the forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // \Auth::user()->forum_check = PostInsulte::orderBy('created_at', 'desc')->first()->id;
        $insulte = PostInsulte::orderBy('ancre','desc')->orderBy('updated_at','desc')->paginate(10);
        return view('insultes.indexinsulte', compact('insulte'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'insulted' =>'required'
            
        ]);
        
       


        // Create Post
        $insulte = new PostInsulte;
        $insulte->message = $request->input('message');
        $insulte->insulted = $request->input('insulted');
        $insulte->id_auteur = auth()->user()->id;
        $insulte->save();

        // Send notification
        \OneSignal::sendNotificationToSegment(
            auth()->user()->surnom_forum." a envoyé un message !",
            $segment = "Comite",
            $url = "/insulte"
        );

        return redirect('/insultes')->with('success', 'Insulte envoyée');
    }

    public function edit(PostInsulte $post)
    {
        //Check if post exists before editing
        if (!isset($post)){
            return redirect('/insulte')->with('error', 'Pas d\'insulte à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/insulte')->with('error', "Vous n'avez pas l'autorisation de modifier cette insulte");
        }
        return view('insultes.editinsulte', compact('post'));
    }

    public function update(Request $request, PostInsulte $post)
    {
        $this->validate($request, [
            'message' => 'required',
            'insulted' => 'required'
        ]);

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/insultes')->with('error', "Vous n'avez pas l'autorisation de modifier cette insulte");
        }

        $post->message = $request->input('message');
        $post->insulted = $request->input('insulted');
        $post->save();
        return redirect('/insultes')->with('success', 'Insulte updaté');

    }

    public function destroy(PostInsulte $post)
    {
        //Check if user exists before deleting
        if (!isset($post))
        {
            return redirect('/insultes')->with('error', "Pas d\'insulte trouvée");
        }

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/insultes')->with('error', "Vous n'avez pas l'autorisation de supprimer cette insulte");
        }

        
        $post->delete();
        return redirect('/insultes')->with('success', 'Insulte supprimée');
    }

   

    public function like(PostInsulte $post)
    {
        $likes = InsulteLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == 1)
            {
                $like->delete();
                return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {
                $like->value = 1;
                $like->save();
                return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => TRUE, 'is_dislike' => FALSE]);
            }
        }
        else
        {
        $like = new InsulteLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(),'is_like' => TRUE, 'is_dislike' => FALSE]);
    }

    public function dislike(PostInsulte $post)
    {
        $likes = InsulteLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == -1)
            {
                $like->delete();
                return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {
                $like->value = -1;
                $like->save();
                return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
            }
        }
        $like = new InsulteLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();
        return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
    }

    
}
