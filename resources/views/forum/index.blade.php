@extends('layouts.app')
<script src="{{ asset('/js/forum.js') }}" defer></script>

@section('title')
<title> CB Ingé - Forum </title>
@endsection

@section('content')
<h1>Forum</h1>
<smiley></smiley>
<div class="row">
    <div class="col-12">
    <form method="POST" action="/forum/add" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="message" class="col-2 col-form-label text-md-right d-none d-md-block"><img class="mx-auto d-block img-fluid" src="/profile/{{Auth::user()->id}}/image" alt="{{Auth::user()->surnom_forum}}"></label>

            <div class="col-lg-6 col-md-10 col-xs-12">
                <textarea id="message" rows="5" class="form-control bg-dark" name="message" autocomplete="message" placeholder="Ecris ton message"></textarea>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-md-6 offset-2">
                <input type="file" class="custom-file-input" id="photo" name="photo">
                <label class="custom-file-label" for="photo">Choisi une image (optionnel)</label>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-2">
                <button type="submit" class="buttons-green font-weight-bold">
                    Envoyer
                </button>
            </div>
        </div>
    </form>
    </div>
</div>

<div class="row mt-3 justify-content-center">
    {{$posts->links()}}
</div>

@foreach($posts as $post)



    <div class="bg-dark mt-4 border border-light rounded">
        <div class="row mx-0" @if($post->ancre == 1) style="background-color: #353131;" @endif>
            <div class="col-md-2 d-none d-md-block">
                <img class="mx-auto d-block img-fluid" src="/profile/{{$post->auteur->id}}/image" alt="{{$post->auteur->surnom_forum}}"> 
            </div>
            <div class="col-md-10 col-xs-12">
                <div class="row mb-2 mt-2 justify-content-between">
                    <div class="col-6">
                        <h4 style='display:inline' class="mr-3"><a href="/profile/show/{{$post->auteur->id}}" class="green-link">{{$post->auteur->surnom_forum}}</a></h4>  @if($post->ancre == 1) <small><i>Message encré</i></small> @endif
                    </div>
                    @if(Auth::user()->id == $post->id_auteur || Auth::user()->droit < 3)
                    <div class="col-2 col-xs-3 d-flex justify-content-end">
                        <div class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deletePost{{$post->id}}"></i></div>
                        <a href="/forum/edit/{{$post->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
                        @if(Auth::user()->droit < 3)
                        <a href="/forum/ancre/{{$post->id}}" class="green-link"><i class="fas fa-anchor"></i></a>
                        @endif
                    </div>
                    @endif
                    <div class="col-4 col-xs-3 text-right">
                        <small>Posté le : {{date("d-m-Y H:i:s", strtotime($post->created_at))}}</small>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 ">
                        {!!Purifier::clean($post->message);!!}
                    </div>
                </div>
                @if($post->photo)
                <div class="row mb-5">
                    <div class="col-10">
                        <img class="mx-auto d-block img-fluid" src="/forum/image/{{$post->photo}}"> 
                    </div>
                </div>
                @endif
                <div class="row" id="post{{$post->id}}">
                    <div class="col-4 d-flex justify-content-center">
                        @if($post->like->where('value', 1)->where('user_id', Auth::user()->id)->count() > 0)
                            <b><a href="/forum/like/{{$post->id}}" onclick="like(this, true); return false;" class="green-link" id={{$post->id}}><i>j'aime ({{$post->like->where('value', 1)->count()}})</i></a></b> 
                        @else
                            <small><a href="/forum/like/{{$post->id}}" onclick="like(this, true); return false;" class="green-link" id={{$post->id}}><i>j'aime ({{$post->like->where('value', 1)->count()}})</i></a></small>
                        @endif
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        @if($post->like->where('value', -1)->where('user_id', Auth::user()->id)->count() > 0)
                            <b><a href="/forum/dislike/{{$post->id}}"  onclick="dislike(this, true); return false;" class="green-link" id={{$post->id}}><i>je n'aime pas ({{$post->like->where('value', -1)->count()}})</i></a></b>
                        @else
                            <small><a href="/forum/dislike/{{$post->id}}"   onclick="dislike(this, true); return false;" class="green-link" id={{$post->id}}><i>je n'aime pas ({{$post->like->where('value', -1)->count()}})</i></a></small>
                        @endif
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a href="#" class="green-link mr-2" data-toggle="modal" data-target="#viewlike{{$post->id}}"><i>Consulter</i></a>
                    </div>
                </div>
                <hr>
                @foreach($post->comment as $comment)
                    <div class="row mb-3">
                        <div class="col-2">
                            <img class="mx-auto d-block img-fluid" src="/profile/{{$comment->auteur->id}}/image" alt="{{$post->auteur->surnom_forum}}"> 
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <p><a href="/profile/show/{{$comment->auteur->id}}" class="green-link mr-3">{{$comment->auteur->surnom_forum}}</a> {!!Purifier::clean($comment->message);!!}</p>
                            </div>
                            <div class="row align-self-end" id="comment{{$comment->id}}">
                                <div>
                                @if($comment->like->where('value', 1)->where('user_id', Auth::user()->id)->count() > 0)
                                    <b><a href="/forum/comment/like/{{$comment->id}}" onclick="like(this, false); return false;" class="green-link mx-1" id={{$comment->id}}><i>j'aime ({{$comment->like->where('value', 1)->count()}})</i></a></b>
                                @else
                                    <small><a href="/forum/comment/like/{{$comment->id}}" onclick="like(this, false); return false;" class="green-link mx-1" id={{$comment->id}}><i>j'aime ({{$comment->like->where('value', 1)->count()}})</i></a></small>
                                @endif
                                </div> - <div>
                                @if($comment->like->where('value', -1)->where('user_id', Auth::user()->id)->count() > 0)
                                    <b><a href="/forum/comment/dislike/{{$comment->id}}"  onclick="like(this, false); return false;"class="green-link mx-1" id={{$comment->id}}><i>je n'aime pas ({{$comment->like->where('value', -1)->count()}})</i></a></b>
                                @else
                                    <small><a href="/forum/comment/dislike/{{$comment->id}}" onclick="like(this, false); return false;" class="green-link mx-1" id={{$comment->id}}><i>je n'aime pas ({{$comment->like->where('value', -1)->count()}})</i></a></small>
                                @endif
                                </div> - 
                                <div><small><a href="#" class="green-link mx-2" data-toggle="modal" data-target="#viewlikeComment{{$comment->id}}"><i>Consulter</i></a></small></div>
                                commenté le {{date("d-m-Y H:i:s", strtotime($comment->created_at))}}</small>
                            </div>
                            @if(Auth::user()->id == $comment->id_auteur || Auth::user()->droit < 3)
                            <div class="row align-self-end">
                                <div class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deleteComment{{$comment->id}}"></i></div>
                                <a href="/forum/comment/edit/{{$comment->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Modal Comment -->
                    <!-- Delete Comment -->
                    <div class="modal fade" id="deleteComment{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="#deleteComment{{$comment->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Supprimer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-dark">
                                    Voulez-vous vraiment supprimer ce commentaire ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                                    <a href="/forum/comment/destroy/{{$comment->id}}" class="btn btn-danger">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- View like comment -->
                    <div class="modal fade" id="viewlikeComment{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="#viewlikeComment{{$comment->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background-color: #353131">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Like</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6>J'aime</h6>
                                    <div class="mb-3">
                                    @foreach ($comment->like->where('value', 1) as $like)
                                        <a href="/profile/show/{{$like->user->id}}" class="green-link">{{$like->user->surnom_forum}}</a> - 
                                    @endforeach
                                    </div>
                                    <h6>Je n'aime pas</h6>
                                    @foreach ($comment->like->where('value', -1) as $like)
                                        <a href="/profile/show/{{$like->user->id}}" class="green-link">{{$like->user->surnom_forum}}</a> - 
                                    @endforeach
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                <div class="row mb-3 mt-3">
                    <form method="POST" action="/forum/comment/add/{{$post->id}}" style="width:100%" enctype="multipart/form-data">
                        @csrf  
                        <div class="form-row">
                            <div class="col-md-8 col-sm-10">
                            <textarea id="comment" rows="2" class="form-control bg-dark" name="comment" autocomplete="comment" placeholder="Ecris ton commentaire"></textarea>
                            </div>

                            <div class="col-md-3 form-group d-flex justify-content-end">
                                <button type="submit" class="buttons-green font-weight-bold btn-sm">
                                    Commenter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal Post -->
    <!-- Delete message -->
    <div class="modal fade" id="deletePost{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="#deletePost{{$post->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Supprimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    Voulez-vous vraiment supprimer ce post ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <a href="/forum/destroy/{{$post->id}}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

    <!-- View like -->
    <div class="modal fade" id="viewlike{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="#viewlike{{$post->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #353131">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Like</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>J'aime</h6>
                    <div class="mb-3">
                    @foreach ($post->like->where('value', 1) as $like)
                        <a href="/profile/show/{{$like->user->id}}" class="green-link">{{$like->user->surnom_forum}}</a> - 
                    @endforeach
                    </div>
                    <h6>Je n'aime pas</h6>
                    @foreach ($post->like->where('value', -1) as $like)
                        <a href="/profile/show/{{$like->user->id}}" class="green-link">{{$like->user->surnom_forum}}</a> - 
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="row mt-5 justify-content-center">
    {{$posts->links()}}
