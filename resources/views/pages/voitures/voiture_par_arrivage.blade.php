{{-- on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'Voiture-Liste'])
@section('content')
    <style>
        @media print{
            #media_screen{
                display:none;
            }
        }
    </style>
    <div id="media_screen" class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Voitures Par Arrivage</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Voitures</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Voitures Par Arrivage</li>
            </ol>
        </div>
    </div>
    <div id="media_screen" class="row">
        <div class="col-md-12">
            <div class="tabbable-line">
                <ul class="nav customtab nav-tabs" role="tablist">
                    <li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
                            View</a></li>
                    <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid
                            View</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-topline-red">
                                    <div class="card-head">
                                        <header>Liste Des Voiture De L'{{ $arrivage_choisi->nom_arrivage }}</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh"
                                                href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down"
                                                href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times"
                                                href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="btn-group">
                                                    <a href="{{ route('home') }}" id="addRow"
                                                        class="btn btn-info">
                                                        <i class="fa fa-reply"></i> Retour
                                                    </a>
                                                </div>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#nouveau">Nouveau
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <!-- debut modal -->
                                                    <div class="modal fade" data-backdrop="static" id="nouveau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div  class="modal-header btn btn-danger text-center text-white">
                                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Ajouter Une Voiture</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- start modal body -->
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('voiture.store') }}" method="post" enctype="multipart/form-data">
                                                                            {{ csrf_field() }}
                                                                            <div class="form-group">
                                                                                <label for="immatriculation">N° Châssis </label>
                                                                                <input type="text" name="immatriculation" id="immatriculation" class="form-control" value="{{ old('immatriculation') }}" placeholder="Entrez Le N° De Châssis" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="nom_voiture">Nom De La Voiture</label>
                                                                                <input type="text" name="nom_voiture" id="nom_voiture" class="form-control" value="{{ old('nom_voiture')}}" placeholder="Entrez Le Nom De La Voiture" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="kilometrage">Kilomètrage</label>
                                                                                <input type="text" name="kilometrage" id="kilometrage" class="form-control" value="{{ old('kilometrage')}}" placeholder="Entrez le kilomètrage" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="prix">Prix</label>
                                                                                <input type="tel" name="prix" id="prix" class="form-control" value="{{ old('prix')}}" placeholder="Entrez le Prix" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="description">Description</label>
                                                                                <input type="text" name="description" id="description" class="form-control" value="{{ old('description')}}" placeholder="Entrez la description" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Fournisseur</label>
                                                                                <select class="form-control" name="fournisseur_id" id="fournisseur_id" required>
                                                                                    @foreach ($all_fournisseurs as $fournisseur)
                                                                                        <option value="{{ $fournisseur->id }}">
                                                                                            {{ $fournisseur->prenom.' '.$fournisseur->nom }}
                                                                                            Contact: {{ $fournisseur->contact}}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Arrivage</label>
                                                                                <select class="form-control" name="arrivage_id" id="arrivage_id" required>
                                                                                        @foreach ($all_arrivages as $arrivage)
                                                                                            <option value="{{ $arrivage->id }}">{{ $arrivage->nom_arrivage }}</option>
                                                                                        @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="image_voiture">Ajouter une photo</label>
                                                                                <input type="file" name="image_voiture" id="image_voiture" class="form-control-file" value="{{ old('image_voiture')}}" placeholder="Ajouter une photo">
                                                                            </div>
                                                                            <div class="modal-footer d-flex justify-content-center">
                                                                                <button type="submit" class="btn btn-primary" >Valider <i class="fa fa-check"></i></button>
                                                                                &nbsp;&nbsp;
                                                                                <button class="btn btn-danger" data-dismiss="modal">Annuler <i class="fa fa-times"></i></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                <!-- end modal body -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- fin modal -->
                                                <a  onclick="printDiv('liste_voiture')"  class="btn btn-primary"><i class="fa fa-print"></i> Imprimer </a>
                                                <div class="btn-group">
                                                    <button id="addRow1" data-toggle="modal" data-target="#all_niveau" class="btn btn-primary">
                                                        <i class="fa fa-list"></i> Afficher Les Voitures Par Arrivage
                                                    </button>
                                                </div>
                                                <!-- debut modal -->
                                                    <div class="modal fade" data-backdrop="static" id="all_niveau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                            aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div  class="modal-header btn btn-danger text-center text-white">
                                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Afficher Les Voitures Par Arrivage</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- start modal body -->
                                                                    <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="">Selectionner un arrivage</label>
                                                                                <select onchange="window.location.href = this.value" class="form-control" name="niveau_id" id="niveau_id" required>
                                                                                <option value=""></option>
                                                                                @foreach ($all_arrivages as $arrivage)
                                                                                    <option value="{{ route('voiture_par_arrivage',$arrivage->id) }}">{{ $arrivage->nom_arrivage}}</option>
                                                                                @endforeach
                                                                                </select>
                                                                            </div>

                                                                            <div class="modal-footer d-flex justify-content-center">
                                                                                <button class="btn btn-primary" data-dismiss="modal">Annuler <i class="fa fa-times"></i></button>
                                                                            </div>
                                                                    </div>
                                                                <!-- end modal body -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- fin modal -->
                                            </div>
                                        </div>

                                        <div class="table-scrollable">
                                            <table
                                                class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="eleves">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"> Image </th>
                                                        <th class="text-center"> N° châssi </th>
                                                        <th class="text-center"> Voiture </th>
                                                        <th class="text-center"> Prix </th>
                                                        <th class="text-center"> Status </th>
                                                        <th class="text-center"> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all_voitures as $voiture)
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="/images/photos/voitures/{{$voiture->image_voiture}}"
                                                                    alt="ndsplus-voitures">
                                                            </td>
                                                            <td class="text-center">{{ $voiture->immatriculation }}</td>
                                                            <td class="text-center">{{ $voiture->nom_voiture }}</td>
                                                            <th class="text-center">{{ $voiture->prix }}</th>
                                                            <th class="text-center">{{ $voiture->status }}</th>
                                                            <td>
                                                                <a href="{{ route('voiture.show',$voiture->id) }}"
                                                                    class="btn btn-info">
                                                                    <i class="fa fa-eye"></i> Afficher
                                                                </a>
                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $voiture->id }}">
                                                                    <i class="fa fa-edit"></i> Modifier
                                                                </button>
                                                                <!-- debut modal -->
                                                                    <div class="modal fade" data-backdrop="static" id="classes{{ $voiture->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div  class="modal-header btn btn-danger text-center text-white">
                                                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Modification Des Informations</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <!-- start modal body -->
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('voiture.update',$voiture->id) }}" method="post" enctype="multipart/form-data">
                                                                                            {{ csrf_field() }}
                                                                                            {{ method_field('PUT') }}
                                                                                            <div class="form-group">
                                                                                                <label for="immatriculation">Immatriculation</label>
                                                                                                <input type="text" name="immatriculation" id="immatriculation" class="form-control" value="{{ $voiture->immatriculation }}" placeholder="immatriculation" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="nom_voiture">Nom De La Voiture</label>
                                                                                                <input type="text" name="nom_voiture" id="nom_voiture" class="form-control" value="{{ $voiture->nom_voiture }}" placeholder="Nom de la voiture" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="kilometrage">Kilomètrage</label>
                                                                                                <input type="text" name="kilometrage" id="kilometrage" class="form-control" value="{{ $voiture->kilometrage }}" placeholder="Entrez le kilomètrage" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="prix">Prix</label>
                                                                                                <input type="text" name="prix" id="prix" class="form-control" value="{{ $voiture->prix}}" placeholder="Le prix de la voiture" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="description">Description</label>
                                                                                                    <textarea id="description" class="form-control" name="description" rows="1">{{$voiture->description}}</textarea>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">Fournisseur</label>
                                                                                                <select class="form-control" name="fournisseur_id" id="fournisseur_id" required>
                                                                                                    @foreach ($all_fournisseurs as $fournisseur)
                                                                                                        <option value="{{ $fournisseur->id }}" @if($fournisseur->id == $voiture->fournisseur_id) selected @endif>
                                                                                                            {{ $fournisseur->prenom.' '.$fournisseur->nom }}
                                                                                                            Contact: {{ $fournisseur->contact}}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">Arrivage</label>
                                                                                                <select class="form-control" name="arrivage_id" id="arrivage_id" required>
                                                                                                        @foreach ($all_arrivages as $arrivage)
                                                                                                            <option value="{{ $arrivage->id }}" @if($arrivage->id == $voiture->arrivage_id) selected @endif>{{ $arrivage->nom_arrivage }}</option>
                                                                                                        @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="image_voiture">Photo De La Voiture</label>
                                                                                                <input type="file" name="image_voiture" id="image_voiture" class="form-control-file" value="{{ old('image_voiture')}}" placeholder="Ajouter une photo">
                                                                                            </div>
                                                                                            <div class="modal-footer d-flex justify-content-center">
                                                                                                <button type="submit" class="btn btn-primary" >Valider <i class="fa fa-check"></i></button>
                                                                                                &nbsp;&nbsp;
                                                                                                <button class="btn btn-danger" data-dismiss="modal">Annuler <i class="fa fa-times"></i></button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                <!-- end modal body -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <!-- fin modal -->
                                                                <a href="#myModaldelete" data-toggle="modal" onclick="deleteData({{ $voiture->id }})"
                                                                    class="btn btn-danger">
                                                                    <i class="fa fa-trash"></i> Supprimer
                                                                </a>
                                                                <div id="myModaldelete" class="mt-5 modal fade" data-backdrop="static">
                                                                    <div class="mt-5 modal-dialog modal-confirm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header flex-column">
                                                                                <div class="icon-box">
                                                                                    <i class="material-icons">&#xE5CD;</i>
                                                                                </div>
                                                                                <h4 class="modal-title w-100">Êtes-vous certain?</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>
                                                                                    Vous pouvez restaurer vos données supprimer au niveau de la corbeille
                                                                                </p>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-center">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                                <form action="{{ route('voiture.destroy',$voiture->id) }}" method="post" id="deleteform">
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('DELETE') }}
                                                                                    <button  type="button" onclick = "formSubmit()" class="btn btn-danger" data-dismiss="modal">
                                                                                        Oui Supprimer
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="row">
                            @foreach ($all_voitures as $voiture)
                                <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                                    <div class="blogThumb">
                                        <div class="thumb-center">
                                            <img class="img-responsive" alt="ndsplus-voitures" id="voiture"
                                                src="/images/photos/voitures/{{$voiture->image_voiture}}">
                                        </div>
                                        <div class="course-box">
                                            <h4><i class="fa fa-th"></i> Immatriculation: {{ $voiture->immatriculation }}</h4>
                                            <h4><i class="fa fa-car"></i> Voiture: {{ $voiture->nom_voiture }}</h4>
                                            <h4><i class="fa fa-credit-card"></i> Prix: {{ $voiture->prix.' GNF' }}</h4>

                                            <a href="{{ route('voiture.show',$voiture->id) }}"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">
                                                <i class="fa fa-eye"></i> Afficher
                                            </a>
                                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary" data-toggle="modal" data-target="#voiture{{ $voiture->id }}">
                                                <i class="fa fa-edit"></i> Modifier
                                            </button>
                                            <!-- debut modal -->
                                                <div class="modal fade" data-backdrop="static" id="voiture{{ $voiture->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div  class="modal-header btn btn-danger text-center text-white">
                                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Modification Des Informations</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                                </button>
                                                            </div>
                                                            <!-- start modal body -->
                                                                <div class="modal-body">
                                                                    <form action="{{ route('voiture.update',$voiture->id) }}" method="post" enctype="multipart/form-data">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('PUT') }}
                                                                        <div class="form-group">
                                                                            <label for="immatriculation">Immatriculation</label>
                                                                            <input type="text" name="immatriculation" id="immatriculation" class="form-control" value="{{ $voiture->immatriculation }}" placeholder="immatriculation" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="nom_voiture">Nom De La Voiture</label>
                                                                            <input type="text" name="nom_voiture" id="nom_voiture" class="form-control" value="{{ $voiture->nom_voiture }}" placeholder="Nom de la voiture" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="kilometrage">Kilomètrage</label>
                                                                            <input type="text" name="kilometrage" id="kilometrage" class="form-control" value="{{ $voiture->kilometrage }}" placeholder="Entrez le kilomètrage" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="prix">Prix</label>
                                                                            <input type="text" name="prix" id="prix" class="form-control" value="{{ $voiture->prix}}" placeholder="Le prix de la voiture" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="description">Description</label>
                                                                                <textarea id="description" class="form-control" name="description" rows="1">{{$voiture->description}}</textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Fournisseur</label>
                                                                            <select class="form-control" name="fournisseur_id" id="fournisseur_id" required>
                                                                                @foreach ($all_fournisseurs as $fournisseur)
                                                                                    <option value="{{ $fournisseur->id }}" @if($fournisseur->id == $voiture->fournisseur_id) selected @endif>
                                                                                        {{ $fournisseur->prenom.' '.$fournisseur->nom }}
                                                                                        Contact: {{ $fournisseur->contact}}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Arrivage</label>
                                                                            <select class="form-control" name="arrivage_id" id="arrivage_id" required>
                                                                                    @foreach ($all_arrivages as $arrivage)
                                                                                        <option value="{{ $arrivage->id }}" @if($arrivage->id == $voiture->arrivage_id) selected @endif>{{ $arrivage->nom_arrivage }}</option>
                                                                                    @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="image_voiture">Photo De La Voiture</label>
                                                                            <input type="file" name="image_voiture" id="image_voiture" class="form-control-file" value="{{ old('image_voiture')}}" placeholder="Ajouter une photo">
                                                                        </div>
                                                                        <div class="modal-footer d-flex justify-content-center">
                                                                            <button type="submit" class="btn btn-primary" >Valider <i class="fa fa-check"></i></button>
                                                                            &nbsp;&nbsp;
                                                                            <button class="btn btn-danger" data-dismiss="modal">Annuler <i class="fa fa-times"></i></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            <!-- end modal body -->
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- fin modal -->
                                            <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $voiture->id }})"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-danger">
                                                <i class="fa fa-trash"></i> Supprimer
                                            </a>
                                            <div id="myModal" class="mt-5 modal fade" data-backdrop="static">
                                                <div class="mt-5 modal-dialog modal-confirm">
                                                    <div class="modal-content">
                                                        <div class="modal-header flex-column">
                                                            <div class="icon-box">
                                                                <i class="material-icons">&#xE5CD;</i>
                                                            </div>
                                                            <h4 class="modal-title w-100">Êtes-vous certain?</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                Vous pouvez restaurer vos données supprimer au niveau de la corbeille
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer justify-content-center">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                            <form action="{{ route('voiture.destroy',$voiture->id) }}" method="post" id="deleteform">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <button  type="button" onclick = "formSubmit()" class="btn btn-danger" data-dismiss="modal">
                                                                    Oui Supprimer
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div id="liste_voiture" class="row">
        <style>
            @media print {
                /* utiliser pour le projet de voiture aussi */

                .souligner{
                    border-bottom: 5px;
                    border-bottom-width:50px;
                    border-bottom: solid 5px;
                }
                #ecriture{
                    font-size:x-large;
                    font-family: Arial, Helvetica, sans-serif;
                }
                #entete_facture{
                    font-family: Arial, Helvetica, sans-serif;
                    font-style: italic;
                    margin-top: -2%;
                }
                #entete_facture2{
                    font-size:large;
                    font-family: Arial, Helvetica, sans-serif;
                    margin-top: -3%;
                }
                #entete_facture3
                {
                    font-size:large;
                    font-family: Arial, Helvetica, sans-serif;
                    margin-top: 0.70%;
                }

                #hauteur_image{
                    height: 178px;
                }
                #ligne_entete
                {
                    border-bottom: 5px;
                    border-bottom-width:50px;
                    border-bottom: solid 5px;
                    margin-top: 2%;
                    margin-right: -3%;
                }
            }
        </style>
        <div id="invisible-screen" class="col-md-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="pull-left">
                                <address>
                                    <div class="row">
                                        <div>
                                            <img id="hauteur_image" class="img-thumbnail" src="/images/photos/logos/gauche.png" alt="logo_voiture">
                                        </div>
                                        <div class="center">
                                            <h3 id="entete_facture" class="mx-auto text-center font-bold">ETABLISSEMENT YACOUBA BAH ET FRERE</h3>
                                            <div id="entete_facture2">
                                                Commerçant Import Et Export
                                            </div>
                                            <div id="entete_facture3">
                                                Vendeur Des Pièces Détachées, Poids Lourds
                                            </div>
                                            <div id="entete_facture3">
                                                Vehicules Et Pneu
                                            </div>
                                            <div id="entete_facture3">
                                                Tél: 622-57-13-11 / 662-92-85-29 / 628-56-11-15 / 622-25-51-97
                                            </div>
                                            <div id="entete_facture3">
                                                 E-mail: yagoubabah2@gmail.com - Conakry - Rep de Guinée<br>
                                            </div>
                                            <div id="entete_facture3">
                                                Site Web: ndspiece.com
                                            </div>
                                            <div id="ligne_entete">

                                            </div>
                                        </div>
                                    </div>
                                </address>
                            </div>
                            <div class="pull-right text-right">
                                <address>
                                    <div class="row">
                                        <div>
                                            <img id="hauteur_image" class="img-thumbnail" src="/images/photos/logos/droite.jpg" alt="logo_voiture">
                                        </div>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <br><br>
                        <div class="row pull-right col-md-12 col-sm-12 col-lg-12">
                            <div class="pull-right col-md-12 col-sm-12 col-lg-12">
                                <div class="cercles">
                                    <div class="pull-right">
                                        <h4 class="font-bold">
                                            <br>
                                           Conakry, le {{ date('d/m/Y') }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-md-12 col-sm-12 col-lg-12">
                            <div class="mx-auto col-md-12 col-sm-12 col-lg-12">
                                <div class="cercles">
                                    <div class="text-center">
                                        <h1 class="font-bold">
                                            <i class="souligner">Liste Des Voitures De L' {{ $arrivage_choisi->nom_arrivage }}</i>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table id="bordure_table" class="table table-bordered">
                                <th class="text-center" id="bordure_table">N°</th>
                                <th class="text-center" id="bordure_table"> Voture </th>
                                <th class="text-center" id="bordure_table"> N° Châssi</th>
                                <th class="text-center" id="bordure_table">Prix</th>
                                <tbody id="bordure_table">
                                    @foreach ($all_voitures as $voiture)
                                        <tr id="bordure_table">
                                            <td class="text-center" id="bordure_table">{{ $b++ }}</td>
                                            <td class="text-center" id="bordure_table">{{$voiture->nom_voiture}}</td>
                                            <td class="text-center" id="bordure_table">{{ $voiture->immatriculation }}</td>
                                            <td class="text-center" id="bordure_table">{{ $voiture->prix.' GNF' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!--Script d'impression -->
<script>
    function printDiv(liste_voiture) {
     var printContents = document.getElementById('liste_voiture').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
{{-- script utiliser pour la suppression d'une voiture --}}
<script>
    function deleteData(id)
         {
             var id = id;
             var url = '{{ route("voiture.destroy", ":id") }}';
             url = url.replace(':id', id);
             $("#deleteform").attr('action', url);
         }
    function formSubmit()
    {
        // alert("bonjour");
        $("#deleteform").submit();
    }
</script>
