@extends('layouts.app')

@section('title')
<title> CB Ingé - Login</title>
@endsection

@section('content')
<h2 style="margin-left: -15px"><strong>Se connecter</strong></h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="login" class="d-none col-md-4 col-form-label text-md-right">Login</label>

                          
                                <input id="login" type="login" class="mt-3 form-control form-content @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus placeholder="Pseudo">

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" d-none col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control form-content @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"placeholder="Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        <div class="form-group row">
                            
                                <div class="form-check mr-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            
                        </div>

                        <div class="d-flex flex-row-reverse mb-2">
                            
                                <button type="submit" class="buttons-green font-weight-bold">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="green-link my-auto pr-2" href="{{ route('password.request') }}">
                                        Mot de passe oublié ?
                                    </a>
                                @endif
                           
                        </div>
                    </form>
             
@endsection
