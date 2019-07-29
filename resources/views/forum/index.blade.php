@extends('layouts.app')

@section('title')
<title> CB Ingé - Forum </title>
@endsection

@section('content')
<h1>Forum</h1>

<div class="row">
    <div class="col-12">
    <form method="POST" action="/forum/add" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="message" class="col-2 col-form-label text-md-right d-none d-md-block"><img class="mx-auto d-block img-fluid" src="/storage/profile/{{Auth::user()->annee_bapteme}}/{{Auth::user()->photo}}" alt="{{Auth::user()->surnom_forum}}"></label>

            <div class="col-lg-6 col-md-10 col-xs-12">
                <textarea id="message" rows="5" class="form-control @error('message') is-invalid @enderror bg-dark" name="message" autocomplete="message" placeholder="Ecris ton message">{{ old('message') }}</textarea>

                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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

@if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="row mt-4 border border-light @if($post->ancre == 1) bg-dark @endif">
            <div class="col-md-2 d-none d-md-block">
                <img class="mx-auto d-block img-fluid" src="/storage/profile/{{$post->auteur->annee_bapteme}}/{{$post->auteur->photo}}" alt="{{$post->auteur->surnom_forum}}"> 
            </div>
            <div class="col-md-10 col-xs-12">
                <div class="row mb-2 mt-2">
                    <div class="col-6">
                        <h4 style='display:inline' class="mr-3"><a href="/profile/show/{{$post->auteur->id}}" class="green-link">{{$post->auteur->surnom_forum}}</a></h4>  @if($post->ancre == 1) <small><i>Message encré</i></small> @endif
                    </div>
                    <div class="col-4 col-xs-3 text-right">
                        <small>Posté le : {{date("d-m-Y H:i:s", strtotime($post->created_at))}}</small>
                    </div>
                    @if(Auth::user()->id == $post->id_auteur || Auth::user()->droit < 3)
                    <div class="col-2 col-xs-3">
                        <a href="/forum/destroy/{{$post->id}}" class="green-link mr-2"><i class="far fa-trash-alt"></i></a>
                        <a href="/forum/edit/{{$post->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
                        @if(Auth::user()->droit < 3)
                        <a href="/forum/ancre/{{$post->id}}" class="green-link"><i class="fas fa-anchor"></i></a>
                        @endif
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 ">
                        {{$post->message}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
@else
    <p>Pas de message sur le forum</p>
@endif

@endsection