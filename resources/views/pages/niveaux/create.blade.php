{{-- on herite du theme activer --}}
@extends($chemin_theme_actif,['title' => 'classe-ajout'])
    @section('content')
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
                        <form method="POST" action="{{ route('niveaux.store') }}"  class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <!--Start Niveau -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Niveau
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="nom_niveau" placeholder="Entrez un niveau (Exemple: 1ère année)"
                                                value="{{ old('nom_niveau') }}" class="form-control @error('nom_niveau')is-invalid @enderror" />
                                               @error('nom_niveau')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                    </span>
                                               @enderror
                                        </div>
                                    </div>
                                <!-- End Niveau -->
                                <!-- Start Options -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Options
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select name="options" class="form-control @error('options')is-invalid @enderror">
                                                <option value="">Selectionner...</option>
                                                <option value="Science Expérimentale"@if(old('options') =="Science Expérimentale") selected="selected" @endif>Science Expérimentale</option>
                                                <option value="Science Sociale" @if(old('options') == "Science Sociale") selected="selected" @endif>Science Sociale</option>
                                                <option value="Science Mathématique" @if(old('options') == "Science Mathématique") selected="selected" @endif>Science Mathématique</option>
                                            </select>
                                            @error('options')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong id="msg_error_profil">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- End Options -->
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
                                                <a href="{{ route('niveaux.index') }}" class="btn btn-dark">
                                                    <i class="fa fa-reply-all"></i> Retour
                                                </a>
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