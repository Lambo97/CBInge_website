@extends('layouts.app')

@section('title')
<title> CB Ingé - Parrains</title>
@endsection

@section('content')

        <h2><strong>Liste des parrains de {{Auth::user()->surnom_forum}}</strong></h2>
           

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
            <a class="buttons-green" href="/profile/edit/{{Auth::user()->id}}">Retour</a>
        
@endsection