@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card bg-dark">
            <div class="card-header">Users List to Approve</div>

            <div class="card-body">

                <table class="table">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Surnom</th>
                        <th>Inscris le</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->prenom }}</td>
                            <td>{{ $user->surnom }}</td>
                            <td>{{ date("d-m-Y H:i:s", strtotime($user->created_at)) }}</td>
                            <td><a href="{{ '/profile/approve/'.$user->id }}"
                                   class="btn btn-primary btn-sm">Approver</a></td>
                            <td><a href="{{ '/profile/destroy/'.$user->id }}"
                                    class="btn btn-primary btn-sm">Supprimer</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Pas d'utilisateur à approuver</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection