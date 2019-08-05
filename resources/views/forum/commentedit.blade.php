@extends('layouts.app')

@section('title')
<title> CB Ingé - Forum - Edition commentaire </title>
@endsection

@section('content')
<h1 class="mb-5">Forum - Editer commentaire</h1>

<div class="row">
    <div class="col-12">
    <form method="POST" action="/forum/comment/update/{{$comment->id}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="comment" class="col-2 col-form-label text-md-right d-none d-md-block"><img class="mx-auto d-block img-fluid" src="/profile/{{Auth::user()->id}}/image" alt="{{Auth::user()->surnom_forum}}"></label>

            <div class="col-lg-10">
                <textarea id="comment" rows="10" class="form-control @error('comment') is-invalid @enderror bg-dark" name="comment" autocomplete="comment">{{ old('comment') ?? $comment->message }}</textarea>

                @error('comment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $comment }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-2 offset-2">
                <button type="submit" class="buttons-green font-weight-bold">
                    Envoyer
                </button>
            </div>
            <div class="col-md-2">
                <button type="reset" class="buttons-green font-weight-bold">
                    Reset
                </button>
            </div>
            <div class="col-md-2">
                    <a href="/forum"><button type="button" class="buttons-green font-weight-bold">
                        Retour
                </button></a>
            </div>
        </div>
    </form>
    </div>
</div>


@endsection