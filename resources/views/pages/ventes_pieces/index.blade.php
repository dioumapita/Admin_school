{{--on herite du chemin du theme actif --}}
    @extends($chemin_theme_actif,['title' => 'Vente-Liste'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Ventes De Pièces et Divers</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Pièces</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Ventes De Pièces et Divers</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Ventes De Pièce et Divers</header>
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
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="btn-group">
                                <a href="{{ route('home') }}" id="addRow"
                                    class="btn btn-info">
                                    <i class="fa fa-reply"></i> Retour
                                </a>
                            </div>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#nouveau">Vente Des Pièces et Divers
                                <i class="fa fa-plus"></i>
                            </button>
                            <!-- debut modal -->
                                <div class="modal fade" data-backdrop="static" id="nouveau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div  class="modal-header btn btn-danger text-center text-white">
                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Vente Des Pièces et Divers</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                                            </div>
                                            <!-- start modal body -->
                                                <div class="modal-body">
                                                    <form action="{{ route('commande.store') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label for="client">Client*</label>
                                                            <input type="text" name="client" id="client" class="form-control" value="{{ old('client') }}" placeholder="Entrez le nom du client" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact">Contact*</label>
                                                            <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}" placeholder="Contact" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nom_article">Article*</label>
                                                            <input type="text" name="nom_article" id="nom_article" class="form-control" value="{{ old('nom_article') }}" placeholder="Entrez le nom de l'article" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="prix">Prix*</label>
                                                            <input type="text" name="prix" id="prix" class="form-control" value="{{ old('prix')}}" placeholder="Entrez le prix" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="quantite">Quantite*</label>
                                                            <input type="text" name="quantite" id="quantite" class="form-control" value="{{ old('quantite')}}" placeholder="Entrez la quantite" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="voitures_id">Voiture</label>
                                                            <select class="form-control" name="voitures_id" id="voitures_id">
                                                              <option value="">Sélectionnez une voiture</option>
                                                              @foreach ($all_voitures as $voiture)
                                                                  <option value="{{ $voiture->id }}">{{ $voiture->nom_voiture }}</option>
                                                              @endforeach
                                                            </select>
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
                                    <th style="width: 25%"> Client </th>
                                    <th> Contact </th>
                                    <th> Montant Payer </th>
                                    <th> Reste à Payer </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_ventes as $vente)
                                    <tr class="odd gradeX">
                                        <td>{{ $vente->client->nom_client }}</td>
                                        <td>
                                            {{ $vente->client->contact_client }}
                                        </td>
                                        <td>
                                            {{ $vente->client->paiementClients->sum('montant_payer').' GNF' }}
                                        </td>
                                        <td>
                                            @php
                                                $total_montant_voiture = 0;
                                                $total_montant_article = 0;
                                                $total_prix_achat = 0;
                                            @endphp
                                           @foreach($vente->client->commandes as $commande)
                                                @if ($commande->voiture)
                                                    @php
                                                        $total_montant_voiture = $total_montant_voiture + $commande->voiture->prix
                                                    @endphp
                                                @else
                                                    @php
                                                        $total_montant_article = $total_montant_article + $commande->article->prix * $commande->article->quantite
                                                    @endphp
                                                @endif
                                                @php
                                                    $total_montant_voiture + $total_montant_article
                                                @endphp
                                           @endforeach
                                           @php
                                               $total_prix_achat = $total_montant_voiture + $total_montant_article;
                                           @endphp
                                           {{ $total_prix_achat - $vente->client->paiementClients->sum('montant_payer')}}
                                        </td>
                                        <td class="">
                                            <a href="{{ route('details_achats_client',$vente->client->id) }}" class="btn btn-danger btn-block btn-lg">Que souhaitez-vous faire ?</a>
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
    <br><br>
    <br><br>
    {{-- <div id="imprime" class="row">
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
                                            <u class="souligner">Liste Des Pièces</u><br>
                                            <u class="souligner">Vendues</u>
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
                                        <tr id="bordure_table">
                                            <td class="text-center" id="bordure_table">{{ $b++ }}</td>
                                            <td class="text-center" id="bordure_table">{{ $vente->client->nom_client }}</td>
                                            <td class="text-center" id="bordure_table">{{ $vente->client->contact_client }}</td>
                                            <td class="text-center" id="bordure_table">{{ $vente->piece->nom_piece }}</td>
                                            <td class="text-center" id="bordure_table">{{ $vente->quantite }}</td>
                                            <td class="text-center" id="bordure_table">{{ $vente->montant_payer.' GNF' }}</td>
                                            <td class="text-center" id="bordure_table">{{($vente->piece->prix * $vente->quantite) - $vente->montant_payer.' GNF'  }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <a id="tata" href="#">tata</a>
    Nama : <input type="text" id="nama" value="nama"> --}}
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
