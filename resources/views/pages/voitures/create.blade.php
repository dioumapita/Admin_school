{{-- on herite du chemin du theme actif --}}
    @extends($chemin_theme_actif,['title' => 'Voiture-Create'])
        @section('content')
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Ajout Des Voitures</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Voitures</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Ajout Des Voitures</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Ajout Des Voitures</header>
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
                            <form method="POST" action="{{ route('voiture.store') }}"  class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <!--Start Nom -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Immatriculation
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="immatriculation" placeholder="Entrez l'immatriculation de la voiture"
                                                    value="{{ old('immatriculation') }}" class="form-control @error('immatriculation')is-invalid @enderror" required/>
                                                   @error('immatriculation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                        </span>
                                                   @enderror
                                            </div>
                                        </div>
                                    <!-- End Nom -->
                                    <!--Start Nom -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Nom De La Voiture
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="nom_voiture" placeholder="Entrez le nom de la voiture"
                                                    value="{{ old('nom_voiture') }}" class="form-control @error('nom_voiture')is-invalid @enderror" required/>
                                                @error('nom_voiture')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    <!-- End Niveau -->
                                    <div class="form-group row">
                                      <label for="image_voiture" class="control-label col-md-3">Photo De La Voiture</label>
                                        <div class="col-md-5">
                                            <input type="file" class="form-control-file" name="image_voiture" id="image_voiture" placeholder="Choisir une image" aria-describedby="fileHelpId">
                                        </div>
                                    </div>
                                     <!--Start Contact -->
                                     <div class="form-group row">
                                        <label class="control-label col-md-3">Kilomètrage
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="kilometrage" placeholder="Entrez le kilometrage"
                                                value="{{ old('kilometrage') }}" class="form-control @error('kilometrage')is-invalid @enderror" required/>
                                            @error('kilometrage')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End Contact -->
                                    <!--Start Contact -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Prix
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="prix" placeholder="Entrez le prix"
                                                    value="{{ old('prix') }}" class="form-control @error('prix')is-invalid @enderror" required/>
                                                @error('prix')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    <!-- End Contact -->
                                    <!--Start Ville -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Description De La Voiture
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea placeholder="Description De La Voiture" name="description" id="description" cols="30" class="form-control" rows="3"  required></textarea>
                                            </div>
                                        </div>
                                    <!-- End ville -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Fournisseur
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                          <select class="form-control" name="fournisseur_id" id="fournisseur_id" required>
                                            <option value="">Selectionnez un fournisseur</option>
                                                @foreach ($all_fournisseurs as $fournisseur)
                                                    <option value="{{ $fournisseur->id }}">
                                                        {{ $fournisseur->prenom.' '.$fournisseur->nom }}
                                                        Contact: {{ $fournisseur->contact}}
                                                    </option>
                                                @endforeach
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Arrivage
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                          <select class="form-control" name="arrivage_id" id="arrivage_id" required>
                                            <option value="">Selectionnez un arrivage</option>
                                                @foreach ($all_arrivages as $arrivage)
                                                    <option value="{{ $arrivage->id }}">{{ $arrivage->nom_arrivage }}</option>
                                                @endforeach
                                          </select>
                                        </div>
                                    </div>

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
