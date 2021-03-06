{{--on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'Vente-Liste'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Crédits Pièces</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Pièces</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Crédits Pièces</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Crédits Pièces</header>
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
                            <a href="{{ route('vente_piece.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Effectuez Une Vente</a>
                            <a href="{{ route('remboursement_piece.index') }}" class="btn btn-danger"><i class="fa fa-recycle" aria-hidden="true"></i> Historique des remboursements</a>
                            <a id="imprimer" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer la liste des pièces vendues</a>
                            <button id="addRow1" class="btn btn-primary" data-toggle="modal" data-target="#modalchangeclasse">
                                Afficher Par Catégorie  <i class="fa fa-plus"></i>
                            </button>
                            <!-- debut modal choix de classe -->
                                <div class="modal fade" data-backdrop="static" id="modalchangeclasse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div  class="modal-header btn btn-danger text-center text-white">
                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Afficher La Vente Par Catégorie</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                                            </div>
                                            <!-- start modal body -->
                                                <div class="modal-body">
                                                    <form action="#" method="GET">
                                                        <div class="form-group">
                                                            <label for="niveau">Selectionnez une categorie</label>
                                                            <select onchange="window.location.href = this.value" id="categorie" class="form-control" name="categorie">
                                                                <option value=""></option>
                                                                @foreach ($all_categories as $key => $categorie)
                                                                    <option value="{{ route('vente_piece.show',$categorie->id) }}">{{ $categorie->nom_categorie }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                            <button type="submit" class="btn btn-primary">Valider <i class="fa fa-check"></i></button>
                                                            <button class="btn btn-danger" data-dismiss="modal">Annuler <i class="fa fa-times"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            <!-- end modal body -->
                                        </div>
                                    </div>
                                </div>
                            <!-- fin modal choix de classe -->
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table
                            class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                id="eleves">
                            <thead>
                                <tr>
                                    <th> Client </th>
                                    <th> Contact </th>
                                    <th> Pièce</th>
                                    <th> Quantité</th>
                                    <th> Montant Payer </th>
                                    <th> Reste à Payer </th>
                                    <th> Date </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_ventes as $vente)
                                        @if(($vente->prix_piece * $vente->quantite) - ($vente->montant_payer + $vente->client->remboursementPieces->sum('montant_rembourser')) > 0)
                                            <tr class="odd gradeX">
                                                <td>{{ $vente->client->nom_client }}</td>
                                                <td>{{ $vente->client->contact_client }}</td>
                                                <td>{{ $vente->piece->nom_piece }}</td>
                                                <td>{{ $vente->quantite }}</td>
                                                <td>
                                                    {{ $vente->montant_payer + $vente->client->remboursementPieces->sum('montant_rembourser').' GNF'}}
                                                </td>
                                                <td>
                                                    {{ ($vente->prix_piece * $vente->quantite) - ($vente->montant_payer + $vente->client->remboursementPieces->sum('montant_rembourser')).' GNF' }}
                                                </td>
                                                <td>{{ $vente->created_at->format('d/m/Y') }}</td>
                                                <td class="">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $vente->id }}">Rembourser
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <!-- debut modal -->
                                                        <div class="modal fade" data-backdrop="static" id="classes{{ $vente->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                            <form action="{{ route('remboursement_piece.store') }}" method="post">
                                                                                {{ csrf_field() }}
                                                                                <input type="hidden" name="piece_id" value="{{ $vente->piece_id }}">
                                                                                <input type="hidden" name="client_id" value="{{ $vente->client_id }}">
                                                                                <div class="form-group">
                                                                                    <label for="montant_rembourser">Montant Payé</label>
                                                                                    <input type="number" name="montant_rembourser" id="montant_rembourser" class="form-control" value="{{ old('montant_rembourser') }}" min="0" max="{{ ($vente->prix_piece * $vente->quantite) - ($vente->montant_payer + $vente->client->remboursementPieces->sum('montant_rembourser')) }}" placeholder="Montant Rembourser" required>
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
                                                    <a href="{{ route('remboursement_piece.show',$vente->client_id) }}" class="btn btn-danger"><i class="fa fa-recycle" aria-hidden="true"></i> Historique</a>
                                                </td>
                                            </tr>
                                        @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <div id="imprime" class="row">
        <style>
            #logo_voiture{
                height:150px;
            }
        </style>
        <div id="invisible-screens" class="col-md-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="pull-left">
                                <address>
                                    <div class="row">
                                        <div>
                                            <img id="logo_voiture" class="img-thumbnail" src="/images/photos/logos/logo1.jpg" alt="logo_voiture">
                                        </div>
                                        <h4 class="font-bold addr-font-h4">&nbsp;<i class="fa fa-map-marker"></i> Adresse: Conakry, Keitayah<br>
                                            &nbsp;<i class="fa fa-phone"></i> Contact: 622-57-13-11<br>
                                            &nbsp;<i class="fa fa-envelope"></i> E-Mail: nds@gmail.com<br>
                                        </h4>
                                    </div>
                                </address>
                            </div>
                            <div class="pull-right text-right">
                                <address>
                                    <h4 class="font-bold addr-font-h4">
                                        <u class="souligner">REPLUBLIQUE DE GUINEE</u>&emsp;&ensp;
                                     <br>
                                       <u class="rouge">TRAVAIL</u>-<u class="jaune">JUSTICE</u>-<u class="vert">SOLIDARITE</u>
                                    </h4>
                                </address>
                            </div>
                        </div>
                        <br><br>
                        <div class="row col-md-12 col-sm-12 col-lg-12">
                            <div class="mx-auto col-md-12 col-sm-12 col-lg-12">
                                <div class="cercle">
                                    <div class="text-center">
                                        <h4 class="font-bold addr-font-h4">
                                            <u class="souligner">Liste Des Clients</u><br>
                                            <u class="souligner">Endettés</u>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <table id="bordure_table" class="table table-bordered">
                                <th class="text-center" id="bordure_table">N°</th>
                                <th class="text-center" id="bordure_table">Client </th>
                                <th class="text-center" id="bordure_table">Contact</th>
                                <th class="text-center" id="bordure_table">Pièce Achetée</th>
                                <th class="text-center" id="bordure_table">Quantité</th>
                                <th class="text-center" id="bordure_table">Montant Payer</th>
                                <th class="text-center" id="bordure_table">Reste</th>
                                <tbody id="bordure_table">
                                    @foreach ($all_ventes as $vente)
                                        @if(($vente->piece->prix * $vente->quantite) - $vente->montant_payer > 0)
                                            <tr id="bordure_table">
                                                <td class="text-center" id="bordure_table">{{ $b++ }}</td>
                                                <td class="text-center" id="bordure_table">{{ $vente->client->nom_client }}</td>
                                                <td class="text-center" id="bordure_table">{{ $vente->client->contact_client }}</td>
                                                <td class="text-center" id="bordure_table">{{ $vente->piece->nom_piece }}</td>
                                                <td class="text-center" id="bordure_table">{{ $vente->quantite }}</td>
                                                <td class="text-center" id="bordure_table">{{ $vente->montant_payer.' GNF' }}</td>
                                                <td class="text-center" id="bordure_table">{{($vente->piece->prix * $vente->quantite) - $vente->montant_payer.' GNF'  }}</td>
                                            </tr>
                                        @endif
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
{{-- script utiliser pour la suppression d'une voiture --}}
<script>
    function deleteData(id)
         {
             var id = id;
             var url = '{{ route("vente_piece.destroy", ":id") }}';
             url = url.replace(':id', id);
             $("#deleteform").attr('action', url);
         }
    function formSubmit()
    {
        // alert("bonjour");
        $("#deleteform").submit();
    }
</script>
