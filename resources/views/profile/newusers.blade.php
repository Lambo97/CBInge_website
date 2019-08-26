@extends('layouts.app')

@section('title')
<title> CB Ingé - Approuver les bleus </title>
@endsection

@section('content')
<div class="row approve">
    <h4 class="card-header">Bleus à approuver</h4>
    <table class="table card-body">
        <tr class="approve_title">
            <th>Nom</th>
            <th>Prenom</th>
            <th>Surnom</th>
            <th>Inscris le</th>
            <th></th>
            <th></th>
        </tr>
        @forelse ($users as $user)
            <tr class="approve_user">
                <td>{{ $user->name }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->surnom }}</td>
                <td>{{ date("d-m-Y H:i:s", strtotime($user->created_at)) }}</td>
                <td><a href="{{ '/profile/approve/'.$user->id }}"
                        class="btn buttons-green btn-primary btn-sm">Approuver</a></td>
                <td><a href="{{ '/profile/destroy/'.$user->id }}"
                        class="btn buttons-green btn-primary btn-sm">Supprimer</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Pas d'utilisateur à approuver</td>
            </tr>
        @endforelse
    </table>
</div>
@endsection
