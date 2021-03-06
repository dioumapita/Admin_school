@extends($chemin_theme_actif,['title' => 'Fournisseur'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Fournisseurs</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Fournisseur</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Fournisseurs</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line">
                <ul class="nav customtab nav-tabs" role="tablist">
                    <li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
                            View</a></li>
                    <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid
                            View</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-topline-red">
                                    <div class="card-head">
                                        <header>Liste Des Fournisseurs</header>
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
                                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Ajouter Un Fournisseur</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- start modal body -->
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('fournisseur.store') }}" method="post">
                                                                            {{ csrf_field() }}
                                                                            <div class="form-group">
                                                                                <label for="nom">Nom </label>
                                                                                <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" placeholder="Entrez le nom" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="prenom">Prénom</label>
                                                                                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom')}}" placeholder="Entrez le prénom" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="contact">Contact</label>
                                                                                <input type="tel" name="contact" id="contact" class="form-control" value="{{ old('contact')}}" placeholder="Entrez le contact" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="ville">Ville</label>
                                                                                <input type="text" name="ville" id="ville" class="form-control" value="{{ old('ville')}}" placeholder="Entrez la ville" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="image">Ajouter une photo</label>
                                                                                <input type="file" name="photo_fournisseur" id="photo_fournisseur" class="form-control-file" value="{{ old('photo_fournisseur')}}" placeholder="Ajouter une photo">
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
                                                        <th class="text-center"> Image </th>
                                                        <th class="text-center"> Nom </th>
                                                        <th class="text-center"> Prénom </th>
                                                        <th class="text-center"> Contact </th>
                                                        <th class="text-center"> Ville </th>
                                                        <th class="text-center"> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all_fournisseurs as $fournisseur)
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="/images/photos/fournisseurs/{{ $fournisseur->photo_fournisseur }}"
                                                                    alt="ndsplus-fournisseur">
                                                            </td>
                                                            <td class="text-center">{{ $fournisseur->nom }}</td>
                                                            <td class="text-center">{{ $fournisseur->prenom }}</td>
                                                            <th class="text-center">{{ $fournisseur->contact }}</th>
                                                            <th class="text-center">{{ $fournisseur->ville }}</th>
                                                            <td>
                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $fournisseur->id }}">Modifier
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <!-- debut modal -->
                                                                    <div class="modal fade" data-backdrop="static" id="classes{{ $fournisseur->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                                        <form action="{{ route('fournisseur.update',$fournisseur->id) }}" method="post" enctype="multipart/form-data">
                                                                                            {{ csrf_field() }}
                                                                                            {{ method_field('PUT') }}
                                                                                            <div class="form-group">
                                                                                                <label for="nom">Nom</label>
                                                                                                <input type="text" name="nom" id="nom" class="form-control" value="{{ $fournisseur->nom }}" placeholder="Nom" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="prenom">Prénom</label>
                                                                                                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $fournisseur->prenom }}" placeholder="Prénom" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="contact">Contact</label>
                                                                                                <input type="text" name="contact" id="contact" class="form-control" value="{{ $fournisseur->contact }}" placeholder="Contact" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="ville">Ville</label>
                                                                                                <input type="text" name="ville" id="ville" class="form-control" value="{{ $fournisseur->ville }}" placeholder="Ville" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="photo_fournisseur">Modifier la photo</label>
                                                                                                <input type="file" name="photo_fournisseur" id="photo_fournisseur" class="form-control-file" value="{{ old('photo_fournisseur')}}" placeholder="Modifier la photo">
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
                                                                <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $fournisseur->id }})"
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
                                                                                <form action="{{ route('fournisseur.destroy',$fournisseur->id) }}" method="post" id="deleteform">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="row">
                            @foreach ($all_fournisseurs as $fournisseur)
                                <div class="col-md-4">
                                    <div class="card card-box">
                                        <div class="card-body no-padding ">
                                            <div class="doctor-profile">
                                                <img src="/images/photos/fournisseurs/{{ $fournisseur->photo_fournisseur }}" class="doctor-pic" width="150px" height="150px"
                                                    alt="ndsplus-fournisseur">
                                                <div class="profile-usertitle">
                                                    <div class="doctor-name">{{ $fournisseur->nom.' '.$fournisseur->prenom }} </div>
                                                </div>
                                                <div>
                                                    <p>
                                                        <i class="fa fa-phone"></i> Contact: {{ $fournisseur->contact }}<br>
                                                        <i class="fa fa-home"></i> Ville: {{ $fournisseur->ville }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                            <u class="souligner">Liste Des Fournisseurs</u>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <table id="bordure_table" class="table table-bordered">
                                <th class="text-center" id="bordure_table">N°</th>
                                <th class="text-center" id="bordure_table">Nom </th>
                                <th class="text-center" id="bordure_table">Prénom</th>
                                <th class="text-center" id="bordure_table">Contact</th>
                                <th class="text-center" id="bordure_table">Ville</th>
                                <tbody id="bordure_table">
                                    @foreach ($all_fournisseurs as $fournisseur)
                                        <tr id="bordure_table">
                                            <td class="text-center" id="bordure_table">{{ $b++ }}</td>
                                            <td class="text-center" id="bordure_table">{{ $fournisseur->nom }}</td>
                                            <td class="text-center" id="bordure_table">{{ $fournisseur->prenom }}</td>
                                            <td class="text-center" id="bordure_table">{{ $fournisseur->contact }}</td>
                                            <td class="text-center" id="bordure_table">{{ $fournisseur->ville }}</td>
                                        </tr>
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
{{-- script utiliser pour la suppression un fournisseur --}}
<script>
    function deleteData(id)
         {
             var id = id;
             var url = '{{ route("fournisseur.destroy", ":id") }}';
             url = url.replace(':id', id);
             $("#deleteform").attr('action', url);
         }
    function formSubmit()
    {
        // alert("bonjour");
        $("#deleteform").submit();
    }
</script>
