@extends('layouts.app')

@section('title')
<title> CB Ingé - Parrains</title>
@endsection

@section('content')

        <h2 class="mb-4"><strong>Liste des parrains de {{Auth::user()->surnom_forum}}</strong></h2>
           

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th class="text-center">Prénom</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Annee Bapteme</th>
                        <th></th>
                        
                     
                    </tr>
                    </thead>   
                    @forelse ($parrains as $parrain)
                        <tr>
                            <td class="text-center">{{ $parrain->prenom }}</td>
                            <td class="text-center">{{ $parrain->name }}</td>
                            <td class="text-center">{{ $parrain->annee_bapteme }}</td>
                            <td><a href="{{ '/profile/removeParrain/'.$parrain->id }}"
                                    class="btn btn-primary btn-sm">Supprimer</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Pas encore de parrain</td>
                        </tr>
                    @endforelse
                </table>
            <h3>Ajouter des parrains:</h3>
            <searchBar link="/profile/addParrain/"></searchBar>
            <a class="buttons-green" href="/profile/edit/{{Auth::user()->id}}">Retour</a>
        
@endsection