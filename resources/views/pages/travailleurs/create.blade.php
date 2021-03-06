@extends($chemin_theme_actif,['title' => 'Travailleur'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Inscription Des Travailleurs</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Travailleurs</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Inscription Des Travailleurs</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Ajouter Un Travailleur</header>
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
                        <form method="POST" action="{{ route('travailleur.store') }}"  class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <!--Start Nom -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Nom
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="nom" placeholder="Entrez le nom"
                                                value="{{ old('nom') }}" class="form-control @error('nom')is-invalid @enderror" required/>
                                               @error('nom')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                               @enderror
                                        </div>
                                    </div>
                                <!-- End Nom -->
                                <!--Start Nom -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Prénom
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="prenom" placeholder="Entrez le prenom"
                                                value="{{ old('prenom') }}" class="form-control @error('prenom')is-invalid @enderror" required/>
                                            @error('prenom')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End Niveau -->
                                <!--Start Contact -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Contact
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="contact" placeholder="Entrez le contact"
                                                value="{{ old('contact') }}" class="form-control @error('contact')is-invalid @enderror" required/>
                                            @error('contact')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End Contact -->
                                <!--Start Ville -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Quartier
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="quartier" placeholder="Entrez le quartier"
                                                value="{{ old('quartier') }}" class="form-control @error('quartier')is-invalid @enderror" required/>
                                            @error('quartier')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End ville -->
                                <!-- Start Image -->
                                    <div class="form-group row">
                                      <label class="control-label col-md-3" for="">Photo</label>
                                        <div class="col-md-5">
                                            <input type="file" class="form-control-file" name="image_travailleur" id="image_travailleur" placeholder="Choisir une image" aria-describedby="fileHelpId">
                                        </div>
                                    </div>
                                <!-- end Image -->
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
