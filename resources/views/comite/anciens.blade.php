@extends('layouts.app')

@section('title')
<title> CB Ingé - Anciens Comités </title>
@endsection

@section('content')
<h1 class="mb-3">Anciens Comités</h1>

@for($annee = year() - 1 ; $annee > 1980; $annee--)
<div class="row mt-3">
    <div class="col-12">
        <h5>Comité {{$annee}} - {{$annee+1}}</h5>
        @if($comitard = $comites->where('annee', $annee)->where('nom', 'Président')->first())
        <p><b>Président :</b> <a href="/profile/show/{{$comitard->id}}" class="green-link">{{$comitard->prenom}} {{$comitard->name}} @if($comitard->surnom) ({{$comitard->surnom}}) @endif</a></p>
        @endif
        @if($comitard = $comites->where('annee', $annee)->where('nom', 'Vice-Président')->first())
        <p><b>Vice-Président :</b> <a href="/profile/show/{{$comitard->id}}" class="green-link">{{$comitard->prenom}} {{$comitard->name}} @if($comitard->surnom) ({{$comitard->surnom}}) @endif</a></p>
        @endif
        @if($comitard = $comites->where('annee', $annee)->where('nom', 'Trésorier')->first())
        <p><b>Trésorier :</b> <a href="/profile/show/{{$comitard->id}}" class="green-link">{{$comitard->prenom}} {{$comitard->name}} @if($comitard->surnom) ({{$comitard->surnom}}) @endif</a></p>
        @endif
        @if($comitard = $comites->where('annee', $annee)->where('nom', 'Secrétaire')->first())
        <p><b>Secrétaire :</b> <a href="/profile/show/{{$comitard->id}}" class="green-link">{{$comitard->prenom}} {{$comitard->name}} @if($comitard->surnom) ({{$comitard->surnom}}) @endif</a></p>
        @endif
        @if($comitard = $comites->where('annee', $annee)->where('nom', 'Présidente')->first())
        <p><b>Présidente :</b> <a href="/profile/show/{{$comitard->id}}" class="green-link">{{$comitard->prenom}} {{$comitard->name}} @if($comitard->surnom) ({{$comitard->surnom}}) @endif</a></p>
        @endif
        @if($comitard = $comites->where('annee', $annee)->where('nom', 'Maître des chants')->first())
        <p><b>Maître des chants :</b> <a href="/profile/show/{{$comitard->id}}" class="green-link">{{$comitard->prenom}} {{$comitard->name}} @if($comitard->surnom) ({{$comitard->surnom}}) @endif</a></p>
        @endif
        @if($comitard = $comites->where('annee', $annee)->where('nom', 'Délégué AGEL')->first())
        <p><b>Délégué AGEL :</b> <a href="/profile/show/{{$comitard->id}}" class="green-link">{{$comitard->prenom}} {{$comitard->name}} @if($comitard->surnom) ({{$comitard->surnom}}) @endif</a></p>
        @endif
        <p><b>Togés :</b>
        @foreach($comites->where('annee', $annee)->where('nom', 'Togé') as $toge)
        <a href="/profile/show/{{$toge->id}}" class="green-link">{{$toge->prenom}} {{$toge->name}} @if($toge->surnom) ({{$toge->surnom}}) @endif</a>,
        @endforeach
        </p>
        <p><b>Assistants :</b>
        @foreach($comites->where('annee', $annee)->where('nom', 'Assistant') as $assistant)
        <a href="/profile/show/{{$assistant->id}}" class="green-link">{{$assistant->prenom}} {{$assistant->name}} @if($assistant->surnom) ({{$assistant->surnom}}) @endif</a>,
        @endforeach
        </p>
    </div>
</div>
<hr size=10>
@endfor


@endsection