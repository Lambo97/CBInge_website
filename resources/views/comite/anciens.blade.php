@extends('layouts.app')

@section('title')
<title> CB Ingé - Anciens Comités </title>
@endsection

@section('content')
<h1 class="mb-3">Anciens Comités</h1>

@foreach($comites as $comite)
<div class="row mt-3">
    <div class="col-12">
        <h5>Comité {{$comite['annee']}} - {{$comite['annee']+1}}</h5>
        <p><b>Président :</b> <a href="/profile/show/{{$comite['president']->id}}" class="green-link">{{$comite['president']->prenom}} {{$comite['president']->name}} @if($comite['president']->surnom) ({{$comite['president']->surnom}}) @endif</a></p>
        @if($comite['vp'])
        <p><b>Vice-Président :</b> <a href="/profile/show/{{$comite['vp']->id}}" class="green-link">{{$comite['vp']->prenom}} {{$comite['vp']->name}} @if($comite['vp']->surnom) ({{$comite['vp']->surnom}}) @endif</a></p>
        @endif
        <p><b>Trésorier :</b> <a href="/profile/show/{{$comite['tresorier']->id}}" class="green-link">{{$comite['tresorier']->prenom}} {{$comite['tresorier']->name}} @if($comite['tresorier']->surnom) ({{$comite['tresorier']->surnom}}) @endif</a></p>
        <p><b>Secrétaire :</b> <a href="/profile/show/{{$comite['secretaire']->id}}" class="green-link">{{$comite['secretaire']->prenom}} {{$comite['secretaire']->name}} @if($comite['secretaire']->surnom) ({{$comite['secretaire']->surnom}}) @endif</a></p>
        @if($comite['presidente'])
        <p><b>Présidente :</b> <a href="/profile/show/{{$comite['presidente']->id}}" class="green-link">{{$comite['presidente']->prenom}} {{$comite['presidente']->name}} @if($comite['presidente']->surnom) ({{$comite['presidente']->surnom}}) @endif</a></p>
        @endif
        <p><b>Togés sans fonction :</b>
        @foreach($comite['sansFonctions'] as $toge)
        <a href="/profile/show/{{$toge->id}}" class="green-link">{{$toge->prenom}} {{$toge->name}} @if($toge->surnom) ({{$toge->surnom}}) @endif</a>,
        @endforeach
        </p>
        <p><b>Assistants :</b>
        @foreach($comite['assistants'] as $assistant)
        <a href="/profile/show/{{$assistant->id}}" class="green-link">{{$assistant->prenom}} {{$assistant->name}} @if($assistant->surnom) ({{$assistant->surnom}}) @endif</a>,
        @endforeach
        </p>
    </div>
</div>
@endforeach


@endsection