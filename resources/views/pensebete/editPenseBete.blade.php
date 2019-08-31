@extends('layouts.app')

@section('title')
<title> CB Ingé - Admin pense-bête</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Admin pense-bête</h1>
    </div>
</div>

<form name="form" method="POST" action="" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="nom" class="d-none col-md-4 col-form-label text-md-right">Titre</label>

        <select id="nom" onchange="display_form()" class="form-control form-content @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom')}}">
            <option value="0" id="select" selected>Sélectionner un mémo</option>
            <optgroup label="Activités du comité">
                @foreach($activites as $memo)
                  <option value="{{$memo->id}}">{{$memo->nom}}</option>
                @endforeach
            </optgroup>
            <optgroup label="En vrac">
                @foreach($vrac as $memo)
                  <option value="{{$memo->id}}">{{$memo->nom}}</option>
                @endforeach
            </optgroup>
            <optgroup label="Listings">
                @foreach($listing as $memo)
                  <option value="{{$memo->id}}">{{$memo->nom}}</option>
                @endforeach
            </optgroup>
        </select>

        @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="form-group row d-none">
        <label for="type" class="d-none col-md-4 col-form-label text-md-right">Type</label>

        <select id="type" type="text" class="form-control form-content @error('type') is-invalid @enderror" name="type" value="{{ old('type')}}">
            <option value="Activités du comité">Activités du comité</option>
            <option value="En vrac">En vrac</option>
            <option value="Listings">Listings</option>
        </select>

        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="form-group row d-none">
        <label for="message" class="d-none col-md-4 col-form-label text-md-right">Message</label>

        <textarea id="message" rows="20" class="form-control form-content @error('message') is-invalid @enderror" name="message" placeholder="Paroles"autocomplete="message">{{ old('message')}}</textarea>

        @error('message')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="d-flex flex-row-reverse mb-2">

        <button type="submit" id="submit" class=" d-none buttons-green font-weight-bold">
            Enregistrer
        </button>
        <button type="reset" id="reset" class=" d-none buttons-green buttons-green-dark font-weight-bold mr-2">
            Reset
        </button>

    </div>
</form>

@endsection

@push('scripts')
<script>
    function display_form(){
        document.getElementById("select").disabled = true;
        var id = document.getElementById('nom').value;
        var memo = null;
        axios.get('/pensebete/memo/'+id).then(function(response){
            memo = response.data;
            var type = document.getElementById('type');
            $('#type').val(memo.type).change();
            type.parentNode.classList.remove("d-none");
            var message = document.getElementById('message');
            message.innerHTML = memo.message;
            message.parentNode.classList.remove("d-none");
            document.getElementById('submit').classList.remove('d-none');
            document.getElementById('reset').classList.remove('d-none');
        });
        document.form.action = "/pensebete/update/"+id;
    }
</script>
@endpush
