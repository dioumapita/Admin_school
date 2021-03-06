{{-- on herite du chemin du theme actif --}}
    @extends($chemin_theme_actif,['title' => 'Vente-Piece'])
        @section('content')
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Vente Des Pièces</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Pièces</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Vente Des Pièces</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-topline-red">
                        <div class="card-head">
                            <header>Vente Des Pièces</header>
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

                                    <a id="imprimer" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer la liste des fournisseurs</a>
                                    <a href="{{ route('vente_piece.index') }}" class="btn btn-primary">Liste Des Ventes</a>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                        id="eleves">
                                    <thead>
                                        <tr>
                                            <th class="text-center">N°</th>
                                            <th class="text-center"> Nom De La Pièce</th>
                                            <th class="text-center"> Prix </th>
                                            <th class="text-center"> Quantité </th>
                                            <th class="text-center"> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_pieces as $piece)
                                            <tr class="odd gradeX">
                                                <td>{{ $i++ }}</td>
                                                <td class="text-center">{{ $piece->nom_piece }}</td>
                                                <td class="text-center">{{ $piece->prix.' GNF' }}</td>
                                                <td class="text-center">
                                                    {{ $piece->quantite }}
                                                </td>
                                                <td class="">
                                                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#nouveau{{$piece->id}}">Effectuer Une Vente
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                    <!-- debut modal -->
                                                        <div class="modal fade" data-backdrop="static" id="nouveau{{$piece->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div  class="modal-header btn btn-danger text-center text-white">
                                                                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Effectuer Une Vente</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true" class="white-text">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- start modal body -->
                                                                        <div class="modal-body">
                                                                            <form action="{{ route('vente_piece.store') }}" method="post">
                                                                                {{ csrf_field() }}
                                                                                <input type="hidden" name="piece_id" value="{{ $piece->id }}">
                                                                                <input type="hidden" name="prix_piece" value="{{ $piece->prix }}">
                                                                                <div class="form-group">
                                                                                    <label for="client">Prénom et Nom Du client</label>
                                                                                    <input type="text" name="client" id="client" class="form-control" value="{{ old('client') }}" placeholder="Saisir les informations du client" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contact_client">Contact Du Client</label>
                                                                                    <input type="text" name="contact_client" id="contact_client" class="form-control" value="{{ old('contact_client')}}" placeholder="Saisir le contact du client" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="prix_piece">Prix De Vente De La Pièce</label>
                                                                                    <input type="text" name="prix_piece" id="prix_piece" class="form-control" value="{{ old('prix_piece') }}" placeholder="Prix de vente de la pièce" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="quantite">Quantité</label>
                                                                                    <input type="text" name="quantite" id="quantite" class="form-control" value="{{ old('quantite')}}" placeholder="Saisir la quantite" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="montant_payer">Montant Payé</label>
                                                                                    <input type="text" name="montant_payer" id="montant_payer" class="form-control" value="{{ old('montant_payer') }}" placeholder="Montant Payé" required>
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
