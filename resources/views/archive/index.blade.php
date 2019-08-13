@extends('layouts.app')

@section('title')
<title> CB Ingé - Archives </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Archives</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit < 3)
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/archives/add">Ajouter une archive</a>
    </div>
    @endif
</div>

<h3>Nanesse St Nicolas</h3>
@foreach($nanesseStNic as $archive)
<p><a href="/archives/file/{{str_replace(" ", "", $archive->type).$archive->annee}}" class="green-link">{{$archive->type}} {{$archive->annee}} @if($archive->commentaire)({{$archive->commentaire}})@endif</a></p>
@endforeach

<h3>Nanesse St Toré</h3>
@foreach($nanesseStTore as $archive)
<p><a href="/archives/file/{{str_replace(" ", "", $archive->type).$archive->annee}}" class="green-link">{{$archive->type}} {{$archive->annee}} @if($archive->commentaire)({{$archive->commentaire}})@endif</a></p>
@endforeach

@if(Auth::check() and Auth::user()->droit < 5)
<h3>Missel</h3>
@foreach($missel as $archive)
<p><a href="/archives/file/{{str_replace(" ", "", $archive->type).$archive->annee}}" class="green-link">{{$archive->type}} {{$archive->annee}} @if($archive->commentaire)({{$archive->commentaire}})@endif</a></p>
@endforeach
@endif

@endsection