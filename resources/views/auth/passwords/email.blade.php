@extends('layouts.auth',['title' => 'mot de passe oublier'])

@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
            @endif
            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                    <span class="login100-form-logo">
                        <img alt="" src="/assets/asset_auth/images/email.jpg">
                    </span>
                    <p class="text-center txt-small-heading">
                        Merci de renseigner votre adresse de messagerie.
                        Vous recevrez un e-mail contenant les instructions vous permettant de
                        réinitialiser votre mot de passe.
                    </p>
                    <div class="wrap-input100 validate-input">
                        <input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Votre E-mail">
                        <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                        <!-- Message d'erreur email -->
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong id="msg_error">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Réinitialiser le mot de passe
                        </button>
                    </div>
                    <div class="text-center p-t-27">
                        <a class="txt1" href="{{ route('login') }}">
                            Login?
                        </a>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
