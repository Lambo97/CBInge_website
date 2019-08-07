@extends('layouts.app')

@section('title')
<title> CB Ingé - Webmasters </title>
@endsection

@section('content')
<h1 class="mb-3">Webmasters</h1>

<div class="row">
    @foreach($webmasters as $webmaster)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$webmaster->id}}/image">
        <a href="/profile/show/{{$webmaster->id}}" class="green-link">
        {{$webmaster->prenom}} {{$webmaster->name}} <br>
        @if($webmaster->surnom)
        ({{$webmaster->surnom}})
        @endif
        </a><br>
        @if($webmaster->annee_debut != $webmaster->annee_fin)
        ({{$webmaster->annee_debut}} - {{$webmaster->annee_fin}})
        @elseif($webmaster->annee_fin == $year)
        ({{$webmaster->annee_debut}} - )
        @else
        ({{$webmaster->annee_debut}})
        @endif
    </div>
    @endforeach
</div>

@endsection