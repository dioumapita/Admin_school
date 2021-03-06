{{-- on herite du layout active --}}
    @extends($chemin_theme_actif,['title' => 'accueil'])

    @section('content')

        <!-- Start title -->
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Menu Principal</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;
                            <a class="parent-item" href="#">Accueil</a>&nbsp;
                                <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Menu Principal</li>
                    </ol>
                </div>
            </div>
        <!-- End title -->
        <!-- Start widget -->
            <div class="state-overview">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                        <div class="overview-panel bg-b-pink">
                            <div class="symbol">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{ $nbre_voitures}}">0</p><br>
                                <p class="text-size">VOITURES</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                        <div class="overview-panel bg-b-blue">
                            <div class="symbol">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{ $nbre_fournisseurs }}">0</p>
                                <p class="text-size"> Fournisseurs </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end widget -->
        <!-- start Gestion Des Achats -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header>Gestion Des Achats</header>
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
                                                <div class="col-xl-6 col-md-6 col-12 ">
                                                    <a href="{{ route('voiture.index') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">person_add</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Voitures</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                        <a href="{{ route('piece.index') }}">
                                                            <div class="overview-panel deepPink-bgcolor">
                                                                <div class="symbol">
                                                                    <i class="material-icons">person_add</i>
                                                                </div>
                                                                <div class="value white">
                                                                    <h3>Pièces</h3>
                                                                </div>
                                                            </div>
                                                        </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="{{ route('divers.index') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">view_list</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Divers</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="{{ route('depense.index') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">view_list</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Dépense</h3>
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
                    </div>
                </div>
            </div>
        <!-- End Gestion Des Achats -->
        <!-- start Eleves AND Notes-->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        {{-- <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header>Gestion Des Voitures</header>
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
                                                <div class="col-xl-6 col-md-6 col-12 ">
                                                    <a href="{{ route('voiture.create') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">person_add</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Ajouts</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                        <a href="{{ route('voiture.index') }}">
                                                            <div class="overview-panel deepPink-bgcolor">
                                                                <div class="symbol">
                                                                    <i class="material-icons">person_add</i>
                                                                </div>
                                                                <div class="value white">
                                                                    <h3>Listes</h3>
                                                                </div>
                                                            </div>
                                                        </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="{{ route('vente_voiture.create') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">view_list</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Ventes</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="{{ route('credit_voiture') }}">
                                                        <div class="overview-panel deepPink-bgcolor">
                                                            <div class="symbol">
                                                                <i class="material-icons">view_list</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Crédits</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- fin -->
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="card card-topline-yellow">
                                <div class="card-head">
                                    <header>Gestion Des Ventes</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="state-overview">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                {{-- {{ route('vente_piece.index') }} --}}
                                                <a href="#">
                                                    <div class="overview-panel orange">
                                                        <div class="symbol">
                                                            <i class="material-icons">note_add</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Effectuez Des Ventes</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                {{-- {{ route('vente_piece.index') }} --}}
                                                <a href="#">
                                                    <div class="overview-panel orange">
                                                        <div class="symbol">
                                                            <i class="fa fa-file-text"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Liste Des Ventes</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-6">
                                                {{-- {{ route('vente_piece.create') }} --}}
                                                <a href="#">
                                                    <div class="overview-panel orange">
                                                        <div class="symbol">
                                                            <i class="fa fa-file-text"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Commande Non Valider</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-6">
                                                {{ route('credit_piece') }}
                                                <a href="#">
                                                    <div class="overview-panel orange">
                                                        <div class="symbol">
                                                            <i class="fa fa-file-text"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Liste Des Crédits</h3>
                                                        </div>
                                                    </div>
                                                </a>
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
        {{-- <!-- Start Divers -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-lightblue">
                                <div class="card-head">
                                    <header>Gestion Des Divers</header>
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
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="{{ route('divers.create') }}">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-address-card"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Ajout</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="#">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-file-word-o"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h4>Liste</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <a href="{{ route('vente_divers.create') }}">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-file"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Vente</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <a href="#">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-file"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Crédits</h3>
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
                    </div>
                </div>
            </div>
        <!-- End Divers --> --}}
        <!-- Start Impression -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-lightblue">
                                <div class="card-head">
                                    <header>Gestion Des Travailleurs</header>
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
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="#">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-address-card"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Inscription</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="#">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-file-word-o"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h4>Liste</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <a href="#">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-file"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Paiements</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <a href="#">
                                                        <div class="overview-panel blue-bgcolor">
                                                            <div class="symbol">
                                                                <i class="fa fa-file"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Crédits</h3>
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
                    </div>
                </div>
            </div>
        <!-- End Impression -->
        <!-- Start Impression -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-lightblue">
                                <div class="card-head">
                                    <header>Comptabilité</header>
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
                                                <div class="col-xl-12 col-md-12 col-12">
                                                    <a href="{{ route('compta_generale')  }}">
                                                        <div class="overview-panel comptabilite">
                                                            <div class="symbol">
                                                                <i class="fa fa-address-card"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Générale</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-6">
                                                    <a href="#">
                                                        <div class="overview-panel comptabilite">
                                                            <div class="symbol">
                                                                <i class="fa fa-file-word-o"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h4>Par Arrivage</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-12">
                                                    <a href="#">
                                                        <div class="overview-panel comptabilite">
                                                            <div class="symbol">
                                                                <i class="fa fa-file"></i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Diaka</h3>
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
                    </div>
                </div>
            </div>
        <!-- End Impression -->
        <!-- start Matières And Emplois -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-topline-yellow">
                                <div class="card-head">
                                    <header>Gestion Des Fournisseurs</header>
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
                                                    <a class="text-white" href="{{ route('fournisseur.create') }}">
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
                                                    <a class="text-white" href="{{ route('fournisseur.index') }}">
                                                        <div class="overview-panel bg-b-yellow">
                                                            <div class="symbol">
                                                                <i class="material-icons">settings</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Listes</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-12 col-md-12 col-12">
                                                    <a class="text-white" href="#">
                                                        <div class="overview-panel bg-b-yellow">
                                                            <div class="symbol">
                                                                <i class="material-icons">view_list</i>
                                                            </div>
                                                            <div class="value white">
                                                                <h3>Impressions</h3>
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
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>Gestion Des Arrivages</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="state-overview">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <a class="text-white" href="{{ route('arrivage.create') }}">
                                                    <div class="overview-panel bg-b-green">
                                                        <div class="symbol">
                                                            <i class="material-icons">event</i>
                                                        </div>
                                                        <div class="value white">
                                                            <h3>Ajouts</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <a class="text-white" href="{{ route('arrivage.index') }}">
                                                    <div class="overview-panel bg-b-green">
                                                        <div class="symbol">
                                                            <i class="fa fa-users usr-clr"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Listes</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-12">
                                                <a class="text-white" href="#">
                                                    <div class="overview-panel bg-b-green">
                                                        <div class="symbol">
                                                            <i class="fa fa-users usr-clr"></i>
                                                        </div>
                                                        <div class="value white">
                                                            <h4>Impressions</h4>
                                                        </div>
                                                    </div>
                                                </a>
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
    @endsection
