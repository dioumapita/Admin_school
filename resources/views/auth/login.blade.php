@extends('layouts.auth',['title' => 'connexion'])

@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    <span class="login100-form-logo">
                        <img alt="" src="/assets/asset_auth/images/logo-2.png">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        CONNEXION
                    </span>
                <!-- Username -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100 form-control @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" placeholder="Votre Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    <!-- Message d'erreur username -->
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong id="msg_error">{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                <!-- Password -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Votre Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        <!-- Message d'erreur password -->
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong id="msg_error">{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Valider
                        </button>
                    </div>
                    <div class="text-center p-t-30">
                        <a class="txt1" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
