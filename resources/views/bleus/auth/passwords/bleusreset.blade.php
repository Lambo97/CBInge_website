@extends('layouts.app')

@section('title')
<title> CB Ingé - Reset mot de passe </title>
@endsection

@section('content')
        <h2><strong>Reset du mot de passe</strong></h2>

                
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="d-none col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control form-content @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="d-none col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                           
                                <input id="password" type="password" class="form-control form-content @error('email') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="Nouveau mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="d-none col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control form-content" name="password_confirmation" required autocomplete="new-password"placeholder="confirmer nouveau mot de passe">
                            
                        </div>

                        <div class="d-flex flex-row-reverse mb-2">
                            
                                <button type="submit" class="buttons-green font-weight-bold">
                                    {{ __('Reset Password') }}
                                </button>
                            
                        </div>
                    </form>
                   
@endsection
