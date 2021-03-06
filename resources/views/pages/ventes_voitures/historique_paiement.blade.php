@extends($chemin_theme_actif,['title' => 'Historique-Paiement-Voiture'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Historique De Paiement D'une Voiture Par Un Client</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Historique</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Historique De Paiement D'une Voiture Par Un Client</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header>Historique De Paiement D'une Voiture Par Un Client</header>
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
                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Ajout D'un Fournisseur</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- start modal body -->
                                                    <div class="modal-body">
                                                        <form action="{{ route('fournisseur.store') }}" method="post">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label for="nom">Nom</label>
                                                                <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" placeholder="Le nom" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="prenom">Prénom</label>
                                                                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom')}}" placeholder="Le prénom" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="contact">Contact</label>
                                                                <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}" placeholder="Le contact" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="ville">Ville</label>
                                                                <input type="text" name="ville" id="ville" class="form-control" value="{{ old('ville') }}" placeholder="La ville" required>
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
                                        <th style="width: 20%"> Client </th>
                                        <th> Contact </th>
                                        <th> Voiture</th>
                                        <th> Montant Payer </th>
                                        <th class="text-center"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_historiques as $historique)
                                        <tr class="odd gradeX">
                                            <td>{{ $historique->client->nom_client }}</td>
                                            <td>{{ $historique->client->contact_client }}</td>
                                            <td>
                                                {{ $historique->voiture->nom_voiture }}
                                            </td>
                                            <td>
                                                {{ $historique->montant_payer.' GNF'}}
                                            </td>
                                            <td class="">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $historique->id }}">Modifier
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <!-- debut modal -->
                                                    <div class="modal fade" data-backdrop="static" id="classes{{ $historique->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                        <form action="{{ route('vente_voiture.update',$historique->id) }}" method="post">
                                                                            {{ csrf_field() }}
                                                                            {{ method_field('PUT') }}
                                                                            <input type="hidden" name="client_id" value="{{ $historique->client->id }}">
                                                                            <div class="form-group">
                                                                                <label for="montant_payer">Montant Payé</label>
                                                                                <input type="text" name="montant_payer" id="montant_payer" class="form-control" value="{{ old('montant_payer')?old('montant_payer'):$historique->montant_payer }}" placeholder="Montant Payé" required>
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
                                                <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $historique->id }})"
                                                    class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Annuler Le Paiement
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
                                                                   Voulez-vous vraiment annuler le paiement ?
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                <form action="{{ route('delete_paiement_voiture',$historique->id) }}" method="post" id="deleteform">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <input type="hidden" name="voiture_id" value="{{ $historique->voiture->id }}">
                                                                    <button  type="button" onclick = "formSubmit()" class="btn btn-danger" data-dismiss="modal">
                                                                        Oui Annuler
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
    @endsection
    {{-- script utiliser pour la suppression d'une voiture --}}
    <script>
        function deleteData(id)
             {
                 var id = id;
                 var url = '{{ route("delete_paiement_voiture", ":id") }}';
                 url = url.replace(':id', id);
                 $("#deleteform").attr('action', url);
             }
        function formSubmit()
        {
            // alert("bonjour");
            $("#deleteform").submit();
        }
    </script>

