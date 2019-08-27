@extends('layouts.app')

@section('title')
<title> CB Ingé - Admin accès </title>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-md-4 col-sm-12">
        <h1 class="mb-3">Admin Accès</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/acces/changeBleus">Changer droit des bleus</a>
    </div>
    @endif
</div>

<div class="row">
    <div class="col-12">
        <searchbaracces></searchbaracces>
    </div>
</div>

@endsection
