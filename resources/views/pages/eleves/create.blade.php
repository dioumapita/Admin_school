{{-- on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'eleves-inscription'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Inscription Des Elèves</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Elèves</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Inscription Des Elèves</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Inscriptions Des Elèves</header>
                    </div>
                    <div class="card-body ">
                        <form id="example-advanced-form" method="POST" action="{{ route('eleve.store') }}" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h3>Informations générales de l'élève étape1/3</h3>
                            <fieldset>
                                <div class="col-lg-12 p-t-20">
                                    <!-- Start nom de l'élève -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Nom
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="text" name="nom" minlength="2" placeholder="Veuillez saisir le nom de l'élève"
                                                        class="form-control input-height" required />
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End nom de l'élève -->
                                    <!-- Start prénom de l'élève -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Prénom
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="text" name="prenom" minlength="4" placeholder="Veuillez saisir le prénom de l'élève"
                                                        class="form-control input-height" required />
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End prénom de l'élève -->
                                    <!-- Start civilite -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Sexe
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <select class="form-control input-height" name="sexe">
                                                        <option value="">Selectionner...</option>
                                                        <option value="Masculin">Masculin</option>
                                                        <option value="Feminin">Feminin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End civilite -->
                                    <!-- Start date de naissance de l'élève -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Date de naissance
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control input-height"
                                                        name="date_naissance" id="date_naissance" class="floating-label mdl-textfield__input" 
                                                        placeholder="Date de naissance de l'élève" required>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End date de naissance -->
                                    <!-- Start classe -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Classe
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <select class="form-control input-height" name="classe">
                                                        <option value="">Selectionner...</option>
                                                        @foreach ($all_classes as $classe)
                                                            <option value="{{ $classe->id }}">{{ $classe->nom_niveau.' '.$classe->options }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End classe -->
                                </div>
                            </fieldset>
                            <h3>Informations générales de l'élève étape2/3</h3>
                            <fieldset>
                                <div class="col-lg-12 p-t-20">
                                    <!-- Start Année Scolaire -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Année Scolaire
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <select class="form-control input-height" name="annee">
                                                        <option value="">Selectionner...</option>
                                                        @foreach ($all_annees as $annee)
                                                            <option value="{{ $annee->id }}">{{ $annee->annee_scolaire}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Année Scolaire -->
                                    <!-- Start numéro téléphone élève -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Téléphone
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input name="telephone" type="text" placeholder="Veuillez saisir le numéro de téléphone de l'élève"
                                                        class="form-control input-height"/>
                                                </div>
                                                <span class="help-block">Ce champ de saisie est facultatif</span>
                                            </div>
                                            
                                        </div>
                                    <!-- End numéro téléphone élève -->
                                    <!--Start Quartier -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Quartier
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </span>
                                                    <input type="text" class="form-control input-height"
                                                        name="quartier" placeholder="Veuillez saisir une adresse (Quartier)" required>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Quartier -->
                                    <!-- Start date d'inscription -->
                                        {{-- <div class="form-group row">
                                            <label class="control-label col-md-3">Date d'inscription
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control input-height"
                                                        name="date_inscription" id="date_inscription" class="floating-label mdl-textfield__input" 
                                                        placeholder="Date d'inscription" required>
                                                    </div>
                                            </div>
                                        </div> --}}
                                    <!-- End date d'inscription -->
                                </div>
                            </fieldset>
                            <h3>Informations générales de l'élève étape3/3</h3>
                            <fieldset>
                                <!-- Start photo profil -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Photo
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input name="photo_profil" type="file" class="form-control input-height"/>
                                            </div>
                                            <span class="help-block">Selectionner une image de profil</span>
                                        </div>    
                                    </div>
                                <!-- End photo profil -->
                            </fieldset>
                            <h3>Informations familiales</h3>
                            <fieldset>
                                <!-- Start nom du parent ou tuteur -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Nom du parent ou tuteur
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input type="text" name="nom_parent" minlength="2" placeholder="Veuillez saisir le nom du parent ou tuteur"
                                                    class="form-control input-height" required />
                                            </div>
                                        </div>
                                    </div>
                                <!-- End nom du parent ou tuteur -->
                                <!-- Start prénom du parent ou tuteur -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Prénom du parent ou tuteur
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input type="text" name="prenom_parent" minlength="4" placeholder="Veuillez saisir le prénom du parent ou tuteur"
                                                    class="form-control input-height" required />
                                            </div>
                                        </div>
                                    </div>
                                <!-- End prénom du parent ou tuteur -->
                                <!-- Start profession du parent ou tuteur -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Profession du parent ou tuteur
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input type="text" name="profession" placeholder="Veuillez saisir la profession du parent ou tuteur"
                                                    class="form-control input-height" required />
                                            </div>
                                        </div>
                                    </div>
                                <!-- End profession du parent ou tuteur -->
                                <!-- Start numéro téléphone du parent ou tuteur -->
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Téléphone du parent ou tuteur
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input name="telephone_parent" type="text" placeholder="Veuillez saisir le numéro de téléphone du parent ou tuteur"
                                                    class="form-control input-height" required/>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End numéro téléphone du parent ou tuteur -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    @endsection