<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostForum;
use App\CommentForum;
use App\CommentLike;

class CommentForumController extends Controller
{
    public function add(Request $request, PostForum $post)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);
        
        // Create comment
        $comment = new CommentForum;
        $comment->message = $request->input('comment');
        $comment->id_auteur = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->save();
        return redirect('/forum')->with('success', 'Commentaire envoyé');
    }

    public function edit(CommentForum $comment)
    {
        //Check if comment exists before editing
        if (!isset($comment)){
            return redirect('/forum')->with('error', 'Pas de commentaire à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $comment->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/forum')->with('error', 'Page non autorisée');
        }
        return view('forum.commentedit', compact('comment'));
    }

    public function update(Request $request, CommentForum $comment)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        if(auth()->user()->id !== $comment->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/forum')->with('error', "Vous n'avez pas l'autorisation de modifier ce commentaire");
        }

        $comment->message = $request->input('comment');
        $comment->save();
        return redirect('/forum')->with('success', 'Commentaire updaté');

    }

    public function destroy(CommentForum $comment)
    {
        //Check if user exists before deleting
        if (!isset($comment))
        {
            return redirect('/forum')->with('error', "Pas de commentaire trouvé");
        }

        if(auth()->user()->id !== $comment->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/forum')->with('error', "Vous n'avez pas l'autorisation de supprimer ce commentaire");
        }

        $comment->delete();
        return redirect('/forum')->with('success', 'Commentaire supprimé');
    }

    public function like(CommentForum $comment)
    {
        $likes = CommentLike::where([['comment_id', $comment->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == 1)
            {
                $like->delete();
                return redirect('/forum')->with('success', 'Commentaire pas liké');
            }
            else
            {
                $like->value = 1;
                $like->save();
                return redirect('/forum')->with('success', 'Commentaire liké');
            }
        }
        else
        {
        $like = new CommentLike;
        $like->comment_id = $comment->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        return redirect('/forum')->with('success', 'Commentaire liké');
    }

    public function dislike(CommentForum $comment)
    {
        $likes = CommentLike::where([['comment_id', $comment->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == -1)
            {
                $like->delete();
                return redirect('/forum')->with('success', 'Commentaire pas disliké');
            }
            else
            {
                $like->value = -1;
                $like->save();
                return redirect('/forum')->with('success', 'Commentaire disliké');
            }
        }
        $like = new CommentLike;
        $like->comment_id = $comment->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();
        return redirect('/forum')->with('success', 'Commentaire disliké');
    }
}
