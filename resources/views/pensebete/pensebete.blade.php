@extends('layouts.app')

@section('title')
<title> CB Ingé - Pense-Bête </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1 class="mb-3">Pense-Bête</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/pensebete/admin">Admin</a>
    </div>
    @endif
</div>

<div class="nav_welcome_action d-flex" style="flex-direction:column; width:100%;">
    <p class="mt-5 font-weight-bold chants_titre"> Activités du comité </p>
    @foreach ($activites as $memo)
        <p class="font-weight-light c_titre" id="memo_titre{{$memo->id}}" data-toggle="collapse" href="#memo{{$memo->id}}" role="button" aria-expanded="false" aria-controls="memo{{$memo->id}}" onclick="display({{$memo->id}})">{{$memo->nom}}</p>
        <div class="chants collapse multi-collapse" id="memo{{$memo->id}}">
            {!!$memo->message!!}
        </div>
    @endforeach

    <p class="mt-2 font-weight-bold chants_titre"> En vrac </p>
    @foreach ($vrac as $memo)
        <p class="font-weight-light c_titre" id="memo_titre{{$memo->id}}" data-toggle="collapse" href="#memo{{$memo->id}}" role="button" aria-expanded="false" aria-controls="memo{{$memo->id}}" onclick="display({{$memo->id}})">{{$memo->nom}}</p>
        <div class="chants collapse multi-collapse" id="memo{{$memo->id}}">
            {!!$memo->message!!}
        </div>
    @endforeach

    <p class="mt-2 font-weight-bold chants_titre"> Listings </p>
    @foreach ($listing as $memo)
        <p class="font-weight-light c_titre" id="memo_titre{{$memo->id}}" data-toggle="collapse" href="#memo{{$memo->id}}" role="button" aria-expanded="false" aria-controls="memo{{$memo->id}}" onclick="display({{$memo->id}})">{{$memo->nom}}</p>
        <div class="chants collapse multi-collapse" id="memo{{$memo->id}}">
            {!!$memo->message!!}
        </div>
    @endforeach

    <p class="d-none" id="first"></p>
    <div class="d-none" id="firstc"></div>
</div>


@endsection

@push('scripts')
    <script>
        function display(id){
            var titre = document.getElementById('memo_titre'+id)
            titre.classList.add('chosen');
            titre.setAttribute("onclick", "hide("+id+")");
        };

        function hide(id){
            var titre = document.getElementById('memo_titre'+id)
            titre.classList.remove('chosen');
            titre.setAttribute("onclick", "display("+id+")");
        };
    </script>
@endpush
