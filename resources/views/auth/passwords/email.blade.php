@extends('layouts.app')

@section('content')
                <h2 style="margin-left: -15px"><strong>Reset du mot de passe</strong></h2>

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="d-none col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control form-content @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="d-flex flex-row-reverse mb-2">
                            
                                <button type="submit" class="buttons-green font-weight-bold">
                                    {{ __('Envoyer lien de reset par email') }}
                                </button>
                            
                        </div>
                    </form>
                
@endsection
