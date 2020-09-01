@extends('layouts.auth',['title' => 'inscription'])

@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <span class="login100-form-logo">
                    <img alt="" src="assets/asset_auth/images/logo-2.png">
                </span>
                <span class="login100-form-title p-b-34 p-t-27">
                    INSCRIPTION
                </span>
                <div class="row">
                    <!-- Nom -->
                            <div class="wrap-input100 validate-input">
                                <input class="input100 form-control @error('nom') is-invalid @enderror" type="text" name="nom" value="{{ old('nom') }}"  placeholder="Votre nom">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            <!-- Message d'erreur du nom -->
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="msg_error">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <!-- Prénom -->
                            <div class="wrap-input100 validate-input">
                                <input class="input100 form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" value="{{ old('prenom') }}" placeholder="Votre prénom">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            <!-- Message d'erreur du prénom -->
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="msg_error">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <!-- Username -->
                            <div class="wrap-input100 validate-input">
                                <input class="input100 form-control @error('username') is-invalid @enderror " type="text" name="username" value="{{ old('username') }}" placeholder="Votre username">
                                <span class="focus-input100" data-placeholder="&#xf203;"></span>
                            <!-- Message d'erreur du username -->
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong id="msg_error">{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                    <!-- Email -->
                            <div class="wrap-input100 validate-input">
                                <input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Votre mail">
                                <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                            <!-- Message d'erreur de l'email -->
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong id="msg_error">{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                    <!-- Password -->
                            <div class="wrap-input100 validate-input">
                                <input class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Mot de passe">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            <!-- Message d'erreur du password -->
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="msg_error">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <!-- COnfirm Password -->
                            <div class="wrap-input100 validate-input">
                                <input class="input100 form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirmer">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            <!-- Message d'erreur de la confirmation du password -->
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="msg_error">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Valider
                    </button>
                </div>
                <div class="text-center p-t-30">
                    <a class="txt1" href="{{ route('login') }}">
                        Avez-vous déjà un compte?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
