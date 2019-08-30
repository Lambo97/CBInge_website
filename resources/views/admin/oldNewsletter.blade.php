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
            <a class="buttons-green font-weight-bold" href="/admin/newsletter">Envoyer newsletter</a>
        </div>
    </div>

@foreach($newsletters as $newsletter)
    <div class="well px-3 py-3 my-3 border border-light rounded ">
        <div class="row mb-2">
            <div class="col-md-6 col-sm-12">
                <h3>{{$newsletter->sujet}}</h3>
            </div>
            <div class="col-md-5 col-xs-4 d-flex justify-content-end ">
                <small>Posté le  {{date("d-m-Y H:i:s", strtotime($newsletter->created_at))}} par {{$newsletter->auteur->surnom_forum}}</small>
            </div>
        </div>
        <div class="row mh-100">
            <div class="col-12">
                {!!Purifier::clean($newsletter->message);!!}
            </div>
        </div>
    </div>
@endforeach
<div class="row mt-5 justify-content-center">
    {{$newsletters->links()}}
</div>

@endsection