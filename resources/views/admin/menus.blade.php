@extends('layouts.app')

@section('title')
<title> CB Ingé - Admin menu </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1 class="mb-3">Liste des menus</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/menus/addMenu">Ajouter un menu</a>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-12">
        <table class="table text-light">
            <tr>
                <th>Menu</th>
                <th>Sous-menu</th>
                <th>Droit</th>
                <th>Actif</th>
                <th></th>
            </tr>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{$menu->nom}}</td>
                    <td></td>
                    <td>
                        <select id="droitMenu{{$menu->id}}" class="form-control form-content" onchange="changeDroitMenu({{$menu->id}})">
                        @foreach ($droits as $value => $nom)
                            <option value={{$value}} @if($menu->droit == $value)selected @endif>{{$nom}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td>
                        <select id="afficheMenu{{$menu->id}}"  class="form-control form-content" onchange="changeAfficheMenu({{$menu->id}})">
                            <option value="1" @if($menu->afficher == 1) selected @endif>Oui</option>
                            <option value="0" @if($menu->afficher == 0) selected @endif>Non</option>
                        </select>  
                    </td>
                    <td><a class="green-link" href="/admin/menus/destroyMenu/{{$menu->id}}"><i class="far fa-trash-alt"></i></a></td>
                </tr>
                
                @foreach ($menu->sousMenus as $sous_menu)
                    <tr>
                        <td></td>
                        <td>{{$sous_menu->nom}}</td>
                        <td>
                            <select id="droitSousMenu{{$sous_menu->id}}" class="form-control form-content" onchange="changeDroitSousMenu({{$sous_menu->id}})">
                            @foreach ($droits as $value => $nom)
                                <option value={{$value}} @if($sous_menu->droit == $value)selected @endif>{{$nom}}</option>
                            @endforeach
                            </select>
                        </td>
                        <td>
                            <select id="afficheSousMenu{{$sous_menu->id}}"  class="form-control form-content" onchange="changeAfficheSousMenu({{$sous_menu->id}})">
                                <option value="1" @if($sous_menu->afficher == 1) selected @endif>Oui</option>
                                <option value="0" @if($sous_menu->afficher == 0) selected @endif>Non</option>
                            </select>  
                        </td>
                        <td><a class="green-link" href="/admin/menus/destroySousMenu/{{$sous_menu->id}}"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
                
            @endforeach
        </table>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12 col-sm-12">
        <h1 class="mb-3">Liste des menus du site des bleus</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12">
        <table class="table text-light">
            <tr>
                <th>Menu</th>
                <th>Droit</th>
                <th>Actif</th>
                <th></th>
            </tr>
            @foreach ($menus_bleus as $menu)
                <tr>
                    <td>{{$menu->nom}}</td>
                    <td>
                        <select id="droitMenuBleus{{$menu->id}}" class="form-control form-content" onchange="changeDroitMenuBleus({{$menu->id}})">
                            <option value="0" @if($menu->droit == "0")selected @endif>Tout le monde</option>
                            <option value="1" @if($menu->droit == "1")selected @endif>Comité + Bleus</option>
                        </select>
                    </td>
                    <td>
                        <select id="afficheMenuBleus{{$menu->id}}"  class="form-control form-content" onchange="changeAfficheMenuBleus({{$menu->id}})">
                            <option value="1" @if($menu->afficher == 1) selected @endif>Oui</option>
                            <option value="0" @if($menu->afficher == 0) selected @endif>Non</option>
                        </select>  
                    </td>
                    <td><a class="green-link" href="/admin/menus/destroyMenuBleus/{{$menu->id}}"><i class="far fa-trash-alt"></i></a></td>
                </tr>
                
            @endforeach
        </table>
    </div>
</div>
@endsection

@push('scripts')
   <script>
        function changeDroitMenu(id){
            var selector = document.getElementById('droitMenu'+id);
            axios.get('/admin/menus/droitMenu/'+id+'/'+selector.value).then(function(response){
                if(response.data == "Ok")
                    alert('Droit changé');
            });
        }

        function changeDroitMenuBleus(id){
            var selector = document.getElementById('droitMenuBleus'+id);
            axios.get('/admin/menus/droitMenuBleus/'+id+'/'+selector.value).then(function(response){
                if(response.data == "Ok")
                    alert('Droit changé');
            });
        }

        function changeDroitSousMenu(id){
            var selector = document.getElementById('droitSousMenu'+id);
            axios.get('/admin/menus/droitSousMenu/'+id+'/'+selector.value).then(function(response){
                if(response.data == "Ok")
                    alert('Droit changé');
            });
        }

        function changeAfficheMenu(id){
            var selector = document.getElementById('afficheMenu'+id);
            axios.get('/admin/menus/afficheMenu/'+id+'/'+selector.value).then(function(response){
                alert(response.data);
            });
        }

        function changeAfficheSousMenu(id){
            var selector = document.getElementById('afficheSousMenu'+id);
            axios.get('/admin/menus/afficheSousMenu/'+id+'/'+selector.value).then(function(response){
                alert(response.data);
            });
        }

        function changeAfficheMenuBleus(id){
            var selector = document.getElementById('afficheMenuBleus'+id);
            axios.get('/admin/menus/afficheMenuBleus/'+id+'/'+selector.value).then(function(response){
                alert(response.data);
            });
        }
   </script> 
@endpush