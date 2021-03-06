@extends($chemin_theme_actif,['title' => 'Panier'])
    @section('content')
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Panier</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Achats</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Panier</li>
                </ol>
            </div>
        </div>
        <div class="row">
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
                                <div class="text-center">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#client">Modifier
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
                                                            <form action="#" method="post">
                                                                <div class="form-group">
                                                                    <label for="nom_client">Prénom et Nom*</label>
                                                                    <input type="text" name="nom_client" id="nom_client" class="form-control" value="{{ $client->nom_client }}" placeholder="Entrez le prénom et le nom du client" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="contact">Contact*</label>
                                                                    <input type="text" name="contact" id="contact" class="form-control" value="{{ $client->contact }}" placeholder="Entrez le contact" required>
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

                    </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="card">
                                <div class="card-head card-topline-aqua">
                                    <header>Informations sur les achats</header>
                                </div>
                                <div class="white-box">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla optio beatae iste ad corporis, sit repellendus culpa porro alias totam assumenda. Ut exercitationem nesciunt sapiente dignissimos similique, eligendi voluptas nostrum?
                                    <div class="container">
                                        <a name="" id="" class="btn btn-primary" href="#" role="button">Imprimer la facture</a>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#nouveau">Continuez les achats</button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#paiement">Valider les achats
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger">Supprimer tous les achats <i class="fa fa-trash"></i></button>
                                        <!-- debut modal -->
                                            <div class="modal fade" data-backdrop="static" id="paiement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div  class="modal-header btn btn-danger text-center text-white">
                                                            <h4 class="modal-title white-text w-100 font-weight-bold py-2">Validation Des Achats</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" class="white-text">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- start modal body -->
                                                            <div class="modal-body">
                                                                <div class="">
                                                                    <h4 class="media-heading">
                                                                        <div class="center">
                                                                            Les achats de {{ $client->nom_client }}<br>
                                                                            s'eleve à un montant de:<br>
                                                                             {{ $client->paniers->sum('prix').'GNF' }}
                                                                        </div>
                                                                    </h4>
                                                                </div>
                                                                <br>
                                                                <form action="{{ route('validation_vente') }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                                                    <div class="form-group">
                                                                        <label for="montant_payer">Montant Payé*</label>
                                                                        <input type="number" name="montant_payer" id="montant_payer" max="{{ $client->paniers->sum('prix') }}" class="form-control" placeholder="Entrez le montant" required>
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
                                                    <th>Pièce</th>
                                                    <th>Prix</th>
                                                    <th>Qté</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($client->paniers as $panier)
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>{{ $panier->piece }}</td>
                                                        <td>{{ $panier->prix }}</td>
                                                        <td>{{ $panier->quantite }}</td>
                                                        <td>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $panier->id }}">Modifier
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <!-- debut modal -->
                                                                <div class="modal fade" data-backdrop="static" id="classes{{ $panier->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                                    <form action="{{ route('panier.update',$panier->id) }}" method="post" enctype="multipart/form-data">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('PUT') }}
                                                                                        <div class="form-group">
                                                                                            <label for="nom_piece">Piece</label>
                                                                                            <input type="text" name="nom_piece" id="nom_piece" class="form-control" value="{{ $panier->piece }}" placeholder="Entrez le nom de la pièce" required>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="prix">Prix</label>
                                                                                            <input type="text" name="prix" id="prix" class="form-control" value="{{ $panier->prix }}" placeholder="Entrez le prix" required>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="quantite">Quantité</label>
                                                                                            <input type="text" name="quantite" id="quantite" class="form-control" value="{{ $panier->quantite }}" placeholder="Entrez la quantite" required>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="voiture_id">Voiture</label>
                                                                                                <select class="form-control" name="voiture_id" id="voiture_id">
                                                                                                    <option value="">Sélectionnez une voiture</option>
                                                                                                    @foreach ($all_voitures as $voiture)
                                                                                                        <option value="{{ $voiture->id }}" @if($voiture->id == $panier->voiture_id) selected @endif>{{ $voiture->nom_voiture }}</option>
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
                                                            <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $panier->id }})"
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
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    Total: {{$client->paniers->sum('prix')}}
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>


        <!-- code nouveau achat -->

        <!-- debut modal -->
            <div class="modal fade" data-backdrop="static" id="nouveau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div  class="modal-header btn btn-danger text-center text-white">
                            <h4 class="modal-title white-text w-100 font-weight-bold py-2">Nouvelle Vente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>
                        <!-- start modal body -->
                            <div class="modal-body">
                                <form action="{{ route('panier.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                    <div class="form-group">
                                        <label for="nom_piece">Pièce*</label>
                                        <input type="text" name="nom_piece" id="nom_piece" class="form-control" value="{{ old('nom_piece') }}" placeholder="Entrez le nom de pièce" required>
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
                                        <label for="voiture_id">Voiture</label>
                                        <select class="form-control" name="voiture_id" id="voiture_id">
                                        <option value="">Sélectionnez une voiture</option>
                                        @foreach ($all_voitures as $voiture)
                                            <option value="{{ $voiture->id }}">{{ $voiture->nom_voiture }}</option>
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
    @endsection
    <script>
        function deleteData(id)
             {
                 var id = id;
                 var url = '{{ route("panier.destroy", ":id") }}';
                 url = url.replace(':id', id);
                 $("#deleteform").attr('action', url);
             }
        function formSubmit()
        {
            // alert("bonjour");
            $("#deleteform").submit();
        }
    </script>
