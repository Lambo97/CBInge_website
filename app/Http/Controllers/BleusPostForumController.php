<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BleusPostForum;
use App\BleusPostLike;


class BleusPostForumController extends Controller
{
    /**
     * Display the forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Auth::user()->forum_bleu_check = BleusPostForum::orderBy('created_at', 'desc')->first()->id;
        $posts = BleusPostForum::orderBy('ancre','desc')->orderBy('updated_at','desc')->paginate(10);
        return view('bleus.forum.index', compact('posts'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'photo' => ['image','nullable', 'max:1999']
        ]);
        
        // Handle File Upload
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/forum', $fileNameToStore);
        } else {
            $fileNameToStore = NULL;
        }


        // Create Post
        $post = new BleusPostForum;
        $post->message = $request->input('message');
        $post->id_auteur = auth()->user()->id;
        $post->photo = $fileNameToStore;
        $post->save();

        // Send notification
        \OneSignal::sendNotificationToSegment(
            auth()->user()->surnom_forum." a envoyé un message sur le forum des bleus!",
            $segment = "Comite",
            $url = "/bleus/forum"
        );

        return redirect('/bleus/forum')->with('success', 'Message envoyé');
    }

    public function edit(BleusPostForum $post)
    {
        //Check if post exists before editing
        if (!isset($post)){
            return redirect('/bleus/forum')->with('error', 'Pas de post à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bleus/forum')->with('error', "Vous n'avez pas l'autorisation de modifier ce message");
        }
        return view('bleus.forum.edit', compact('post'));
    }

    public function update(Request $request, BleusPostForum $post)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bleus/forum')->with('error', "Vous n'avez pas l'autorisation de modifier ce message");
        }

        $post->message = $request->input('message');
        $post->save();
        return redirect('/bleus/forum')->with('success', 'Message updaté');

    }

    public function destroy(BleusPostForum $post)
    {
        //Check if user exists before deleting
        if (!isset($post))
        {
            return redirect('/bleus/forum')->with('error', "Pas de message trouvé");
        }

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bleus/forum')->with('error', "Vous n'avez pas l'autorisation de supprimer ce message");
        }

        foreach($post->comment as $comment)
        {
            $comment->delete();
        }
        $post->delete();
        return redirect('/bleus/forum')->with('success', 'Message supprimé');
    }

    public function ancre(Request $request, BleusPostForum $post)
    {

        if($post->ancre == 0)
        {
            $post->ancre = 1;
            $post->save();
            return redirect('/bleus/forum')->with('success', 'Message encré');
        } 
        else
        {
            $post->ancre = 0; 
            $post->save();
            return redirect('/bleus/forum')->with('success', 'Message désencré');
        }
    }

    public function like(BleusPostForum $post)
    {
        $likes = BleusPostLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
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
        $like = new BleusPostLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(),'is_like' => TRUE, 'is_dislike' => FALSE]);
    }

    public function dislike(BleusPostForum $post)
    {
        $likes = BleusPostLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
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
        $like = new BleusPostLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();
        return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $post->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
    }

    /** 
     * Return the image
     *
     * @param  url
     * @return \Illuminate\Http\Response
     */
    public function image($url)
    {
        return response()->file(storage_path('app/public/forum/' . $url));
    }
}
