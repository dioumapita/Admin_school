@extends($chemin_theme_actif,['title' => 'Divers-Ajout'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Ajouter Un Divers</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Divers</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Ajouter Un Divers</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Ajouter Un Divers</header>
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
                        <form method="POST" action="{{ route('divers.store') }}"  class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <!--Start Nom -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Nom
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="nom_divers" placeholder="Entrez le nom du divers"
                                                value="{{ old('nom_divers') }}" class="form-control @error('nom_divers')is-invalid @enderror" required/>
                                               @error('nom_divers')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                               @enderror
                                        </div>
                                    </div>
                                <!-- End Nom -->
                                <!--Start Nom -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Prix
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="prix" placeholder="Veuillez saisir le prix"
                                                value="{{ old('prix') }}" class="form-control @error('prix')is-invalid @enderror" required/>
                                            @error('prix')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End Niveau -->
                                <!--Start Contact -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Quantité
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="quantite" placeholder="Entrez la quantite"
                                                value="{{ old('quantite') }}" class="form-control @error('quantite')is-invalid @enderror" required/>
                                            @error('quantite')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End Contact -->
                                <!--Start Ville -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Arrivage
                                            <span class="required"> * </span>
                                        </label>
                                            <div class="col-md-5">
                                                <select class="form-control" name="arrivage_id" id="arrivage_id" required>
                                                    <option value=""></option>
                                                    @foreach ($all_arrivages as $arrivage)
                                                        <option value="{{ $arrivage->id }}">{{ $arrivage->nom_arrivage }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                                <!-- End ville -->
                                <!-- Start Image -->
                                    <div class="form-group row">
                                      <label class="control-label col-md-3" for="image_divers">Photo</label>
                                        <div class="col-md-5">
                                            <input type="file" class="form-control-file" name="image_divers" id="image_divers" placeholder="Choisir une image" aria-describedby="fileHelpId">
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
