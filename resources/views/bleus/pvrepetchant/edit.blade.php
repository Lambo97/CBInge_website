@extends('bleus.layouts.bleusapp')

@section('title')
<title> CB Ingé - PV Répet Chants </title>
@endsection

@section('content')
<h1>PV Répet Chants</h1>

<div class="row mt-5">
    <div class="col-12">
        <form method="POST" action="/bleus/pvrepetchant/update/{{$pv->id}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <div class="col-12">
                    <input id="titre" type="text" class="form-control bg-dark" name="titre" autocomplete="titre" placeholder="Titre" value="{{$pv->titre}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <textarea id="editor" name="message">{!!Purifier::clean($pv->message);!!}</textarea>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-6 offset-5">
                    <button type="submit" class="buttons-blue font-weight-bold">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
