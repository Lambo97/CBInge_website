@extends('layouts.app')

@section('title')
<title> CB Ingé - Bleus </title>
@endsection

@section('content')

        <h2 class="mb-4">Liste des bleus de {{Auth::user()->surnom_forum}}</h2>
            

                <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                </thead>
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
            <h3 class="my-4">Ajouter des bleus:</h3>
            <searchBar link="/profile/addBleu/"></searchBar>
            <a class="buttons-green mt-5" href="/profile/edit/{{Auth::user()->id}}">Retour</a>
          
@endsection