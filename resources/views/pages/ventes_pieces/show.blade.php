{{--on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'Vente-Liste'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Pièces Vendues</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Pièces</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Pièces Vendues</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Pièces Vendues</header>
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
                                    <th> Pièce Vendue </th>
                                    <th> Quantité Vendue </th>
                                    <th> Montant Payer </th>
                                    <th> Reste à Payer </th>
                                    <th> Date </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_ventes as $vente)
                                    @if($vente->piece->category->id == $category_id)
                                        <tr class="odd gradeX">
                                            <td>{{ $vente->client->nom_client }}</td>
                                            <td>{{ $vente->client->contact_client }}</td>
                                            <td>{{ $vente->piece->nom_piece }}</td>
                                            <td>{{ $vente->quantite }}</td>
                                            <td>
                                                {{ $vente->montant_payer.' GNF'}}
                                            </td>
                                            <td>
                                                {{ ($vente->piece->prix * $vente->quantite) - $vente->montant_payer .' GNF' }}
                                            </td>
                                            <td>{{ $vente->created_at->format('d/m/Y') }}</td>
                                            <td class="">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $vente->id }}">Modifier
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
                                                                        <form action="{{ route('vente_piece.update',$vente->id) }}" method="post">
                                                                            {{ csrf_field() }}
                                                                            {{ method_field('PUT') }}
                                                                            <input type="hidden" name="piece_id" value="{{ $vente->piece_id }}">
                                                                            <div class="form-group">
                                                                                <label for="client">Prénom et Nom Du client</label>
                                                                                <input type="text" name="client" id="client" class="form-control" value="{{ old('client')?old('client'):$vente->client->nom_client }}" placeholder="Saisir les informations du client" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="contact_client">Contact Du Client</label>
                                                                                <input type="text" name="contact_client" id="contact_client" class="form-control" value="{{ old('contact_client')?old('contact_client'):$vente->client->contact_client }}" placeholder="Saisir le contact du client" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="contact_client">Quantité</label>
                                                                                <input type="text" name="quantite" id="quantite" class="form-control" value="{{ old('quantite')?old('quantite'):$vente->quantite }}" placeholder="Saisir le contact du client" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="montant_payer">Montant Payé</label>
                                                                                <input type="text" name="montant_payer" id="montant_payer" class="form-control" value="{{ old('montant_payer')?old('montant_payer'):$vente->montant_payer }}" placeholder="Montant Payé" required>
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
                                                <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $vente->id }})"
                                                    class="btn btn-danger">
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
                                                                <form action="{{ route('vente_piece.destroy',$vente->id) }}" method="post" id="deleteform">
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
                                    @endif
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
