@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card bg-dark">
        <div class="card-header">Liste des parrains de {{Auth::user()->surnom_forum}}</div>
            <div class="card-body text-center">

                <table class="table">
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Annee Bapteme</th>
                        <th></th>
                    </tr>
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
            <a class="btn btn-primary" href="/profile/edit/{{Auth::user()->id}}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection