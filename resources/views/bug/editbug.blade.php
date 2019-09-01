@extends('layouts.app')

@section('title')
<title> CB Ingé - Bugs - Edition message </title>
@endsection

@section('content')
<h1 class="mb-5">Bugs - Editer Bug</h1>

<div class="row">
    <div class="col-12">
    <form method="POST" action="/bug/update/{{$post->id}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="message" class="col-2 col-form-label text-md-right d-none d-md-block"><img class="mx-auto d-block img-fluid" src="/profile/{{Auth::user()->id}}/image" alt="{{Auth::user()->surnom_forum}}"></label>

            <div class="col-lg-10">
                <textarea id="lefait" rows="1" class="form-control @error('message') is-invalid @enderror bg-dark" name="lefait" placeholder="S'en occupe"autocomplete="message">{{ old('lefait') ?? $post->lefait }}</textarea>
                <textarea id="message" rows="3" class="form-control @error('message') is-invalid @enderror bg-dark" name="message" autocomplete="message">{{ old('message') ?? $post->message }}</textarea>

                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0 d-flex justify-content-end">
            
                <button type="submit" class="buttons-green font-weight-bold">
                    Envoyer
                </button>
            
          <!--  <div class="col-md-2">
                <button type="reset" class="buttons-green font-weight-bold">
                    Reset
                </button>
            </div>-->
           
                    <a href="/bug"><button type="button" class="ml-3 buttons-green font-weight-bold">
                        Retour
                </button></a>
            
        </div>
    </form>
    </div>
</div>


@endsection