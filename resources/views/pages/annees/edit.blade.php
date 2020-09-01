{{-- on herite du theme actif --}}
@extends($chemin_theme_actif,['title' => 'annee-scolaire-edit'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Modification D'une Année Scolaire</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Etablissement</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Modification D'une Année Scolaire</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Modification de l'année scolaire: {{ $annee->annee_scolaire }}</header>
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
                    <form action="{{ route('annees.update',$annee->id) }}" method="POST" id="form_sample_1" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-body">
                            <!--Start Début année scolaire -->
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Début
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name="debut_annee" id="debut_annee" 
                                                value="{{ old('debut_annee')?old('debut_annee'):$annee->debut_annee }}"
                                                placeholder="Cliquez pour ajouter le debut de l'année scolaire"
                                                class="form-control @error('debut_annee')is-invalid @enderror"/>
                                                {{-- message d'erreur du début d'année --}}
                                                    @error('debut_annee')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                    </div>
                                </div>
                            <!-- ENd Début année scolaire -->
                            <!-- Start Fin année scolaire -->
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Fin
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name="fin_annee" id="fin_annee"
                                                value="{{ old('fin_annee')?old('fin_annee'):$annee->fin_annee }}"
                                                placeholder="Cliquez pour ajouter la fin de l'année scolaire" 
                                                class="form-control @error('fin_annee')is-invalid @enderror"/>
                                                {{-- message d'erreur de la fin d'annee --}}
                                                    @error('fin_annee')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                        
                                    </div>
                                </div>
                            <!-- End Start année scolaire -->
                            <!-- Start bouton valider et annuler -->
                                <div class="center form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-8">
                                            <button type="submit" class="btn btn-success">
                                            <i class="fa fa-check"></i> Valider
                                            </button>
                                            <a href="{{ route('annees.index') }}">
                                                <button type="button" class="btn btn-dark">
                                                    <i class="fa fa-mail-reply"></i> Retour
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <!-- End bouton valider et annuler -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection