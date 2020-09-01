@extends('layouts.auth',['title' => 'réinitialisation de mot de passe'])

@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                    <span class="login100-form-logo">
                        <img alt="" src="/assets/asset_auth/images/password.jpg">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Réinitialiser le mot de passe
                    </span>
                <!-- Email -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" placeholder="Votre email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    <!-- Message d'erreur email -->
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong id="msg_error">{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                <!-- Password -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Nouveau mot de passe">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        <!-- Message d'erreur password -->
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong id="msg_error">{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                <!-- Confirmation Password -->
                <div class="wrap-input100 validate-input">
                    <input class="input100 form-control" type="password" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Valider
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection
