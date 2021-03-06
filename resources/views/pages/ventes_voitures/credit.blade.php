{{--on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'Vente-Liste'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Voitures Vendues</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Voitures</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Voitures Vendues</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Voitures Vendues</header>
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
                                    <th> Reste à Payer </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_ventes as $vente)
                                    @if($vente->voiture->prix - $vente->montant_total > 0)
                                        <tr class="odd gradeX">
                                            <td>{{ $vente->client->nom_client }}</td>
                                            <td>{{ $vente->client->contact_client }}</td>
                                            <td>
                                                {{ $vente->voiture->nom_voiture }}
                                            </td>
                                            <td>
                                                {{ $vente->montant_total.' GNF'}}
                                            </td>
                                            <td>
                                                {{ $vente->voiture->prix - $vente->montant_total.' GNF'}}
                                            </td>
                                            <td class="">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $vente->id }}">Effectuez Un Remboursement
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
                                                                        <form action="{{ route('vente_voiture.store') }}" method="post">
                                                                            {{ csrf_field() }}
                                                                            <input type="hidden" name="client_id" value="{{ $vente->client->id }}">
                                                                            <input type="hidden" name="voiture_id" value="{{ $vente->voiture->id }}">
                                                                            <div class="form-group">
                                                                                <label for="montant_payer">Montant Rembourser</label>
                                                                                <input type="text" name="montant_payer" id="montant_payer" class="form-control" value="{{ old('montant_payer') }}" placeholder="Veuillez entrez le montant rembourser" required>
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
                                                <a href="{{ route('historique_paiement_voiture',$vente->voiture->id) }}" class="btn btn-primary"><i class="fa fa-recycle"></i> Historique</a>
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