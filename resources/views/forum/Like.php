<?php
function like(PostForum $post)
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
function dislike(PostForum $post)
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
