<?php
 function like(PostInsulte $post)
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
        $like->post_id = $insulte->id;
        $like->user_id = auth()->user()->id;
        $like->value = 1;
        $like->save();
        }
        return response()->json(['nb_like' => $post->like->where('value', 1)->count(), 'nb_dislike' => $insulte->like->where('value', -1)->count(),'is_like' => TRUE, 'is_dislike' => FALSE]);
    }

  function dislike(PostInsulte $insulte)
    {
        $likes = InsulteLike::where([['post_id', $insulte->id], ['user_id', auth()->user()->id]])->get();
        if($likes->count() > 0)
        {
            $like = $likes[0];
            if($like->value == -1)
            {
                $like->delete();
                return response()->json(['nb_like' => $insulte->like->where('value', 1)->count(), 'nb_dislike' => $insulte->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => FALSE]);
            }
            else
            {
                $like->value = -1;
                $like->save();
                return response()->json(['nb_like' => $insulte->like->where('value', 1)->count(), 'nb_dislike' => $insulte->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
            }
        }
        $like = new InsulteLike;
        $like->post_id = $insulte->id;
        $like->user_id = auth()->user()->id;
        $like->value = -1;
        $like->save();
        return response()->json(['nb_like' => $insulte->like->where('value', 1)->count(), 'nb_dislike' => $insulte->like->where('value', -1)->count(), 'is_like' => FALSE, 'is_dislike' => TRUE]);
    }