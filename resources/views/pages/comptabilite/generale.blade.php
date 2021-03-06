@extends($chemin_theme_actif,['title' => 'Compta-Génerale'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Comptabilité Générale</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Comptabilité</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Comptabilité Générale</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header>Comptablitié Générale</header>
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
                                {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#nouveau">Nouveau
                                    <i class="fa fa-plus"></i>
                                </button>
                                <!-- debut modal -->
                                    <div class="modal fade" data-backdrop="static" id="nouveau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div  class="modal-header btn btn-danger text-center text-white">
                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Nouvelle Dépense</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- start modal body -->
                                                    <div class="modal-body">
                                                        <form action="{{ route('depense.store') }}" method="post">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label for="nom_depense">Dépense</label>
                                                                <input type="text" name="nom_depense" id="nom_depense" class="form-control" value="{{ old('nom_depense') }}" placeholder="Entrez le nom de la depense" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="motant">Montant</label>
                                                                <input type="text" name="montant" id="montant" class="form-control" value="{{ old('montant')}}" placeholder="Entrez le montant" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="date_depense">Date</label>
                                                                <input type="date" name="date_depense" id="date_depense" class="form-control" value="{{ old('date_depense')}}" placeholder="Entrez la date" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="arrivage_id">Arrivage</label>
                                                                <select class="form-control" name="arrivage_id" id="arrivage_id">
                                                                  <option value="">Sélectionnez un arrivage</option>
                                                                  @foreach ($all_arrivages as $arrivage)
                                                                      <option value="{{ $arrivage->id }}">{{ $arrivage->nom_arrivage }}</option>
                                                                  @endforeach
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
                                <a  onclick="printDiv('liste_piece')" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer</a> --}}
                                <div class="btn-group">
                                    <button id="addRow1" data-toggle="modal" data-target="#all_niveau" class="btn btn-primary">
                                        <i class="fa fa-list"></i> Afficher Par Arrivage
                                    </button>
                                </div>
                                <!-- debut modal -->
                                    <div class="modal fade" data-backdrop="static" id="all_niveau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                            aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div  class="modal-header btn btn-danger text-center text-white">
                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Afficher Les Dépenses Par Arrivage</h4>
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
                                                                    <option value="{{ route('depense_par_arrivage',$arrivage->id) }}">{{ $arrivage->nom_arrivage}}</option>
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
                                    id="elevess">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Achats </th>
                                        <th class="text-center"> Dépenses </th>
                                        <th class="text-center"> Ventes </th>
                                        <th class="text-center"> Dettes </th>
                                        <th class="text-center"> Revenus </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td class="text-center">
                                            {{ $all_voitures->sum('prix') + $all_pieces->sum('prix') + $all_divers->sum('prix').' GNF' }}
                                        </td>
                                        <td class="text-center">{{ $all_depenses->sum('montant').' GNF' }}</td>
                                        <td class="text-center">
                                            @php
                                                $total_prix_vente_voiture = 0;
                                                $total_prix_vente_article = 0;
                                                $total_vente = 0;
                                            @endphp
                                            @foreach ($all_commandes as $commande)
                                                @if ($commande->voiture)
                                                    @php
                                                        $total_prix_vente_voiture = $total_prix_vente_voiture + $commande->voiture->prix;
                                                    @endphp
                                                @endif
                                                @if($commande->article)
                                                    @php
                                                      $total_prix_vente_article = $total_prix_vente_article + ($commande->article->prix * $commande->article->quantite)
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @php
                                                $total_vente = $total_prix_vente_voiture + $total_prix_vente_article
                                            @endphp
                                            {{ $total_vente}}
                                        </td>
                                        <td class="text-center">{{ $total_vente - $all_paiements->sum('montant_payer') }}</td>
                                        <td class="text-center">
                                            @if($total_vente - ($all_voitures->sum('prix') + $all_pieces->sum('prix') + $all_divers->sum('prix') + $all_depenses->sum('montant')) < 0)
                                                    {{ 0 .' GNF'}}
                                            @else
                                                $total_vente - ($all_voitures->sum('prix') + $all_pieces->sum('prix') + $all_divers->sum('prix') + $all_depenses->sum('montant'))
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
