@extends('layouts.app')

@section('title')
<title> CB Ingé - Admin chants</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Admin chants</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/folklore/chants/edit">Modifier un chant existant</a>
    </div>
</div>

<form method="POST" action="/folklore/chants/add" enctype="multipart/form-data">
    @csrf


    <div class="form-group row">
        <label for="type" class="d-none col-md-4 col-form-label text-md-right">Type</label>
                
        <select id="type" type="text" class="form-control form-content @error('type') is-invalid @enderror" name="type" value="{{ old('type')}}">
            <option value="Chants facultaires">Chants facultaires</option>
            <option value="Chants folkloriques">Chants flokloriques</option>
            <option value="Chants indispensables" selected>Chants indispensables</option>
        </select>

        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <label for="nom" class="d-none col-md-4 col-form-label text-md-right">Nom</label>

        <input id="nom" type="text" class="form-control form-content @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom')}}" required placeholder="Nom">
        
        @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <label for="paroles" class="d-none col-md-4 col-form-label text-md-right">Paroles</label>

        <textarea id="paroles" rows="5" class="form-control form-content @error('paroles') is-invalid @enderror" name="paroles" placeholder="Paroles"autocomplete="paroles">{{ old('paroles')}}</textarea>

        @error('paroles')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <input type="file" class="buttons-green-dark" id="mp3" name="mp3">

        @error('mp3')
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
