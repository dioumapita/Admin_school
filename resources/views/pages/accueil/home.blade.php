{{-- on herite du layout active --}}
    @extends($chemin_theme_actif,['title' => 'accueil'])

    @section('content')

        <!-- Start title -->
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Tableau de bord</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;
                            <a class="parent-item" href="#">Accueil</a>&nbsp;
                                <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Tableau de bord</li>
                    </ol>
                </div>
            </div>
        <!-- End title -->
        <!-- Start widget -->
            <div class="state-overview">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel bg-b-green">
                            <div class="symbol">
                                <i class="fa fa-users usr-clr"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="5000">0</p><br>
                                <p class="text-size">ELEVES</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel bg-b-yellow">
                            <div class="symbol">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p><br>
                                <p class="text-size1">ENSEIGNANTS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel bg-b-blue">
                            <div class="symbol">
                                <i class="fa fa-university"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="14">0</p>
                                <p class="text-size">Salles De Classes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel bg-b-pink">
                            <div class="symbol">
                                <i class="fa fa-signal"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="1">0</p>
                                <p class="text-size">Utilisateur Connecté</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end widget -->
        <!-- start Eleves AND Notes-->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header>Eleves</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <!-- debut -->
                                        <div class="state-overview">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <a href="{{ route('eleve.create') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">person_add</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Inscriptions</h3> 
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel deepPink-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">mood_bad</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Absences</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 col-12">
                                                    <a href="{{ route('eleve.index') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">view_list</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Listes</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>	
                                            </div>
                                        </div>
                                    <!-- fin -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-topline-yellow">
                                <div class="card-head">
                                    <header>Notes</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="state-overview">
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <a href="{{ route('liste_des_notes') }}">
                                                <div class="overview-panel orange">
                                                    <div class="symbol">
                                                        <i class="material-icons">note_add</i>
                                                    </div>
                                                    <div class="value white">
                                                        <h3>Notes</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="overview-panel orange">
                                                <div class="symbol">
                                                    <i class="fa fa-file-text"></i>
                                                </div>
                                                <div class="value white">
                                                    <h3>Moyennes</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Eleves AND Notes -->
        <!-- start Enseignants -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-lightblue">
                                <div class="card-head">
                                    <header>Enseignants</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <!-- debut -->
                                        <div class="state-overview">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">group_add</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Inscriptions</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">mood_bad</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Absences</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-12 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">work</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Projets Pédagogiques</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-12 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">view_list</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Listes</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- fin -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        <!-- End Enseignants -->
        <!-- start Matières And Emplois -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-topline-yellow">
                                <div class="card-head">
                                    <header>Matières</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <!-- debut -->
                                        <div class="state-overview">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <a class="text-white" href="{{ route('matiere.create') }}">
                                                        <div class="overview-panel bg-b-yellow">
                                                            <div class="symbol">
                                                                <i class="material-icons">library_books</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Ajouts</h3> 
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel bg-b-yellow">
                                                        <div class="symbol">
                                                        <big><big>5</big></big>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Matieres</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 col-12">
                                                    <a class="text-white" href="{{ route('matiere.index') }}">
                                                        <div class="overview-panel bg-b-yellow">
                                                            <div class="symbol">
                                                                <i class="material-icons">view_list</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Listes</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>	
                                            </div>
                                        </div>
                                    <!-- fin -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-topline-yellow">
                                <div class="card-head">
                                    <header>Emplois du temps</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="state-overview">
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="overview-panel bg-b-green">
                                                <div class="symbol">
                                                    <i class="material-icons">event</i>
                                                </div>
                                                <div class="value white">
                                                    <h3>Planning</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="overview-panel bg-b-green">
                                                <div class="symbol">
                                                    <i class="fa fa-users usr-clr"></i>
                                                </div>
                                                <div class="value white">
                                                    <h4>Répartitions</br>Enseignants</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Matières AND Emplois -->
        <!-- Start Comptable -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-purple">
                                <div class="card-head">
                                    <header>Comptabilite</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <!-- debut -->
                                        <div class="state-overview">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel purple">
                                                        <div class="symbol">
                                                            <i class="fa fa-credit-card-alt"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Paiement Droit Scolaires</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel purple">
                                                        <div class="symbol">
                                                            <i class="fa fa-credit-card-alt"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Paiement Droit Scolaires</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-12 col-12">
                                                    <div class="overview-panel purple">
                                                        <div class="symbol">
                                                            <i class="fa fa-credit-card-alt"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Paiement Droit Scolaires</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-12 col-12">
                                                    <div class="overview-panel purple">
                                                        <div class="symbol">
                                                            <i class="fa fa-credit-card"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Paiement Droit Scolaires</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- fin -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Comptable -->
        <!-- Start Impression -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-lightblue">
                                <div class="card-head">
                                    <header>Impressions</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <!-- debut -->
                                        <div class="state-overview">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="fa fa-address-card"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Cartes Scolaires</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="fa fa-file-word-o"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Builletins</br>De Notes</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="fa fa-file"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Certificats</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">alarm</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Heures</br>Enseignées</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">content_paste</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Rapport</br>Journalier</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-12">
                                                    <div class="overview-panel blue-bgcolor">
                                                        <div class="symbol">
                                                            <i class="material-icons">today</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Rapport</br>Mensuel</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- fin -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Impression -->
        <!-- Start Statistique,Messagerie,Corbeille -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header>Statistiques</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <!-- debut -->
                                        <div class="state-overview">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-6 col-12">
                                                    <div class="overview-panel deepPink-bgcolor">
                                                        <div class="symbol">
                                                            <i class="fa fa-bar-chart"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Pyramide</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel deepPink-bgcolor">
                                                        <div class="symbol">
                                                            <i class="fa fa-line-chart"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Registre</br>Des Entrées</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <div class="overview-panel deepPink-bgcolor">
                                                        <div class="symbol">
                                                            <i class="fa fa-area-chart"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Registre</br>Des Sorties</h4>
                                                        </div>
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                    <!-- fin -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-topline-yellow">
                                <div class="card-head">
                                    <header>Autres</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="state-overview">
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="overview-panel orange">
                                                <div class="symbol">
                                                    <i class="material-icons">email</i>
                                                </div>
                                                <div class="value white">
                                                    <h4>Messagerie</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="overview-panel orange">
                                                <div class="symbol">
                                                    <i class="material-icons">delete</i>
                                                </div>
                                                <div class="value white">
                                                    <h4>Corbeille</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Statistique,Messagerie,Corbeille -->

    @endsection