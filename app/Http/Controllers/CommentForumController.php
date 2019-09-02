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
        
        // Create comment
        $comment = new CommentForum;
        $comment->message = $request->input('comment');
        $comment->id_auteur = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->photo = $fileNameToStore;
        $comment->save();
        $post->updated_at = date('Y-m-d H:i:s');
        $post->save();

        // Send notification
        \OneSignal::sendNotificationToSegment(
            auth()->user()->surnom_forum." a commenté un post !",
            $segment = "Comite",
            $url = "/forum"
        );

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
        $like = new CommentLike;
        $like->comment_id = $comment->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => TRUE, 'is_dislike' => FALSE]);
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
                return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {
                $like->value = -1;
                $like->save();
                return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
            }
        }
        $like = new CommentLike;
        $like->comment_id = $comment->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();
        return response()->json(['nb_like' => $comment->like->where('value', 1)->count(), 'nb_dislike' => $comment->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
    }
}
