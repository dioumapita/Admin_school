{{--on herite du chemin du theme actif--}}
    @extends($chemin_theme_actif,['title' => 'Vente-Voiture'])
        @section('content')
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Vente Des Voitures</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Voitures</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Vente Des Voitures</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-topline-red">
                        <div class="card-head">
                            <header>Vente Des Voitures</header>
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
                                    <a href="{{ route('vente_voiture.index') }}" class="btn btn-primary">Liste Des Ventes De Voiture</a>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                        id="eleves">
                                    <thead>
                                        <tr>
                                            <th class="text-center"> Image </th>
                                            <th class="text-center"> Immatriculation </th>
                                            <th class="text-center"> Voiture</th>
                                            <th class="text-center"> Kilomètrage </th>
                                            <th class="text-center"> Prix </th>
                                            <th class="text-center"> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_voitures as $voiture)
                                            <tr class="odd gradeX">
                                                <td class="patient-img">
                                                    <img src="/images/photos/voitures/{{$voiture->image_voiture}}"
                                                        alt="ndsplus-voitures">
                                                </td>
                                                <td class="text-center">{{ $voiture->immatriculation }}</td>
                                                <td class="text-center">{{ $voiture->nom_voiture }}</td>
                                                <td class="text-center">
                                                    {{ $voiture->kilometrage }}
                                                </td>
                                                <td class="text-center">
                                                  {{ $voiture->prix.' GNF' }}
                                                </td>
                                                <td class="">
                                                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#nouveau{{$voiture->id}}">Effectuer Une Vente
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                    <!-- debut modal -->
                                                        <div class="modal fade" data-backdrop="static" id="nouveau{{$voiture->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                            <form action="{{ route('commande.store') }}" method="post">
                                                                                {{ csrf_field() }}
                                                                                <input type="hidden" name="voiture_id" value="{{ $voiture->id }}">
                                                                                @if ($client != null)
                                                                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                                                                @else
                                                                                    <div class="form-group">
                                                                                        <label for="client">Prénom et Nom Du client</label>
                                                                                        <input type="text" name="client" id="client" class="form-control" value="{{ old('client') }}" placeholder="Saisir les informations du client" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="contact_client">Contact Du Client</label>
                                                                                        <input type="text" name="contact_client" id="contact_client" class="form-control" value="{{ old('contact_client')}}" placeholder="Saisir le contact du client" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="temoin_client">Témoin Du Client</label>
                                                                                        <input type="text" name="temoin_client" id="temoin_client" class="form-control" value="{{ old('temoin_client') }}" placeholder="Saisir le prénom et nom du témoin du client">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="tel_temoin_client">Contact Du Témoin</label>
                                                                                        <input type="text" name="tel_temoin_client" id="tel_temoin_client" class="form-control" value="{{ old('tel_temoin_client')}}" placeholder="Saisir le contact du témoin du client">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="temoin_vendeur">Témoin Du Vendeur</label>
                                                                                        <input type="text" name="temoin_vendeur" id="temoin_vendeur" class="form-control" value="{{ old('temoin_vendeur') }}" placeholder="Saisir le prénom et nom du témoin du vendeur">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="tel_temoin_vendeur">Contact Du Témoin</label>
                                                                                        <input type="text" name="tel_temoin_vendeur" id="tel_temoin_vendeur" class="form-control" value="{{ old('tel_temoin_vendeur')}}" placeholder="Saisir le contact du témoin du vendeur">
                                                                                    </div>
                                                                                @endif
                                                                                @if($client != null and $client->commandes->where('temoin_client','!=',null)->count() == 0)
                                                                                    <div class="form-group">
                                                                                        <label for="temoin_client">Témoin Du Client</label>
                                                                                        <input type="text" name="temoin_client" id="temoin_client" class="form-control" value="{{ old('temoin_client') }}" placeholder="Saisir le prénom et nom du témoin du client">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="tel_temoin_client">Contact Du Témoin</label>
                                                                                        <input type="text" name="tel_temoin_client" id="tel_temoin_client" class="form-control" value="{{ old('tel_temoin_client')}}" placeholder="Saisir le contact du témoin du client">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="temoin_vendeur">Témoin Du Vendeur</label>
                                                                                        <input type="text" name="temoin_vendeur" id="temoin_vendeur" class="form-control" value="{{ old('temoin_vendeur') }}" placeholder="Saisir le prénom et nom du témoin du vendeur">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="tel_temoin_vendeur">Contact Du Témoin</label>
                                                                                        <input type="text" name="tel_temoin_vendeur" id="tel_temoin_vendeur" class="form-control" value="{{ old('tel_temoin_vendeur')}}" placeholder="Saisir le contact du témoin du vendeur">
                                                                                    </div>
                                                                                @endif
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
