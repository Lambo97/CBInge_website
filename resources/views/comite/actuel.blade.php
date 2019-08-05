@extends('layouts.app')

@section('title')
<title> CB Ingé - Comite Actuel </title>
@endsection

@section('content')
<h1 class="mb-3">Comite Actuel ({{$year}} - {{$year+1}})</h1>

<h3 class="mb-2">Bureau</h3>
<div class="row">
    <!--Président-->
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$president->id}}/image">
        <b>Président</b><br>
        {{$president->prenom}} {{$president->name}} <br>
        ({{$president->surnom_forum}})
    </div>

    <!--Vice-Président-->
    @if($vp)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$vp->id}}/image">
        <b>Vice-président</b><br>
        {{$vp->prenom}} {{$vp->name}} <br>
        ({{$vp->surnom_forum}})
    </div>
    @endif

    <!--Trésorier-->
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$tresorier->id}}/image">
        <b>Trésorier</b><br>
        {{$tresorier->prenom}} {{$tresorier->name}} <br>
        ({{$tresorier->surnom_forum}})
    </div>

    <!--Secrétaire-->
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$secretaire->id}}/image">
        <b>Secrétaire</b><br>
        {{$secretaire->prenom}} {{$secretaire->name}} <br>
        ({{$secretaire->surnom_forum}})
    </div>

    <!--Présidente-->
    @if($presidente)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$presidente->id}}/image">
        <b>Présidente</b><br>
        {{$presidente->prenom}} {{$presidente->name}} <br>
        ({{$presidente->surnom_forum}})
    </div>
    @endif
</div>

<!--Togés sans fonction-->
<h3 class="mb-2 mt-4">Togés sans fonction</h3>
<div class="row">
    @foreach($sansFonctions as $toge)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$toge->id}}/image">
        <b>Togé sans fonction</b><br>
        {{$toge->prenom}} {{$toge->name}} <br>
        ({{$toge->surnom_forum}})
    </div>
    @endforeach
</div>

<!--Assistants-->
<h3 class="mb-2 mt-4">Assistants</h3>
<div class="row">
    @foreach($assistants as $assistant)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%" class="mb-2" src="/profile/{{$assistant->id}}/image">
        <b>Assistants</b><br>
        {{$assistant->prenom}} {{$assistant->name}} <br>
        ({{$assistant->surnom_forum}})
    </div>
    @endforeach
</div>

@endsection