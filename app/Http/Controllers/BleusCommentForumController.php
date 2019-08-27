<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BleusPostForum;
use App\BleusCommentForum;
use App\BleusCommentLike;

class BleusCommentForumController extends Controller
{
    public function add(Request $request, BleusPostForum $post)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);
        
        // Create comment
        $comment = new BleusCommentForum;
        $comment->message = $request->input('comment');
        $comment->id_auteur = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->save();
        $post->updated_at = date('Y-m-d H:i:s');
        $post->save();

        // Send notification
        \OneSignal::sendNotificationToSegment(
            auth()->user()->surnom_forum." a commenté un post !",
            $segment = "Comite",
            $url = "/bleus/forum"
        );

        return redirect('/bleus/forum')->with('success', 'Commentaire envoyé');
    }

    public function edit(BleusCommentForum $comment)
    {
        //Check if comment exists before editing
        if (!isset($comment)){
            return redirect('/bleus/forum')->with('error', 'Pas de commentaire à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $comment->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bleus/forum')->with('error', 'Page non autorisée');
        }
        return view('bleus.forum.commentedit', compact('comment'));
    }

    public function update(Request $request, BleusCommentForum $comment)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        if(auth()->user()->id !== $comment->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bleus/forum')->with('error', "Vous n'avez pas l'autorisation de modifier ce commentaire");
        }

        $comment->message = $request->input('comment');
        $comment->save();
        return redirect('/bleus/forum')->with('success', 'Commentaire updaté');

    }

    public function destroy(BleusCommentForum $comment)
    {
        //Check if user exists before deleting
        if (!isset($comment))
        {
            return redirect('/bleus/forum')->with('error', "Pas de commentaire trouvé");
        }

        if(auth()->user()->id !== $comment->id_auteur and auth()->user()->droit > 1)
        {
            return redirect('/bleus/forum')->with('error', "Vous n'avez pas l'autorisation de supprimer ce commentaire");
        }

        $comment->delete();
        return redirect('/bleus/forum')->with('success', 'Commentaire supprimé');
    }

    public function like(BleusCommentForum $comment)
    {
        $likes = BleusCommentLike::where([['comment_id', $comment->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == 1)
            {
                $like->delete();
                return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {
                $like->value = 1;
                $like->save();
                return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => TRUE, 'is_dislike' => FALSE]);
            }
        }
        else
        {
        $like = new BleusCommentLike;
        $like->comment_id = $comment->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => TRUE, 'is_dislike' => FALSE]);
    }

    public function dislike(BleusCommentForum $comment)
    {
        $likes = BleusCommentLike::where([['comment_id', $comment->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == -1)
            {
                $like->delete();
                return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {
                $like->value = -1;
                $like->save();
                return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
            }
        }
        $like = new BleusCommentLike;
        $like->comment_id = $comment->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();
        return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
    }
}
