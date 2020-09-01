{{-- on herite du layout actif --}}
@extends($chemin_theme_actif,['title' => 'change_password'])

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Changer mon mot de passe</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Mot de passe</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Changer mon mot de passe</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <div class="card card-topline-aqua">
                    <div class="card-body no-padding height-9">
                        <div class="row">
                            <div class="profile-userpic">
                                <img src="images/photos/avatars/{{ $avatar }}" class="img-circle" alt="photo_profil" width="500" height="140"> 
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">{{ $nom }}</div>
                            <div class="profile-usertitle-job"> Superviseur </div>
                        </div>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Prénom</b> <a class="pull-right">{{ $prenom }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Téléphone</b> <a class="pull-right">{{ $telephone }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Adresse</b> <a class="pull-right">{{ $adresse }}</a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <a type="button" href="{{ route('mon_profil') }}" class="btn btn-circle red btn-sm">Mon profil</a>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                    </div>
                </div>
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN CHANGE PASSWORD -->
            <div class="profile-content">
                <div class="row">
                    <div class="card">
                        <div class="card-topline-aqua">
                            <header></header>
                        </div>
                        <div class="white-box">
                            <!-- Nav tabs -->
                            <div class="p-rl-20">
                                <ul class="nav customtab nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#tab1" class="nav-link active" data-toggle="tab">
                                            Changer mon mot de passe
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active fontawesome-demo" id="tab1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="full-width p-rl-20">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="card card-box">
                                                        <div class="card-body " id="bar-parent6">
                                                            <form method="POST" id="form_sample_1" action="{{ route('update_password') }}">
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <label for="password_courant">Mot de passe actuel</label>
                                                                            <input type="password" name="password_courant" class="form-control @error('password_courant')is-invalid @enderror" id="password_courant"
                                                                                placeholder="Saisissez votre mot de passe actuel" required/>
                                                                            <!-- Message d'erreur du mot de passe actuel -->
                                                                            @error('password_courant')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="new_password">Nouveau mot de passe</label>
                                                                        <div class="input-group">
                                                                            <input type="password" name="new_password" class="form-control input-height @error('new_password')is-invalid @enderror" id="new_password"
                                                                                placeholder="Votre nouveau mot de passe doit avoir au minimum 8 caractères" required/>
                                                                        </div>
                                                                            <!-- Message d'erreur du nouveau mot de passe -->
                                                                            @error('new_password')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="confirm_new_password">Confirmer le nouveau mot de passe</label>
                                                                        <div class="input-group">
                                                                            <input type="password" name="confirm_new_password" class="form-control" id="confirm_new_password"
                                                                                placeholder="Confirmer votre nouveau mot de passe"/>
                                                                        </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-danger btn-block">Changer le mot de passe</button>
                                                            </form>
                                                        </div>
                                                        <div class="espace">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection