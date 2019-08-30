@extends('layouts.app')

@section('title')
<title> CB Ingé - Newsletter </title>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-md-6 col-sm-12">
        <h1 class="mb-3">Newsletter</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/newsletter/old">Anciennes newsletter</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        <form method="POST" action="/admin/newsletter" enctype="multipart/form-data">
            @csrf

            <div class="form-group row mb-2">
                <div class="col-12">
                    <input id="sujet" type="text" class="form-control bg-dark" name="sujet" autocomplete="sujet" placeholder="Sujet"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <textarea id="editor" placeholder="Message" name="message"></textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-12">
                    Attention le mail contient déjà le "très cher vieux" au début et la signature.
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-6 offset-5">
                    <button type="submit" class="buttons-green font-weight-bold">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection