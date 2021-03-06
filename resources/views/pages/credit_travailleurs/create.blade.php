@extends($chemin_theme_actif,['title' => 'Credits-Travailleurs'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Crédits Des Travailleurs</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Travailleurs</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Crédits Des Travailleurs</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-topline-red">
                                        <div class="card-head">
                                            <header>Liste Des Travailleurs</header>
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
                                                                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Ajouter Un Fournisseur</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true" class="white-text">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- start modal body -->
                                                                        <div class="modal-body">
                                                                            <form action="{{ route('travailleur.store') }}" method="post" enctype="multipart/form-data">
                                                                                {{ csrf_field() }}
                                                                                <div class="form-group">
                                                                                    <label for="nom">Nom </label>
                                                                                    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" placeholder="Entrez le nom" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="prenom">Prénom</label>
                                                                                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom')}}" placeholder="Entrez le prénom" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contact">Contact</label>
                                                                                    <input type="tel" name="contact" id="contact" class="form-control" value="{{ old('contact')}}" placeholder="Entrez le contact" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ville">Quartier</label>
                                                                                    <input type="text" name="quartier" id="quartier" class="form-control" value="{{ old('quartier')}}" placeholder="Entrez le quartier" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="image_travailleur">Ajouter une photo</label>
                                                                                    <input type="file" name="image_travailleur" id="image_travailleur" class="form-control-file" value="{{ old('image_travailleur')}}" placeholder="Ajouter une photo">
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
                                                    <a id="imprimer" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer la liste des fournisseurs</a>
                                                </div>
                                            </div>

                                            <div class="table-scrollable">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                        id="eleves">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center"> Image </th>
                                                            <th class="text-center"> Travailleur </th>
                                                            <th class="text-center"> Mt Crédit </th>
                                                            <th class="text-center"> Mt Rembourser </th>
                                                            <th class="text-center"> Reste </th>
                                                            <th class="text-center"> Actions </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($all_travailleurs as $travailleur)

                                                            <tr class="odd gradeX">
                                                                <td class="patient-img">
                                                                    <img src="/images/photos/travailleurs/{{ $travailleur->image_travailleur }}"
                                                                        alt="ndsplus-travailleur">
                                                                </td>
                                                                <td class="text-center">{{ $travailleur->nom.' '.$travailleur->prenom }}</td>
                                                                <td class="text-center">{{ $travailleur->contact }}</td>
                                                                <td class="text-center"></td>
                                                                <td class="text-center"></td>
                                                                <td>
                                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $travailleur->id }}">Effectuez un prêt
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                    <!-- debut modal -->
                                                                        <div class="modal fade" data-backdrop="static" id="classes{{ $travailleur->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div  class="modal-header btn btn-danger text-center text-white">
                                                                                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Gestion Des Prêts</h4>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true" class="white-text">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <!-- start modal body -->
                                                                                        <div class="modal-body">
                                                                                            <form action="{{ route('credit_travailleur.store') }}" method="post">
                                                                                                {{ csrf_field() }}
                                                                                                <input type="hidden" name="travailleur_id" value="{{ $travailleur->id }}">
                                                                                                <div class="form-group">
                                                                                                    <label for="montant_credit">Montant Crédit</label>
                                                                                                    <input type="number" name="montant_credit" id="montant_credit" class="form-control" min="0" placeholder="montant credit" required>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                  <label for="type_paiement">Type de paiement</label>
                                                                                                  <select class="form-control" name="type_paiement" id="type_paiement">
                                                                                                    <option value="Espèce">Espèce</option>
                                                                                                    <option value="Dépôt">Dépôt</option>
                                                                                                    <option value="Chèque">Chèque</option>
                                                                                                    <option value="Autres">Autres</option>
                                                                                                  </select>
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
                                                                    <a href="{{ route('credit_travailleur.show',$travailleur->id) }}" class="btn btn-danger"><i class="fa fa-recycle" aria-hidden="true"></i> Historique Des Paiements</a>
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
                    </div>
            </div>
        </div>
    @endsection
