@extends($chemin_theme_actif,['title' => 'Arrivage-Create'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Ajout D'un Arrivage</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Arrivage</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Ajout D'un Arrivage</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Ajout D'un Arrivage</header>
                        <button id="panel-button"
                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button">
                            <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                here</li>
                        </ul>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form method="POST" action="{{ route('arrivage.store') }}"  class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <!--Start Nom -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Nom De L'arrivage
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="nom_arrivage" placeholder="Entrez le nom de l'arrivage"
                                                value="{{ old('nom_arrivage') }}" class="form-control @error('nom_arrivage')is-invalid @enderror" required/>
                                               @error('nom_arrivage')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                               @enderror
                                        </div>
                                    </div>
                                <!-- End Nom -->
                                <!--Start nbre_voiture -->
                                    <div class="form-group row">
                                        <label for="nbre_voitures" class="control-label col-md-3">Nbre de voitutres
                                            <span class="required"></span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="nbre_voitures" placeholder="Entrez le nombre de voiture"
                                                value="{{ old('nbre_voitures') }}" class="form-control @error('nbre_voitures')is-invalid @enderror"/>
                                            @error('nbre_voitures')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End nbre_voiture -->
                                <!--Start nbre_voiture -->
                                    <div class="form-group row">
                                        <label for="nbre_camions" class="control-label col-md-3">Nbre de Camions
                                            <span class="required"></span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="nbre_camions" placeholder="Entrez le nombre de camions"
                                                value="{{ old('nbre_camions') }}" class="form-control @error('nbre_camions')is-invalid @enderror"/>
                                            @error('nbre_camions')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End nbre_voiture -->
                                <!--Start nbre_voiture -->
                                    <div class="form-group row">
                                        <label for="nbre_pieces" class="control-label col-md-3">Nbre de pieces
                                            <span class="required"></span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="nbre_pieces" placeholder="Entrez le nombre de pieces"
                                                value="{{ old('nbre_pieces') }}" class="form-control @error('nbre_pieces')is-invalid @enderror"/>
                                            @error('nbre_pieces')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                            <!-- End nbre_voiture -->
                            <!--Start nbre_voiture -->
                                <div class="form-group row">
                                    <label for="nbre_divers" class="control-label col-md-3">Nbre de divers
                                        <span class="required"></span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="nbre_divers" placeholder="Entrez le nombre de divers"
                                            value="{{ old('nbre_divers') }}" class="form-control @error('nbre_divers')is-invalid @enderror"/>
                                        @error('nbre_divers')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong id="msg_error_profil">{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                            <!-- End nbre_voiture -->
                            <!--Start nbre_voiture -->
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="date" name="date_arrivage" placeholder="Entrez la date de l'arrivage"
                                            value="{{ old('date_arrivage') }}" class="form-control @error('date_arrivage')is-invalid @enderror"/>
                                        @error('date_arrivage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong id="msg_error_profil">{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                            <!-- End nbre_voiture -->
                            <!--Start nbre_voiture -->
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Heure
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="time" name="heure_arrivage" placeholder="Entrez l'heure de l'arrivage"
                                            value="{{ old('heure_arrivage') }}" class="form-control @error('heure_arrivage')is-invalid @enderror"/>
                                        @error('heure_arrivage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong id="msg_error_profil">{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                            <!-- End nbre_voiture -->

                            <!-- Start Bouton Valider Annuler And Back -->
                                <div class="center form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-8">
                                            <button type="submit" class="btn btn-success m-r-20">
                                                <i class="fa fa-check"></i> Valider
                                            </button>
                                            <button type="reset" class="btn btn-danger">
                                                <i class="fa fa-times"></i> Annuler
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <!-- End Bouton Valider Annuler  And Back -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
