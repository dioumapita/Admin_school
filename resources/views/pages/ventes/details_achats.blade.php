@extends($chemin_theme_actif,['title' => 'Détails-Achats-Client'])
    @section('content')
    <style>
        @media print {
            /* #test{
                display:none;
            } */
            #facture {
                 margin-top: -8%;
                 display: block;
            }
            #reconnaissance_dette
            {
                margin-top: -8%;
                display:block;
            }
            /* #reconnaissance_dette
            {
                display:none;
            } */
        }
    </style>
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Détails Des Achats D'un Client</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Vente</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Détails Des Achats D'un Client</li>
                </ol>
            </div>
        </div>
        <div id="test" class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card">
                            <div class="card-head card-topline-aqua">
                                <header>Informations Du Client</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Prénom et Nom: {{ $client->nom_client }}</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Contact: {{ $client->contact_client }}</b>
                                    </li>
                                </ul>
                                <br>
                                <div class="container">
                                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#client">Modifier
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <!-- debut modal -->
                                        <div class="modal fade" data-backdrop="static" id="client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div  class="modal-header btn btn-danger text-center text-white">
                                                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Modifications des informations</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" class="white-text">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- start modal body -->
                                                        <div class="modal-body">
                                                            <form action="{{ route('client.update',$client) }}" method="post">
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class="form-group">
                                                                    <label for="nom_client">Prénom et Nom*</label>
                                                                    <input type="text" name="nom_client" id="nom_client" class="form-control" value="{{ $client->nom_client }}" placeholder="Entrez le prénom et le nom du client" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="contact">Contact*</label>
                                                                    <input type="tel" name="contact" id="contact" class="form-control" value="{{ $client->contact_client }}" placeholder="Entrez le contact" required>
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
                                </div>
                            </div>
                        </div>
                        @foreach ($client->commandes->where('temoin_client','!=',null) as $commande)
                            @if ($loop->first)
                                <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>Informations Des Témoins</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Témoin Du Client: {{ $commande->temoin_client }}</b>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Contact: {{ $commande->tel_temoin_client }}</b>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Témoin Du Vendeur : {{ $commande->temoin_vendeur }}</b>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Contact: {{ $commande->tel_temoin_vendeur }}</b>
                                            </li>
                                        </ul>
                                        <br>
                                        <div class="">
                                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#temoin{{$commande->id}}">Modifier
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <!-- debut modal -->
                                                <div class="modal fade" data-backdrop="static" id="temoin{{ $commande->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div  class="modal-header btn btn-danger text-center text-white">
                                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Modifications des informations</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                                </button>
                                                            </div>
                                                            <!-- start modal body -->
                                                                <div class="modal-body">
                                                                    <form action="{{ route('update_infos_temoins',$commande->id) }}" method="post">
                                                                         {{ csrf_field() }}
                                                                         {{ method_field('PUT') }}
                                                                        <div class="form-group">
                                                                            <label for="temoin_client">Témoin Du Client</label>
                                                                            <input type="text" name="temoin_client" id="temoin_client" class="form-control" value="{{ $commande->temoin_client }}" placeholder="Entrez le prénom et le nom du témoin du client">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="tel_temoin_client">Contact</label>
                                                                            <input type="tel" name="tel_temoin_client" id="tel_temoin_client" class="form-control" value="{{ $commande->tel_temoin_client }}" placeholder="Entrez le contact du témoin du client">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="temoin_vendeur">Témoin Du Vendeur</label>
                                                                            <input type="text" name="temoin_vendeur" id="temoin_vendeur" class="form-control" value="{{ $commande->temoin_vendeur }}" placeholder="Entrez le prénom et le nom du témoin du vendeur">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="tel_temoin_vendeur">Contact</label>
                                                                            <input type="tel" name="tel_temoin_vendeur" id="tel_temoin_vendeur" class="form-control" value="{{ $commande->tel_temoin_vendeur }}" placeholder="Entrez le contact du témoin du vendeur">
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
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="card">
                                <div class="card-head card-topline-aqua">
                                    <header>Informations sur la vente</header>
                                </div>
                                <div class="white-box">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla optio beatae iste ad corporis, sit repellendus culpa porro alias totam assumenda. Ut exercitationem nesciunt sapiente dignissimos similique, eligendi voluptas nostrum?
                                    <div class="container">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#impression">Effectuez Des Impressions
                                            </button>
                                            <!-- debut modal -->
                                                <div class="modal fade" data-backdrop="static" id="impression" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div  class="modal-header btn btn-danger text-center text-white">
                                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Effectuez Des Impressions</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <a  onclick="printFacture('facture')" href="#">
                                                                            <div class="card text-white bg-primary">
                                                                                <div class="card-body">
                                                                                    Imprimer La Facture
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="card text-white bg-primary">
                                                                            <div class="card-body">
                                                                            Imprimer Le Reçu
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- calcul du total des achats pour savoir si le client a une dette --}}
                                                                    @php
                                                                        $total_achat_article = 0;
                                                                        $total_achat_voiture = 0;
                                                                        $total_achats = 0;
                                                                    @endphp
                                                                    @foreach ($client->commandes as $commande)
                                                                        @if($commande->article)
                                                                            @php
                                                                                $total_achat_article = $total_achat_article + $commande->article->prix * $commande->article->quantite
                                                                            @endphp
                                                                        @else
                                                                            @php
                                                                                $total_achat_voiture = $total_achat_voiture + $commande->voiture->prix
                                                                            @endphp
                                                                        @endif
                                                                    @endforeach
                                                                    @php
                                                                        $total_achats = $total_achat_article + $total_achat_voiture
                                                                    @endphp
                                                                <div class="row">
                                                                    @if ($total_achats - $client->paiementClients->sum('montant_payer') == 0)
                                                                        <div class="col-sm-6">
                                                                            <div class="card text-white bg-primary">
                                                                                <div class="card-body">
                                                                                    Imprimer L'attestion
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($total_achats - $client->paiementClients->sum('montant_payer') > 0)
                                                                        <div class="col-sm-6">
                                                                            <a onclick="printDiv('reconnaissance_dette')" href="#">
                                                                                <div class="card text-white bg-primary">
                                                                                    <div class="card-body">
                                                                                        Imprimer La Dette
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    @else

                                                                    @endif
                                                                    <div class="col-sm-6">
                                                                        <div class="card text-white bg-primary">
                                                                            <div class="card-body" data-dismiss="modal">
                                                                                Fermer
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- fin modal -->
                                        @if ($total_achats - $client->paiementClients->sum('montant_payer') > 0)
                                            <button class="btn btn-info" data-toggle="modal" data-target="#paiement">Rembourser la dette
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        @endif
                                        <a href="#annulation" data-toggle="modal" onclick="annulationTotale({{ $client->id }})"
                                            class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Annuler La Vente
                                        </a>
                                        <div id="annulation" class="mt-5 modal fade" data-backdrop="static">
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
                                                            De vouloir tous annuler ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                        <form action="{{ route('client.destroy',$client->id) }}" method="post" id="deletecommande">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button  type="button" onclick = "validation()" class="btn btn-danger" data-dismiss="modal">
                                                                Oui Annuler
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- debut modal -->
                                            <div class="modal fade" data-backdrop="static" id="paiement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div  class="modal-header btn btn-danger text-center text-white">
                                                            <h4 class="modal-title white-text w-100 font-weight-bold py-2">Remboursement D'une Dette</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" class="white-text">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- start modal body -->
                                                            <div class="modal-body">
                                                                <div class="">
                                                                    <h4 class="media-heading">
                                                                        <div class="center">
                                                                            {{$client->nom_client}} à une dette de<br>
                                                                            @php
                                                                                $reste_a_payer = $total_achats - $client->paiementClients->sum('montant_payer')
                                                                            @endphp
                                                                            {{ $reste_a_payer }}
                                                                        </div>
                                                                    </h4>
                                                                </div>
                                                                <br>
                                                                <form action="{{ route('remboursement_dette_client') }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                                                    <div class="form-group">
                                                                        <label for="montant_payer">Montant Rembourser*</label>
                                                                        <input type="number" name="montant_payer" id="montant_payer" max="{{ $total_achats - $client->paiementClients->sum('montant_payer') }}" class="form-control" placeholder="Entrez le montant rembourser" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="type_paiement">Type De Paiement</label>
                                                                            <select class="form-control" name="type_paiement" id="type_paiement">
                                                                                <option value="Espèce">Espèce</option>
                                                                                <option value="Depôt">Depôt</option>
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
                                    </div>
                                    <div class="table-scrollable mt-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Voiture</th>
                                                    <th>N° Chassis</th>
                                                    <th>Prix</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($client->commandes as $commande)
                                                    @if($commande->voiture)
                                                        <tr>
                                                            <td scope="row">{{ $commande->id}}</td>
                                                            <td>{{ $commande->voiture->nom_voiture }}</td>
                                                            <td>{{ $commande->voiture->immatriculation }}</td>
                                                            <td>{{ $commande->voiture->prix }}</td>
                                                            <td>
                                                                {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $commande->id }}">Modifier
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <!-- debut modal -->
                                                                    <div class="modal fade" data-backdrop="static" id="classes{{ $commande->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                                        <form action="{{ route('commande.update',$commande->id) }}" method="post" enctype="multipart/form-data">
                                                                                            {{ csrf_field() }}
                                                                                            {{ method_field('PUT') }}
                                                                                            <div class="form-group">
                                                                                                <label for="nom_piece">Piece</label>
                                                                                                <input type="text" name="nom_piece" id="nom_piece" class="form-control" value="{{ $commande->article->nom_article }}" placeholder="Entrez le nom de la pièce" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="prix">Prix</label>
                                                                                                <input type="text" name="prix" id="prix" class="form-control" value="{{ $commande->article->prix }}" placeholder="Entrez le prix" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="quantite">Quantité</label>
                                                                                                <input type="text" name="quantite" id="quantite" class="form-control" value="{{ $commande->article->quantite }}" placeholder="Entrez la quantite" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="voiture_id">Voiture</label>
                                                                                                    <select class="form-control" name="voiture_id" id="voiture_id">
                                                                                                        <option value="">Sélectionnez une voiture</option>
                                                                                                        @foreach ($all_voitures as $voiture)
                                                                                                            <option value="{{ $voiture->id }}" @if($commande->article->voiture_id == $voiture->id) selected @endif>{{ $voiture->nom_voiture }}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="arrivage_id">Arrivage</label>
                                                                                                    <select class="form-control" name="arrivage_id" id="arrivage_id">
                                                                                                        <option value="">Sélectionnez un arrivage</option>
                                                                                                        @foreach ($all_arrivages as $arrivage)
                                                                                                            <option value="{{ $arrivage->id }}" @if($commande->article->arrivage_id == $arrivage->id) selected @endif>{{ $arrivage->nom_arrivage }}</option>
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
                                                                    </div> --}}
                                                                <!-- fin modal -->
                                                                {{-- <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $panier->id }})"
                                                                    class="btn btn-danger">
                                                                    <i class="fa fa-trash"></i> Annuler
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
                                                                                <form action="{{ route('panier.destroy',$panier->id) }}" method="post" id="deleteform">
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('DELETE') }}
                                                                                    <button  type="button" onclick = "formSubmit()" class="btn btn-danger" data-dismiss="modal">
                                                                                        Oui Supprimer
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    Commande des articles
                                    <div class="table-scrollable mt-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Pièce</th>
                                                    <th>Prix</th>
                                                    <th>Qté</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($client->commandes as $commande)
                                                    @if($commande->article)
                                                        <tr>
                                                            <td scope="row">{{ $commande->id}}</td>
                                                            <td>{{ $commande->article->nom_article }}</td>
                                                            <td>{{ $commande->article->prix }}</td>
                                                            <td>{{ $commande->article->quantite }}</td>
                                                            <td>
                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $commande->id }}">Modifier
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <!-- debut modal -->
                                                                    <div class="modal fade" data-backdrop="static" id="classes{{ $commande->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div  class="modal-header btn btn-danger text-center text-white">
                                                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Modification D'une Commande</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <!-- start modal body -->
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('commande.update',$commande->id) }}" method="post" enctype="multipart/form-data">
                                                                                            {{ csrf_field() }}
                                                                                            {{ method_field('PUT') }}
                                                                                            <div class="form-group">
                                                                                                <label for="nom_article">Article</label>
                                                                                                <input type="text" name="nom_article" id="nom_piece" class="form-control" value="{{ $commande->article->nom_article }}" placeholder="Entrez le nom de la pièce" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="prix">Prix</label>
                                                                                                <input type="text" name="prix" id="prix" class="form-control" value="{{ $commande->article->prix }}" placeholder="Entrez le prix" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="quantite">Quantité</label>
                                                                                                <input type="number" name="quantite" id="quantite" class="form-control" value="{{ $commande->article->quantite }}" placeholder="Entrez la quantite" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="voiture_id">Voiture</label>
                                                                                                    <select class="form-control" name="voiture_id" id="voiture_id">
                                                                                                        <option value="">Sélectionnez une voiture</option>
                                                                                                        @foreach ($all_voitures as $voiture)
                                                                                                            <option value="{{ $voiture->id }}" @if($commande->article->voiture_id == $voiture->id) selected @endif>{{ $voiture->nom_voiture }}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="arrivage_id">Arrivage</label>
                                                                                                    <select class="form-control" name="arrivage_id" id="arrivage_id">
                                                                                                        <option value="">Sélectionnez un arrivage</option>
                                                                                                        @foreach ($all_arrivages as $arrivage)
                                                                                                            <option value="{{ $arrivage->id }}" @if($commande->article->arrivage_id == $arrivage->id) selected @endif>{{ $arrivage->nom_arrivage }}</option>
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
                                                                <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $commande->id }})"
                                                                    class="btn btn-danger">
                                                                    <i class="fa fa-trash"></i> Annuler
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
                                                                                    De vouloir annuler la commande ?
                                                                                </p>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-center">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                                <form action="{{ route('commande.destroy',$commande->id) }}" method="post" id="deleteform">
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('DELETE') }}
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
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    Total:  @php
                                                $somme_total = 0;
                                            @endphp
                                            @foreach ($client->commandes as $commande)
                                                @if($commande->article)
                                                    @php
                                                        $somme_total = $somme_total + $commande->article->prix * $commande->article->quantite
                                                    @endphp
                                                @endif
                                            @endforeach
                                            {{ $somme_total.' GNF'}}<br>
                                        Historique De Paiement
                                    <div class="table-scrollable mt-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Montant Payer</th>
                                                    <th>Type Paiement</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($client->paiementClients as $paiement)
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>{{ $paiement->montant_payer }}</td>
                                                        <td>{{ $paiement->type_paiement }}</td>
                                                        <td>{{ $paiement->created_at->format('d/m/Y') }}</td>
                                                        <td>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#paiement{{ $paiement->id }}">Modifier
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <!-- debut modal -->
                                                                <div class="modal fade" data-backdrop="static" id="paiement{{ $paiement->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div  class="modal-header btn btn-danger text-center text-white">
                                                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Modification Du Paiement</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <!-- start modal body -->
                                                                                <div class="modal-body">
                                                                                    <form action="{{ route('paiement_client.update',$paiement->id) }}" method="post" enctype="multipart/form-data">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('PUT') }}
                                                                                        <input type="hidden" name="client_id" value="{{ $client->id }}">
                                                                                        <div class="form-group">
                                                                                            <label for="montant_payer">Montant Payé*</label>
                                                                                            <input type="number" name="montant_payer" id="montant_payer" value="{{ $paiement->montant_payer }}" class="form-control" placeholder="Entrez le montant" required>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="type_paiement">Type De Paiement</label>
                                                                                                <select class="form-control" name="type_paiement" id="type_paiement">
                                                                                                    <option value="Espèce" @if($paiement->type_paiement == 'Espèce') selected @endif>Espèce</option>
                                                                                                    <option value="Depôt" @if($paiement->type_paiement == 'Depôt') selected @endif>Depôt</option>
                                                                                                    <option value="Chèque" @if($paiement->type_paiement == 'Chèque') selected @endif>Chèque</option>
                                                                                                    <option value="Autres" @if($paiement->type_paiement == 'Autres') selected @endif>Autres</option>
                                                                                                </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="delais_paiement">Délais De Paiement Du Reliquat</label>
                                                                                            <input type="date" name="delais_paiement" @if($paiement->delais_reliquat != null) value="{{ $paiement->delais_reliquat->format('Y-m-d') }}" @endif id="delais_paiement" class="form-control" placeholder="Entrez le délais">
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
                                                            <a href="#modifpaiement" data-toggle="modal" onclick="deletePaiement({{ $paiement->id }})"
                                                                class="btn btn-danger">
                                                                <i class="fa fa-trash"></i> Annuler
                                                            </a>
                                                            <div id="modifpaiement" class="mt-5 modal fade" data-backdrop="static">
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
                                                                                De vouloir annuler le paiement ?
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-center">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                            <form action="{{ route('paiement_client.destroy',$paiement->id) }}" method="post" id="deletePaiementClient">
                                                                                {{ csrf_field() }}
                                                                                {{ method_field('DELETE') }}
                                                                                <button  type="button" onclick = "formPaiement()" class="btn btn-danger" data-dismiss="modal">
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
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
        <br><br>
        <br><br>
        <a id="imprimer" href="#">tata</a>
        <div id="imprime" class="row">
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
                        margin-right: -8%;
                    }
                    #vendeur
                    {
                        margin-top: -220px;
                    }
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
                                                <img id="hauteur_image" class="img-thumbnail" src="/images/photos/logos/gauche.png" alt="logo_voiture">
                                            </div>
                                            <div class="center">
                                                <h3 id="entete_facture" class="mx-auto text-center font-bold">&emsp;&nbsp;ETABLISSEMENT YACOUBA BAH ET FRERE</h3>
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
                                                <i class="souligner">RECONNAISSANCE DE DETTE</i>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="ecriture">
                                Je soussigné {{ $client->nom_client }} reconnais avoir une dette envers l'Etablissement Yacouba Bah (EBY) d'un montant de
                                {{ $convertisseur->format($reste_a_payer) }} {{ '('.($reste_a_payer.' GNF').').'}}
                                <br>
                                <h2 class="font-bold">Rappel:</h2>
                                Ce montant est le  reliquat
                                {{-- @if($client->commandes->count() > 1) des achats suivants:
                                    @foreach($client->commandes as $commande)
                                    ({{ $commande->article->quantite}}) {{ $commande->article->nom_article }},
                                    @endforeach
                                @else de l'achat suivant:
                                        @foreach ($client->commandes as $commande)
                                            @if($commande->voiture)
                                                une voiture
                                            @else
                                                ({{ $commande->article->quantite}}) {{ $commande->article->nom_article}}
                                            @endif
                                        @endforeach
                                @endif --}}
                                Je m'engage à payer la totalité du reliquat de quatre vingt cinq millions (85.000.000 GNF) d'ici le 30 septembre.
                                <br>
                                En foi de quoi je lui délivre cette présente reconnaissance de dette(ce document), pour servir et valoir ce que de droit.
                               <br>
                                <div class="row">
                                     <div class="col-md-12">
                                         <div class="col-md-6 pull-left">
                                             <h2 class="font-bold text-left">Acheteur</h2>
                                             <div class="pull-left">
                                                 <div class="text-left">
                                                     Etablissement Yacouba Bah (EBY)<br>
                                                     Tel: 622 57 13 11 / 621 01 74 15<br>
                                                     &emsp;&emsp;Signature
                                                 </div>
                                             </div>
                                         </div>
                                         <div id="vendeur" class="col-md-6 pull-right">
                                             <h2 class="font-bold text-right">Vendeur</h2>
                                             <div class="pull-right">
                                                 <div class="text-right">
                                                     Etablissement Yacouba Bah (EBY)<br>
                                                     Tel: 622 57 13 11 / 621 01 74 15<br>
                                                     Signature&emsp;&emsp;&emsp;
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="tata" href="#">tata</a>
        <div id="nama" class="row">
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
                        margin-right: -8%;
                    }
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
                                                <img id="hauteur_image" class="img-thumbnail" src="/images/photos/logos/gauche.png" alt="logo_voiture">
                                            </div>
                                            <div class="center">
                                                <h3 id="entete_facture" class="mx-auto text-center font-bold">&emsp;&nbsp;ETABLISSEMENT YACOUBA BAH ET FRERE</h3>
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
                                                <i class="souligner">FACTURE N° 00001</i>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                              <h4 class="font-bold">
                                Prénom Et Nom Du Client: {{ $client->nom_client}}
                                  <br>
                                Conctact: {{ $client->contact_client }}
                            </h4>
                            </div>
                            <div>
                                <table id="bordure_table" class="table table-bordered">
                                    <th class="text-center" id="bordure_table">N°</th>
                                    <th class="text-center" id="bordure_table">DESIGNATION </th>
                                    <th class="text-center" id="bordure_table">QTE</th>
                                    <th class="text-center" id="bordure_table">P.UNIT</th>
                                    <th class="text-center" id="bordure_table">MONTANT</th>
                                    <tbody id="bordure_table">
                                        @foreach ($client->commandes as $commande)
                                            @if ($commande->voiture)
                                                <tr id="bordure_table">
                                                    <td class="text-center" id="bordure_table"></td>
                                                    <td class="text-center" id="bordure_table">{{ $commande->voiture->nom_voiture }}</td>
                                                    <td class="text-center" id="bordure_table">1</td>
                                                    <td class="text-center" id="bordure_table">{{ $commande->voiture->prix.' GNF' }}</td>
                                                    <td class="text-center" id="bordure_table">{{ $commande->voiture->prix.' GNF' }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        @foreach ($client->commandes as $commande)
                                            @if ($commande->article)
                                                <tr id="bordure_table">
                                                    <td class="text-center" id="bordure_table"></td>
                                                    <td class="text-center" id="bordure_table">{{ $commande->article->nom_article }}</td>
                                                    <td class="text-center" id="bordure_table">{{ $commande->article->quantite }}</td>
                                                    <td class="text-center" id="bordure_table">{{ $commande->article->prix.' GNF' }}</td>
                                                    <td class="text-center" id="bordure_table">{{ $commande->article->prix * $commande->article->quantite.' GNF' }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        <tr id="bordure_table">
                                            <td colspan="5" class="text-center" id="bordure_table">
                                                <h4 class="font-bold">
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    &emsp;&emsp;&emsp;&emsp;
                                                    TOTAL: {{ $total_achats.' GNF' }}
                                                </h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="ecriture">
                                Arrétée la présente facture à la somme de : {{ $convertisseur->format($total_achats) }} {{ '('.($total_achats.' GNF').')'}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6 pull-left">
                                            <h2 class="font-bold text-left">Acheteur</h2>
                                            <div class="pull-left">
                                                <div class="text-left">
                                                    {{ $client->nom_client }}<br>
                                                    Tel: {{ $client->contact_client}}<br>
                                                    &emsp;&emsp;Signature
                                                </div>
                                            </div>
                                        </div>
                                        <div id="vendeur" class="col-md-6 pull-right">
                                            <h2 class="font-bold text-right">Vendeur</h2>
                                            <div class="pull-right">
                                                <div class="text-right">
                                                    Etablissement Yacouba Bah (EBY)<br>
                                                    Tel: 622 57 13 11 / 621 01 74 15<br>
                                                    Signature&emsp;&emsp;&emsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($client->commandes->where('temoin_client','!=',null) as $commande)
                                    @if ($loop->first)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6 pull-left">
                                                    <h2 class="font-bold text-left">Témoin De L'achateur</h2>
                                                    <div class="pull-left">
                                                        <div class="text-left">
                                                            {{ $commande->temoin_client }}<br>
                                                            Tel: {{ $commande->tel_temoin_client}}<br>
                                                            &emsp;&emsp;Signature
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="vendeur" class="col-md-6 pull-right">
                                                    <h2 class="font-bold text-right">Témoin Du Vendeur</h2>
                                                    <div class="pull-right">
                                                        <div class="text-right">
                                                            {{ $commande->temoin_vendeur }}<br>
                                                            Tel: {{ $commande->tel_temoin_vendeur }}<br>
                                                            Signature&emsp;&emsp;&emsp;
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="recu" href="#">reçu</a>
        <div id="diouma" class="row">
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
                        margin-right: -8%;
                    }
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
                                                <img id="hauteur_image" class="img-thumbnail" src="/images/photos/logos/gauche.png" alt="logo_voiture">
                                            </div>
                                            <div class="center">
                                                <h3 id="entete_facture" class="mx-auto text-center font-bold">&emsp;&nbsp;ETABLISSEMENT YACOUBA BAH ET FRERE</h3>
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
                                                <i class="souligner">Reçu De Paiement N° 00001</i>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h2 class="font-bold text-left">Prénom Et Nom Du Client: Elhadj Mamadou Diouma Barry</h2>
                                <h2 class="font-bold text-left">Contact: 623897708</h2>
                                <h2 class="font-bold text-left">Somme Payer: 7000000 GNF</h2>
                                <h2 class="font-bold text-left">Reste à Payer: 100000 GNF</h2>
                            </div>
                            <div id="ecriture">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6 pull-left">
                                            <h2 class="font-bold text-left">Acheteur</h2>
                                            <div class="pull-left">
                                                <div class="text-left">
                                                    Etablissement Yacouba Bah (EBY)<br>
                                                    Tel: 622 57 13 11 / 621 01 74 15<br>
                                                    &emsp;&emsp;Signature
                                                </div>
                                            </div>
                                        </div>
                                        <div id="vendeur" class="col-md-6 pull-right">
                                            <h2 class="font-bold text-right">Vendeur</h2>
                                            <div class="pull-right">
                                                <div class="text-right">
                                                    Etablissement Yacouba Bah (EBY)<br>
                                                    Tel: 622 57 13 11 / 621 01 74 15<br>
                                                    Signature&emsp;&emsp;&emsp;
                                                </div>
                                            </div>
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
    <script>
        // attestion de reconnaissance de dette
        function printDiv(reconnaissance_dette) {

            $("#impression").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#impression").hide();
            var printContents = document.getElementById('reconnaissance_dette').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
        // facture
        function printFacture(facture)
        {
            $("#impression").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#impression").hide();

            var printContents = document.getElementById('facture').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

//         function printDiv(reconnaissance_dette)
// {
//           $("#impression").removeClass("in");
//             $(".modal-backdrop").remove();
//             $('body').removeClass('modal-open');
//             $('body').css('padding-right', '');
//             $("#impression").hide();
//    var html="<html>";
//    html+="<head>";
//    html+="<style type='text/css'>#facture{ display:none;} #test{display:none;}</style>";
//    html+="</head>";
//    html+= document.getElementById('reconnaissance_dette').innerHTML;
//    html+="</html>";
//    document.body.innerHTML = html;

// window.print();

// document.body.innerHTML = originalContents;
// }



//         function printFacture(facture)
// {
//    var html="<html>";
//    html+="<style type='text/css'>#reconnaissance_dette{ display:none;} #test{display:none;}</style>";
//    html+= document.getElementById('facture').innerHTML;
//    html+="</html>";
//    document.body.innerHTML = html;

// window.print();

// document.body.innerHTML = originalContents;
// }
    </script>
    <script>
        function deleteData(id)
        {
            var id = id;
            var url = '{{ route("commande.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteform").attr('action', url);
        }
        function formSubmit()
        {
            // alert("bonjour");
            $("#deleteform").submit();
        }

        function deletePaiement(id)
        {
            var id = id;
            var url = '{{ route("paiement_client.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deletePaiementClient").attr('action', url);
        }
        function formPaiement()
        {
            // alert("bonjour");
            $("#deletePaiementClient").submit();
        }

        //utiliser pour l'annulation de la vente
        function annulationTotale(id)
        {
            var id = id;
            var url = '{{ route("client.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deletecommande").attr('action', url);
        }
        function validation()
        {
            // alert("bonjour");
            $("#deletecommande").submit();
        }
    </script>
