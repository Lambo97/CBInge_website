@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card bg-dark">
        <div class="card-header">Liste des bleus de {{Auth::user()->surnom_forum}}</div>
            <div class="card-body text-center">

                <table class="table">
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                    @forelse ($bleus as $bleu)
                        <tr>
                            <td>{{ $bleu->prenom }}</td>
                            <td>{{ $bleu->name }}</td>
                            <td><a href="{{ '/profile/removeBleu/'.$bleu->id }}"
                                    class="btn btn-primary btn-sm">Supprimer</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Pas encore de bleus</td>
                        </tr>
                    @endforelse
                </table>
            <a class="btn btn-primary" href="/profile/edit/{{Auth::user()->id}}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection