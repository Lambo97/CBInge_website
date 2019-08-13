<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostForum;
use App\PostLike;


class PostForumController extends Controller
{
    /**
     * Display the forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Auth::user()->forum_check = PostForum::orderBy('created_at', 'desc')->first()->id;
        $posts = PostForum::orderBy('ancre','desc')->orderBy('updated_at','desc')->paginate(10);
        return view('forum.index', compact('posts'));
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
        $post = new PostForum;
        $post->message = $request->input('message');
        $post->id_auteur = auth()->user()->id;
        $post->photo = $fileNameToStore;
        $post->save();

        // Send notification
        \OneSignal::sendNotificationToSegment(
            auth()->user()->surnom_forum." a envoyé un message !",
            $segment = "Comite",
            $url = "/forum"
        );

        return redirect('/forum')->with('success', 'Message envoyé');
    }

    public function edit(PostForum $post)
    {
        //Check if post exists before editing
        if (!isset($post)){
            return redirect('/forum')->with('error', 'Pas de post à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/forum')->with('error', "Vous n'avez pas l'autorisation de modifier ce message");
        }
        return view('forum.edit', compact('post'));
    }

    public function update(Request $request, PostForum $post)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/forum')->with('error', "Vous n'avez pas l'autorisation de modifier ce message");
        }

        $post->message = $request->input('message');
        $post->save();
        return redirect('/forum')->with('success', 'Message updaté');

    }

    public function destroy(PostForum $post)
    {
        //Check if user exists before deleting
        if (!isset($post))
        {
            return redirect('/forum')->with('error', "Pas de message trouvé");
        }

        if(auth()->user()->id !== $post->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/forum')->with('error', "Vous n'avez pas l'autorisation de supprimer ce message");
        }

        foreach($post->comment as $comment)
        {
            $comment->delete();
        }
        $post->delete();
        return redirect('/forum')->with('success', 'Message supprimé');
    }

    public function ancre(Request $request, PostForum $post)
    {

        if($post->ancre == 0)
        {
            $post->ancre = 1;
            $post->save();
            return redirect('/forum')->with('success', 'Message encré');
        } 
        else
        {
            $post->ancre = 0; 
            $post->save();
            return redirect('/forum')->with('success', 'Message désencré');
        }
    }

    public function like(PostForum $post)
    {
        $likes = PostLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == 1)
            {
                $like->delete();
                return redirect('/forum')->with('success', 'Message pas liké');
            }
            else
            {
                $like->value = 1;
                $like->save();
                return redirect('/forum')->with('success', 'Message liké');
            }
        }
        else
        {
        $like = new PostLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        return redirect('/forum')->with('success', 'Message liké');
    }

    public function dislike(PostForum $post)
    {
        $likes = PostLike::where([['post_id', $post->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == -1)
            {
                $like->delete();
                return redirect('/forum')->with('success', 'Message pas disliké');
            }
            else
            {
                $like->value = -1;
                $like->save();
                return redirect('/forum')->with('success', 'Message disliké');
            }
        }
        $like = new PostLike;
        $like->post_id = $post->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();
        return redirect('/forum')->with('success', 'Message disliké');
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
