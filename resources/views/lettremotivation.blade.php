@extends('layouts.app')

@section('title')
<title> CB Ingé - Lettres de Motivation</title>
@endsection

@section('content')

<div class="row mb-3">
    <div class="col-md-12 col-sm-12">
        <h1>Lettres de Motivation</h1>
    </div>
</div>

@if(Auth::check() and (Auth::user()->droit == 1 or Auth::user()->droit == 4))
<div class="row mb-4">
    <div class="col-12">
        <form method="POST" action="/lettremotivation" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <input type="file" class="custom-file-input buttons-green-dark" id="file" name="file">
                <label class="custom-file-label bg-grey rounded-0" style="border:1px solid #353131 !important; " for="file">Choisis ton fichier</label>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <p>Attention : seul la dernière lettre envoyée sera lue !</p>
                    <button type="submit" class="buttons-green font-weight-bold">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
@if(Auth::check() and (Auth::user()->droit < 4 or Auth::user()->droit == 5))
@forelse($lettres as $lettre)
<p><a href="/lettremotivation/get/{{$lettre->id}}" class="green-link">{{$lettre->auteur->prenom}} {{$lettre->auteur->name}}</a></p>
@empty
<p>Pas encore de lettres</p>
@endforelse
@endif

@endsection