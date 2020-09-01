{{-- on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'eleve-detail'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Profil Eleve</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Elèves</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Profil Eleve</li>
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
                                    <img src="/assets/asset_principal/img/dp.jpg" class="img-responsive" alt=""> </div>
                            </div>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{ $eleve->nom }} </div>
                            </div>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Annee Scolaire</b> <a class="pull-right">{{ $eleve->inscrits->first()->annee->annee_scolaire }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Téléphone</b> <a class="pull-right">{{ $eleve->telephone }}</a>
                                </li>
                            </ul>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class="profile-userbuttons">
                                <button type="button"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">Envoyer un message à l'élève 
                                </button>
                                <button type="button"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Envoyer un message au parent
                                </button>
                            </div>
                            <!-- END SIDEBAR BUTTONS -->
                        </div>
                    </div>
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
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
                                        <li class="nav-item"><a href="#tab1" class="nav-link active"
                                                data-toggle="tab">Informations générales de l'élève </a></li>
                                        <li class="nav-item"><a href="#tab2" class="nav-link"
                                                data-toggle="tab">Informations familliales</a></li>
                                    </ul>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div id="biography">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r"> <strong>Matricule</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->matricule }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r"> <strong>Nom</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->nom }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r"> <strong>Prénom</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->prenom }}</p>
                                                </div>
                                                <div class="col-md-3 col-6"> <strong>Sexe</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->sexe }}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r"> <strong>Classe</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->inscrits()->first()->niveau->nom_niveau.' '.$eleve->inscrits()->first()->niveau->options }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r"> <strong>Date de naissance</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->date_naissance }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r"> <strong>Date inscription</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->inscrits()->first()->date_inscription }}</p>
                                                </div>
                                                <div class="col-md-3 col-6"> <strong>Quartier</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->quartier }}</p>
                                                </div>
                                            </div>
                                            <span class="espace"></span>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r"> <strong>Nom</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->nom_parent }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r"> <strong>Prénom</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->prenom_parent }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r"> <strong>Profession</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->profession }}</p>
                                                </div>
                                                <div class="col-md-3 col-6"> <strong>Téléphone</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $eleve->telephone_parent }}</p>
                                                </div>
                                            </div>
                                            <span class="espace"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
    @endsection