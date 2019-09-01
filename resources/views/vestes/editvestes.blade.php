@extends('layouts.app')

@section('title')
<title> CB Ingé - Vestes - Modifier Taille </title>
@endsection

@section('content')
<h1 class="mb-5">Vestes - Modifier Taille</h1>

<div class="row">
    <div class="col-12">
    <form method="POST" action="/vestes/update/{{$post->id}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="taille" class="col-2 col-form-label text-md-right d-none d-md-block"><img class="mx-auto d-block img-fluid" src="/profile/{{Auth::user()->id}}/image" alt="{{Auth::user()->surnom_forum}}"></label>

            <div class="col-lg-10 mx-auto">
            <select name="taille" class="@error('message') is-invalid @enderror w-100" id="">
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    
                </select>
                

                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-end form-group row mb-0">
            
                <button type="submit" class="buttons-green font-weight-bold">
                    Envoyer
                </button>
            
          <!--  <div class="col-md-2">
                <button type="reset" class="buttons-green font-weight-bold">
                    Reset
                </button>
            </div>-->
            
                    <a href="/vestes"><button type="button" class="ml-3 buttons-green font-weight-bold">
                        Retour
                </button></a>
            
        </div>
    </form>
    </div>
</div>


@endsection