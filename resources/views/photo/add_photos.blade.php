@extends('layouts.app')

@section('title')
<title> CB Ingé - Ajouter des photos</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Ajouter des photos</h1>
    </div>
</div>

<form method="POST" action="/photos/add_photos" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="album" class="d-none col-md-4 col-form-label text-md-right">Album</label>
                
        <select id="album" type="text" class="form-control form-content @error('album') is-invalid @enderror" name="album" value="{{ old('album')}}">
        @foreach($albums as $option)
            <option value="{{ $option->id }}"
                @if($album and $option->id == $album->id)
                selected
                @endif
                >{{$option->nom}} - {{$option->annee}}
            </option>
        @endforeach
        </select>

        @error('album')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div>
        <label for="photos" class="d-none col-md-4 col-form-label text-md-right">Photos</label>
        <p class=" col-form-label mt-n2">Photos : </p>
        <p>
        <input type="file" multiple class=" col-9 form-control-file form-content" id="photos" name="photos[]" placeholder="Nouvelle image">
        </p>
        @error('photos')
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
