@extends('layouts.app')

@section('title')
<title> CB Ingé - Photos </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1>{{$album->nom}} - {{$album->annee}}</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/admin">Admin</a>
    </div>
    <div class="col-md-2 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/{{$album->annee}}">Retour</a>
    </div>
    @else
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/{{$album->annee}}">Retour</a>
    </div>
    @endif
</div>

<div class="row">
    @foreach($photos as $photo)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/photos/{{$photo->album->annee}}/{{$photo->album->id}}/{{$photo->id}}">
    </div>
    @endforeach
</div>

@endsection