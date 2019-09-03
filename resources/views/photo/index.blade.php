@extends('layouts.app')

@section('title')
<title> CB Ingé - Photos </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1>Photos</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/admin">Admin</a>
    </div>
    @endif
</div>

<div class="row">
    @foreach($annees as $annee)
    <div class="col-md-3 col-6 mb-3">
        <img style="width:100%;" class="mb-2" src="/photos/cover/{{$annee['cover_album']}}">
        <a href="/photos/{{$annee['annee']}}" class="green-link">
        {{$annee['annee']}} - {{$annee['annee'] + 1}}</a><br>
        @if($annee['nb_album'] > 1)
        {{$annee['nb_album']}} albums
        @else
        {{$annee['nb_album']}} album
        @endif
    </div>
    @endforeach
</div>

@endsection