</div>

@push('scripts')
<script>
function like(obj, post){
    $.ajax({
        url: obj.href
    }).done(function(data){
        if(post)
            var id = 'post'+obj.id;
        else
            var id = 'comment'+obj.id;
        update(id, data.nb_like, data.is_like, data.nb_dislike, data.is_dislike);
    });
 };

function dislike(obj, post){
    $.ajax({
        url: obj.href
    }).done(function(data){
        if(post)
            var id = 'post'+obj.id;
        else
            var id = 'comment'+obj.id;
        update(id, data.nb_like, data.is_like, data.nb_dislike, data.is_dislike);
    });
};

function update(id, nb_like, is_like, nb_dislike, is_dislike)
{
    var row = document.getElementById(id);
    var like = row.childNodes[0].childNodes[0], dislike = row.childNodes[2].childNodes[0];
    like.childNodes[0].childNodes[0].innerHTML = "j'aime ("+nb_like+")";
    dislike.childNodes[0].childNodes[0].innerHTML = "je n'aime pas ("+nb_dislike+")";
    if(is_like)
    {
        var d = document.createElement('b');
        d.innerHTML = like.innerHTML;
        like.parentNode.replaceChild(d, like);
    }
    else
    {
        var d = document.createElement('small');
        d.innerHTML = like.innerHTML;
        like.parentNode.replaceChild(d, like);
    }

    if(is_dislike)
    {
        var d = document.createElement('b');
        d.innerHTML = dislike.innerHTML;
        dislike.parentNode.replaceChild(d, dislike);
    }
    else
    {
        var d = document.createElement('small');
        d.innerHTML = dislike.innerHTML;
        dislike.parentNode.replaceChild(d, dislike);
    }
}
</script>
@endpush

@endsection