@extends('layouts.app')

@section('title')
<title> CB Ingé - Admin chants</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Admin chants</h1>
    </div>
</div>

<form name="form" method="POST" action="" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="nom" class="d-none col-md-4 col-form-label text-md-right">Nom</label>
                
        <select id="nom" onchange="display_form()" class="form-control form-content @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom')}}">
            <option value="0" id="select" selected>Sélectionner un chant</option>
            <optgroup label="Chants facultaires">
                @foreach($chants_facultaires as $chant)
                <option value="{{$chant->id}}">{{$chant->nom}}</option>
                @endforeach
            </optgroup>
            <optgroup label="Chants folkloriques">
                @foreach($chants_folkloriques as $chant)
                <option value="{{$chant->id}}">{{$chant->nom}}</option>
                @endforeach
            </optgroup>
            <optgroup label="Chants indispensables">
                @foreach($chants_indispensables as $chant)
                <option value="{{$chant->id}}">{{$chant->nom}}</option>
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
            <option value="Chants facultaires">Chants facultaires</option>
            <option value="Chants folkloriques">Chants flokloriques</option>
            <option value="Chants indispensables">Chants indispensables</option>
        </select>

        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row d-none">
        <label for="paroles" class="d-none col-md-4 col-form-label text-md-right">Paroles</label>

        <textarea id="paroles" rows="20" class="form-control form-content @error('paroles') is-invalid @enderror" name="paroles" placeholder="Paroles"autocomplete="paroles">{{ old('paroles')}}</textarea>

        @error('paroles')
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
        var chant = null;
        axios.get('/folklore/chant/'+id).then(function(response){
            chant = response.data;
            var type = document.getElementById('type');
            $('#type').val(chant.type).change();
            type.parentNode.classList.remove("d-none");
            var paroles = document.getElementById('paroles');
            paroles.innerHTML = chant.paroles;
            paroles.parentNode.classList.remove("d-none");
            document.getElementById('submit').classList.remove('d-none');
            document.getElementById('reset').classList.remove('d-none');
        });
        document.form.action = "/folklore/chants/update/"+id;
    }
</script> 
@endpush