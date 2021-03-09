@extends($chemin_theme_actif,['title' => 'Arrivage'])
@section('content')
<style>
    @media print{
        #media_screen{
            display:none;
        }
    }
</style>
    <div id="media_screen" class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Arrivages</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Arrivage</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Arrivage</li>
            </ol>
        </div>
    </div>
    <div id="media_screen" class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Arrivages</header>
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
                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Nouveau Arrivage</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                                            </div>
                                            <!-- start modal body -->
                                                <div class="modal-body">
                                                    <form action="{{ route('arrivage.store') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label for="nom_arrivage">Nom De L'arrivage</label>
                                                            <input type="text" name="nom_arrivage" id="nom_arrivage" class="form-control" value="{{ old('nom_arrivage') }}" placeholder="Le nom de l'arrivage" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nbre_voitures">Nbre De Voitures</label>
                                                            <input type="text" name="nbre_voitures" id="nbre_voitures" class="form-control" value="{{ old('nbre_voitures')}}" placeholder="Nombre de voiture">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nbre_camions">Nbre De Camions</label>
                                                            <input type="text" name="nbre_camions" id="nbre_camions" class="form-control" value="{{ old('nbre_camions')}}" placeholder="Nombre de camion">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nbre_pieces">Nbre De Pièces</label>
                                                            <input type="text" name="nbre_pieces" id="nbre_pieces" class="form-control" value="{{ old('nbre_pieces')}}" placeholder="Nombre de pièces">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nbre_divers">Nbre De Divers</label>
                                                            <input type="text" name="nbre_divers" id="nbre_divers" class="form-control" value="{{ old('nbre_divers')}}" placeholder="Nombre de divers">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date_arrivage">Date</label>
                                                            <input type="date" name="date_arrivage" id="date_arrivage" class="form-control" value="{{ old('date_arrivage')}}" placeholder="Entrez la date" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="heure_arrivage">Heure</label>
                                                            <input type="time" name="heure_arrivage" id="heure_arrivage" class="form-control" value="{{ old('heure_arrivage')}}" placeholder="Entrez l'heure" required>
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
                            <a  onclick="printDiv('liste_arrivage')" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer</a>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table
                            class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                id="eleves">
                            <thead>
                                <tr>
                                    {{-- <th class="text-center"> N° </th> --}}
                                    <th class="text-center"> Arrivages </th>
                                    <th class="text-center"> Date </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_arrivages as $arrivage)
                                    <tr class="odd gradeX">
                                        {{-- <td class="text-center">{{ $i++ }}</td> --}}
                                        <td class="text-center">{{ $arrivage->nom_arrivage }}</td>
                                        <td class="text-center">{{ $arrivage->date_arrivage->format('d/m/Y') }}</td>

                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $arrivage->id }}">Modifier
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <!-- debut modal -->
                                                <div class="modal fade" data-backdrop="static" id="classes{{ $arrivage->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                    <form action="{{ route('arrivage.update',$arrivage->id) }}" method="post">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('PUT') }}
                                                                        <div class="form-group">
                                                                            <label for="nom_arrivage">Nom De L'arrivage</label>
                                                                            <input type="text" name="nom_arrivage" id="nom_arrivage" class="form-control" value="{{ $arrivage->nom_arrivage }}" placeholder="Nom Arrivage" >
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="date_arrivage">Date</label>
                                                                            <input type="date" name="date_arrivage" id="date_arrivage" class="form-control" value="{{ $arrivage->date_arrivage->format('Y-m-d')}}" placeholder="Date de l'arrivage" required>
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
                                            <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $arrivage->id }})"
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
                                                            <form action="{{ route('arrivage.destroy',$arrivage->id) }}" method="post" id="deleteform">
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
    <br><br>
    <div id="liste_arrivage" class="row">
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
                    margin-right: -3%;
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
                                            <h3 id="entete_facture" class="mx-auto text-center font-bold">&ensp;ETABLISSEMENT YACOUBA BAH ET FRERE</h3>
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
                                                Tél: 622-57-13-11 / 621-01-74-15 / 628-56-11-15
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
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
                                            <i class="souligner">Liste Des Arrivages</i>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table id="bordure_table" class="table table-bordered">
                                <th class="text-center" id="bordure_table">N°</th>
                                <th class="text-center" id="bordure_table"> Arrivage </th>
                                <th class="text-center" id="bordure_table"> Date </th>
                                <tbody id="bordure_table">
                                    @foreach ($all_arrivages as $arrivage)
                                        <tr id="bordure_table">
                                            <td class="text-center" id="bordure_table">{{ $b++ }}</td>
                                            <td class="text-center" id="bordure_table">{{$arrivage->nom_arrivage}}</td>
                                            <td class="text-center" id="bordure_table">{{$arrivage->date_arrivage->format('d/m/Y') }}</td>
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
<!--Script d'impression -->
<script>
    function printDiv(liste_arrivage) {
            var printContents = document.getElementById('liste_arrivage').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
    }
</script>
<script>
    function deleteData(id)
         {
             var id = id;
             var url = '{{ route("arrivage.destroy", ":id") }}';
             url = url.replace(':id', id);
             $("#deleteform").attr('action', url);
         }
    function formSubmit()
    {
        // alert("bonjour");
        $("#deleteform").submit();
    }
</script>
