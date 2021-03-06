{{-- on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'Piece-Liste'])
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
                <div class="page-title">Liste Des Pièces</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Pièces</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Pièces</li>
            </ol>
        </div>
    </div>
    <div id="media_screen" class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Pièces</header>
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
                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Nouvelle Pièce</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                                            </div>
                                            <!-- start modal body -->
                                                <div class="modal-body">
                                                    <form action="{{ route('piece.store') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label for="nom_piece">Nom De La Pièce</label>
                                                            <input type="text" name="nom_piece" id="nom_piece" class="form-control" value="{{ old('nom_piece') }}" placeholder="Entrez le nom de pièce" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="prix">Prix</label>
                                                            <input type="text" name="prix" id="prix" class="form-control" value="{{ old('prix')}}" placeholder="Entrez le prix" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="quantite">Quantite</label>
                                                            <input type="text" name="quantite" id="quantite" class="form-control" value="{{ old('quantite')}}" placeholder="Entrez la quantite" required>
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
                            <a  onclick="printDiv('liste_piece')" href="#" class="btn btn-primary"><i class="fa fa-print"></i> Imprimer</a>
                            <div class="btn-group">
                                <button id="addRow1" data-toggle="modal" data-target="#all_niveau" class="btn btn-primary">
                                    <i class="fa fa-list"></i> Afficher Les Pièces Par Arrivage
                                </button>
                            </div>
                            <!-- debut modal -->
                                <div class="modal fade" data-backdrop="static" id="all_niveau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                        aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div  class="modal-header btn btn-danger text-center text-white">
                                                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Afficher Les Pièces Par Arrivage</h4>
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
                                                                <option value="{{ route('piece_par_arrivage',$arrivage->id) }}">{{ $arrivage->nom_arrivage}}</option>
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
                                id="eleves">
                            <thead>
                                <tr>
                                    <th class="text-center"> N° </th>
                                    <th class="text-center"> Pièce </th>
                                    <th class="text-center"> Prix </th>
                                    <th class="text-center"> Quantité </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_pieces as $piece)
                                    <tr class="odd gradeX">
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td class="text-center">{{ $piece->nom_piece }}</td>
                                        <td class="text-center">{{ $piece->prix.' GNF' }}</td>
                                        <td class="text-center">{{ $piece->quantite }}</td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#classes{{ $piece->id }}">Modifier
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <!-- debut modal -->
                                                <div class="modal fade" data-backdrop="static" id="classes{{ $piece->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                                                    <form action="{{ route('piece.update',$piece->id) }}" method="post" enctype="multipart/form-data">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('PUT') }}
                                                                        <div class="form-group">
                                                                            <label for="nom_piece">Nom De La Pièce</label>
                                                                            <input type="text" name="nom_piece" id="nom_piece" class="form-control" value="{{ $piece->nom_piece }}" placeholder="Entrez le nom de la pièce" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="prix">Prix</label>
                                                                            <input type="text" name="prix" id="prix" class="form-control" value="{{ $piece->prix }}" placeholder="Entrez le prix" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="quantite">Quantité</label>
                                                                            <input type="text" name="quantite" id="quantite" class="form-control" value="{{ $piece->quantite }}" placeholder="Entrez la quantite" required>
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label for="voiture_id">Arrivage</label>
                                                                                <select class="form-control" name="arrivage_id" id="arrivage_id">
                                                                                    <option value="">Sélectionnez un arrivage</option>
                                                                                    @foreach ($all_arrivages as $arrivage)
                                                                                        <option value="{{ $arrivage->id }}" @if($arrivage->id == $piece->arrivage_id) selected @endif>{{ $arrivage->nom_arrivage }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                        </div>
                                                                        {{-- <div class="form-group">
                                                                          <label for="image_piece">Modifier l'image</label>
                                                                          <input type="file" class="form-control-file" name="image_piece" id="image_piece" placeholder="Choisir une image">
                                                                        </div> --}}
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
                                            <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $piece->id }})"
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
                                                            <form action="{{ route('piece.destroy',$piece->id) }}" method="post" id="deleteform">
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
    <br><br>
    <div id="liste_piece" class="row">
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
        <div id="invisible-screen" class="col-md-12">
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
                                            <h3 id="entete_facture" class="mx-auto text-center font-bold">ETABLISSEMENT YACOUBA BAH ET FRERE</h3>
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
                        <br><br><br><br><br><br>
                        <br><br>
                        <div class="row col-md-12 col-sm-12 col-lg-12">
                            <div class="mx-auto col-md-12 col-sm-12 col-lg-12">
                                <div class="cercle">
                                    <div class="text-center">
                                        <h4 class="font-bold addr-font-h4">
                                            <u class="souligner">Liste De Toute Les Pièces</u><br>
                                            <u class="souligner">Achetées</u>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <table id="bordure_table" class="table table-bordered">
                                <th class="text-center" id="bordure_table">N°</th>
                                <th class="text-center" id="bordure_table"> Pièce </th>
                                <th class="text-center" id="bordure_table"> Prix </th>
                                <th class="text-center" id="bordure_table"> Quantite </th>
                                <tbody id="bordure_table">
                                    @foreach ($all_pieces as $piece)
                                        <tr id="bordure_table">
                                            <td class="text-center" id="bordure_table">{{ $b++ }}</td>
                                            <td class="text-center" id="bordure_table">{{ $piece->nom_piece }}</td>
                                            <td class="text-center" id="bordure_table">{{ $piece->prix }}</td>
                                            <td class="text-center" id="bordure_table">{{ $piece->quantite }}</td>
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
<!--Script d'impression -->
<script>
    function printDiv(liste_piece) {
     var printContents = document.getElementById('liste_piece').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
{{-- script utiliser pour la suppression une pièce --}}
<script>
    function deleteData(id)
         {
             var id = id;
             var url = '{{ route("piece.destroy", ":id") }}';
             url = url.replace(':id', id);
             $("#deleteform").attr('action', url);
         }
    function formSubmit()
    {
        // alert("bonjour");
        $("#deleteform").submit();
    }
</script>

