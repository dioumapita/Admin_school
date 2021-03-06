{{-- on herite du chemin du theme actif --}}
    @extends($chemin_theme_actif,['title' => 'Voiture-Show'])
        @section('content')
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Imformation Détaillée D'une Voiture</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Voitures</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Imformation Détaillée D'une Voiture</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                        <div class="profile-sidebar">
                            <div class="card card-topline-aqua">
                                <div class="card-head card-topline-aqua">
                                    <header class="mx-auto">Fournisseur</header>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="profile-userpic">
                                            <img src="/images/photos/avatars/default.png" class="img-responsive" alt=""> </div>
                                    </div>
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name">{{ $Voiture->fournisseur->prenom.' '.$Voiture->fournisseur->nom }} </div>
                                    </div>
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Contact</b> <a class="pull-right">{{ $Voiture->fournisseur->contact }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Ville</b> <a class="pull-right">{{ $Voiture->fournisseur->ville}}</a>
                                        </li>
                                    </ul>
                                    <!-- END SIDEBAR USER TITLE -->
                                </div>
                            </div>
                        </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>Voiture</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>
                                                        <b>Immatriculation:</b> {{ $Voiture->immatriculation}}<br>
                                                        <b>Voiture:</b> {{ $Voiture->nom_voiture }}<br>
                                                        <b>Prix:</b> {{ $Voiture->prix}}<br>
                                                        <b>Arrivage:</b> {{ $Voiture->arrivage->nom_arrivage}}
                                                    </h4>
                                                </div>
                                                <div class="thumb-center col-md-8">
                                                    <img class="img-responsive" alt="ndsplus-voiture" width="750px"
                                                        src="/images/photos/voitures/{{$Voiture->image_voiture}}">
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
            </div>

        @endsection
