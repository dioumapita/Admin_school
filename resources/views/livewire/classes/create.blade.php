<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Ajouter Une Classe</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Classes</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Ajouter Une Classe</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Ajouter Une Classe</header>
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
                <form wire:submit.prevent='store_classe' class="form-horizontal">
                    <div class="form-body">
                        <!--Start Niveau -->
                            <div class="form-group row">
                                <label class="control-label col-md-3">Niveau
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" wire:model='nom' name="nom" placeholder="Entrez un niveau (Exemple: 1ère année)"
                                        class="form-control @error('nom')is-invalid @enderror" />
                                       @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong id="msg_error_profil">{{ $message }}</strong>
                                            </span>
                                       @enderror
                                </div>
                            </div>
                        <!-- End Niveau -->
                        <!-- Start Branches -->
                            <div class="form-group row">
                                <label class="control-label col-md-3">Branches
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select wire:model='branche' class="form-control @error('branche')is-invalid @enderror" name="branche">
                                        <option value="">Selectionner...</option>
                                        <option value="Enseignement Général">Enseignement Général</option>
                                        <option value="Science Expérimentale">Science Expérimentale</option>
                                        <option value="Science Sociale">Science Sociale</option>
                                        <option value="Science Mathématique">Science Mathématique</option>
                                    </select>
                                    @error('branche')
                                        <span class="invalid-feedback" role="alert">
                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        <!-- End Branches -->
                        <!-- Start Année Scolaire -->
                        <div class="form-group row">
                            <label class="control-label col-md-3">Année Scolaire
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <select wire:model='annee_id' class="form-control @error('annee_id')is-invalid @enderror" name="annee_id">
                                    <option value="">Selectionner...</option>
                                        @foreach ($annees as $annee)
                                            <option value="{{ $annee->id }}">{{ $annee->annee_scolaire }}</option>
                                        @endforeach 
                                </select>
                                @error('annee_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <!-- End Année Scolaire -->
                        <!-- Start Bouton Valider And Annuler -->                       
                            <div class="center form-actions">
                                <div class="row">
                                    <div class="offset-md-3 col-md-8">
                                        <button type="submit" class="btn btn-success m-r-20">
                                            <i class="fa fa-check"></i> Valider
                                        </button>
                                        <button wire:click='annuler()' type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></i> Annuler
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <!-- End Bouton Valider And Annuler -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>