@extends('layouts.app')

@section('title')
<title> CB Ingé - Comité Actuel </title>
@endsection

@section('content')
<h1 class="mb-3">Comité Actuel ({{$year}} - {{$year+1}})</h1>

<h3 class="mb-2">Bureau</h3>
<div class="row">
    <!--Président-->
    @if($president)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$president->id}}/image">
        <b>Président</b><br>
        <a href="/profile/show/{{$president->id}}" class="green-link">
        {{$president->prenom}} {{$president->name}} <br>
        @if($president->surnom)
        ({{$president->surnom}})
        @endif
        </a>
    </div>
    @endif

    <!--Vice-Président-->
    @if($vp)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$vp->id}}/image">
        <b>Vice-président</b><br>
        <a href="/profile/show/{{$vp->id}}" class="green-link">
        {{$vp->prenom}} {{$vp->name}} <br>
        @if($vp->surnom)
        ({{$vp->surnom}})
        @endif
        </a>
    </div>
    @endif

    <!--Trésorier-->
    @if($tresorier)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$tresorier->id}}/image">
        <b>Trésorier</b><br>
        <a href="/profile/show/{{$tresorier->id}}" class="green-link">
        {{$tresorier->prenom}} {{$tresorier->name}} <br>
        @if($tresorier->surnom)
        ({{$tresorier->surnom}})
        @endif
        </a>
        
    </div>
    @endif

    <!--Secrétaire-->
    @if($secretaire)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$secretaire->id}}/image">
        <b>Secrétaire</b><br>
        <a href="/profile/show/{{$secretaire->id}}" class="green-link">
        {{$secretaire->prenom}} {{$secretaire->name}} <br>
        @if($secretaire->surnom)
        ({{$secretaire->surnom}})
        @endif
        </a>
    </div>
    @endif

    <!--Présidente-->
    @if($presidente)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$presidente->id}}/image">
        <b>Présidente</b><br>
        <a href="/profile/show/{{$presidente->id}}" class="green-link">
        {{$presidente->prenom}} {{$presidente->name}} <br>
        @if($presidente->surnom)
        ({{$presidente->surnom}})
        @endif
        </a>
    </div>
    @endif
</div>

<!--Togés sans fonction-->
<h3 class="mb-2 mt-4">Togés</h3>
<div class="row">
    @if($mdc)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$mdc->id}}/image">
        <b>Maître des chants</b><br>
        <a href="/profile/show/{{$mdc->id}}" class="green-link">
        {{$mdc->prenom}} {{$mdc->name}} <br>
        @if($mdc->surnom)
        ({{$mdc->surnom}})
        @endif
        </a>
    </div>
    @endif
    @if($da)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$da->id}}/image">
        <b>Délégué AGEL</b><br>
        <a href="/profile/show/{{$da->id}}" class="green-link">
        {{$da->prenom}} {{$da->name}} <br>
        @if($da->surnom)
        ({{$da->surnom}})
        @endif
        </a>
    </div>
    @endif
    @foreach($sansFonctions as $toge)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$toge->id}}/image">
        <b>Togé</b><br>
        <a href="/profile/show/{{$toge->id}}" class="green-link">
        {{$toge->prenom}} {{$toge->name}} <br>
        @if($toge->surnom)
        ({{$toge->surnom}})
        @endif
        </a>
    </div>
    @endforeach
</div>

<!--Assistants-->
<h3 class="mb-2 mt-4">Assistants</h3>
<div class="row">
    @foreach($assistants as $assistant)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$assistant->id}}/image">
        <b>Assistant</b><br>
        <a href="/profile/show/{{$assistant->id}}" class="green-link">
        {{$assistant->prenom}} {{$assistant->name}} <br>
        @if($assistant->surnom)
        ({{$assistant->surnom}})
        @endif
        </a>
    </div>
    @endforeach
</div>

@endsection