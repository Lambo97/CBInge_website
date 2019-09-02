@extends('layouts.app')

@section('title')
<title> CB Ingé - Admin Pense-Bête</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Admin pense-bête</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/pensebete/edit">Modifier un mémo existant</a>
    </div>
</div>

<form method="POST" action="/pensebete/add" enctype="multipart/form-data">
    @csrf


    <div class="form-group row">
        <label for="type" class="d-none col-md-4 col-form-label text-md-right">Type</label>

        <select id="type" type="text" class="form-control form-content @error('type') is-invalid @enderror" name="type" value="{{ old('type')}}">
            <option value="Activités du comité">Activités du comité</option>
            <option value="En vrac">En vrac</option>
            <option value="Listings">Listings</option>
        </select>

        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="form-group row">
        <label for="nom" class="d-none col-md-4 col-form-label text-md-right">Titre</label>

        <input id="nom" type="text" class="form-control form-content @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom')}}" required placeholder="Titre">

        @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="form-group row">
        <label for="editor" class="d-none col-md-4 col-form-label text-md-right">Message</label>

        <textarea id="editor" rows="5" class="form-control form-content @error('message') is-invalid @enderror" name="message" placeholder="Message"autocomplete="message">{{ old('message')}}</textarea>

        @error('message')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="d-flex flex-row-reverse mb-2">

        <button type="submit" class="buttons-green font-weight-bold">
            Enregistrer
        </button>
        <button type="reset" class="buttons-green buttons-green-dark font-weight-bold mr-2">
            Reset
        </button>

    </div>
</form>

@endsection
