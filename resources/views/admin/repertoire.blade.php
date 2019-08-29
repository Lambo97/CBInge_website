@extends('layouts.app')

@section('title')
<title> CB Ingé - Admin Répertoire </title>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-md-4 col-sm-12">
        <h1 class="mb-3">Admin Répertoire</h1>
    </div>
    <div class="col-md-4 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/repertoire/nouvelleFonction">Nouvelle Fonction</a>
    </div>
    <div class="col-md-4 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/repertoire/nouveauComite">Nouveau Comité</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <searchbar-repertoire></searchbar-repertoire>
    </div>
</div>

@endsection
