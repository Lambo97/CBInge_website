@extends('layouts.app')

@section('content')

        <h2><strong>Liste des parrains de {{Auth::user()->surnom_forum}}</strong></h2>
           

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Annee Bapteme</th>
                        <th></th>
                     
                    </tr>
                    </thead>   
                    @forelse ($parrains as $parrain)
                        <tr>
                            <td>{{ $parrain->prenom }}</td>
                            <td>{{ $parrain->name }}</td>
                            <td>{{ $parrain->annee_bapteme }}</td>
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