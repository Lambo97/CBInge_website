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
                        <a href="#" class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deletePost{{$post->id}}"></i></a>
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
                <div class="row">
                    <div class="col-6 d-flex justify-content-center">
                        @if($post->like->where('value', 1)->where('user_id', Auth::user()->id)->count() > 0)
                               <b><a href="/forum/like/{{$post->id}}" onclick="like(this); return false;" class="green-link"><i>j'aime ({{$post->like->where('value', 1)->count()}})</i></a></b> 
                        @else
                            <small><a href="/forum/like/{{$post->id}}" onclick="like(this); return false;" class="green-link"><i>j'aime ({{$post->like->where('value', 1)->count()}})</i></a></small>
                        @endif
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        @if($post->like->where('value', -1)->where('user_id', Auth::user()->id)->count() > 0)
                            <b><a href="/forum/dislike/{{$post->id}}"  onclick="like(this); return false;" class="green-link"><i>je n'aime pas ({{$post->like->where('value', -1)->count()}})</i></a></b>
                        @else
                            <small><a href="/forum/dislike/{{$post->id}}"   onclick="like(this); return false;" class="green-link"><i>je n'aime pas ({{$post->like->where('value', -1)->count()}})</i></a></small>
                        @endif
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
                            <div class="row align-self-end">
                                @if($comment->like->where('value', 1)->where('user_id', Auth::user()->id)->count() > 0)
                                    <b><a href="/forum/comment/like/{{$comment->id}}" onclick="like(this); return false;" class="green-link mx-1">j'aime ({{$comment->like->where('value', 1)->count()}})</a></b>
                                @else
                                    <small><a href="/forum/comment/like/{{$comment->id}}" onclick="like(this); return false;" class="green-link mx-1"><i>j'aime ({{$comment->like->where('value', 1)->count()}})</i></a></small>
                                @endif - 
                                @if($comment->like->where('value', -1)->where('user_id', Auth::user()->id)->count() > 0)
                                    <b><a href="/forum/comment/dislike/{{$comment->id}}"  onclick="like(this); return false;"class="green-link mx-1">je n'aime pas ({{$comment->like->where('value', -1)->count()}})</a></b>
                                @else
                                    <small><a href="/forum/comment/dislike/{{$comment->id}}" onclick="like(this); return false;" class="green-link mx-1"><i>je n'aime pas ({{$comment->like->where('value', -1)->count()}})</i></a></small>
                                @endif - 
                                commenté le {{date("d-m-Y H:i:s", strtotime($comment->created_at))}}</small>
                            </div>
                            @if(Auth::user()->id == $comment->id_auteur || Auth::user()->droit < 3)
                            <div class="row align-self-end">
                                <a href="#" class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deleteComment{{$comment->id}}"></i></a>
                                <a href="/forum/comment/edit/{{$comment->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Modal Comment -->
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
@endforeach
<div class="row mt-5 justify-content-center">
    {{$posts->links()}}
</div>

@endsection