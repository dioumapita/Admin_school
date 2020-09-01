{{-- on herite du layout activer --}}
    @extends($chemin_theme_actif,['title' => 'inscription-eleves'])
        
        @section('content')
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Ajouter Un Elève</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Elèves</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Ajouter Un Elève</li>
                    </ol>
                </div>
            </div>
            <!-- Start Formulaire inscription elève -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Informations Personnelles</header>
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
                                <form action="#" id="form_sample_1" class="form-horizontal" method="POST" autocomplete="on">
                                    <div class="form-body">
                                    <!-- Start information personnelle de l'élève -->

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
                                                    <select class="form-control input-height" name="sexe">
                                                        <option value="">Selectionner...</option>
                                                        <option value="Masculin">Masculin</option>
                                                        <option value="Feminin">Feminin</option>
                                                    </select>
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
                                                    <select class="form-control input-height" name="classe">
                                                        <option value="">Selectionner...</option>
                                                        <option value="1">Computer</option>
                                                        <option value="Category 2">Mechanical</option>
                                                        <option value="Category 3">Mathematics</option>
                                                        <option value="Category 3">Commerce</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <!-- End classe -->
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
                                        <!--Start Adresse email élève -->
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Adresse e-mail
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control input-height"
                                                            name="email" placeholder="Veuillez saisir l'adresse email de l'èlève">
                                                    </div>
                                                    <span class="help-block">Ce champ de saisie est facultatif</span>
                                                </div>
                                            </div>
                                        <!-- End Adresse email élève -->
                                    <!-- End information personnelle de l'élève -->

                                    <!-- Start information du parent ou de l'élève -->

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
                                        <!--Start Adresse email parent -->
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Adresse e-mail du parent ou tuteur
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control input-height"
                                                            name="email_parent" placeholder="Veuillez saisir l'adresse email du parent ou tuteur">
                                                    </div>
                                                    <span class="help-block">Ce champ de saisie est facultatif</span>
                                                </div>
                                            </div>
                                        <!-- End Adresse email parent -->
                                        <!--Start Quartier parent and élève -->
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
                                        <!-- End Quartier parent and élève -->
                                    <!-- Start information du parent ou de l'élève -->
                                        <!-- Start date de naissance -->
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Date d'inscription
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" class="form-control input-height"
                                                            name="date_inscription" id="date_inscription" class="floating-label mdl-textfield__input" 
                                                            placeholder="Date de naissance de l'élève" required>
                                                        </div>
                                                </div>
                                            </div>
                                        <!-- End date de naissance -->
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Profile Picture
                                            </label>
                                            <div class="compose-editor">
                                                <input type="file" class="default" multiple>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit"
                                                        class="btn btn-info m-r-20">Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End formulaire inscription élève -->
        @endsection