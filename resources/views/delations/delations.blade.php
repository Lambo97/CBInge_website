@extends('layouts.app')

@section('title')
<title> CB Ingé - Délations </title>
@endsection

@section('content')

<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1 class="mb-3">Délations</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/repertoire/nouveauClerge">Ajouter un membre au clergé</a>
    </div>
    @endif
    @if(Auth::user()->fonctions() == 'Clergé')
    <div class="col-md-8 d-flex justify-content-end align-items-center">
      <a class="buttons-green font-weight-bold" href="/delations/clerge">Voir les délations</a>
    </div>
    @endif
</div>

<h6 class="mb-3">Dénoncez anonymemement les méfaits des membres du comité afin que les ragots les plus croustillants soient mis dans la messe.
</br>Seuls les éminents membres du Clergé ingé y auront accès afin qu'il n'y ait aucune fuite avant la messe.</h6>

<div class="row">
    <div class="col-10  form-content mb-5">
      <p class="font-weight-bold mt-3 mb-3">Poster une nouvelle délation</p>
    <form method="POST" action="/delations/add" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">

            <div class="textarea w-75 pl-3">

                <textarea id="message" rows="5" class="d-block  mb-3 w-100 bg-grey p-2" name="message" autocomplete="message" placeholder="Balance ton pote"></textarea>
                <div>
                    <smiley></smiley>
                </div>
                <div class="position-relative mt-3">
                <input type="file" class="custom-file-input buttons-green-dark" id="photo" name="photo">
                <label class="custom-file-label bg-grey rounded-0" style="border:1px solid #353131 !important; " for="photo">Prouve tes dires (facultatif mais bien vu)</label>
                </div>

            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <button type="submit" class="buttons-green font-weight-bold">
                    Envoyer
                </button>
            </div>
        </div>
    </form>
    </div>
</div>


@endsection
