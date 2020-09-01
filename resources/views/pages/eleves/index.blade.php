{{-- on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'eleves-listes'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Elèves</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Elèves</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Elèves</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Elèves</header>
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
                                <a href="{{ route('eleve.create') }}" id="addRow"
                                    class="btn btn-info">
                                    Ajouter Un Elève <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a href="{{ route('afficher_les_eleves_en_mode_grille') }}" id="addRow"
                                    class="btn btn-primary">
                                    <i class="fa fa-th-large"></i>
                                   Afficher Les Eleves En Mode Grille 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-right">
                                <div class="form-group">
                                    <select onchange="window.location.href = this.value" class="form-control" name="classe" id="classe">
                                        <option value="{{ route('eleve.index') }}">Afficher par niveau</option>
                                        @foreach ($all_classes as $classe)
                                            <option value="{{ route('eleve_par_niveau',$classe->id) }}" @if($classe->id == $id_niveau) selected @endif>{{ $classe->nom_niveau.' '.$classe->options }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table
                            class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                id="eleves">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th> Matricule </th>
                                    <th> Nom </th>
                                    <th> Prénom </th>
                                    <th> Classe</th>
                                    <th> Date Inscription </th>
                                     <th> Année Scolaire </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_inscriptions as $inscription)
                                    <tr class="odd gradeX">
                                        <td class="patient-img">
                                            <img src="/assets/asset_principal/img/std/std1.jpg"
                                                alt="">
                                        </td>
                                        <td class="left">{{ $inscription->eleve->matricule }}</td>
                                        <td>{{ $inscription->eleve->nom }}</td>
                                        <td class="left">{{ $inscription->eleve->prenom }}</td>
                                        <td>{{ $inscription->niveau->nom_niveau.' '.$inscription->niveau->options }}</td>   
                                        <td>{{ $inscription->date_inscription }}</td>
                                        <td> {{ $inscription->annee->annee_scolaire }}</td>
                                        <td>
                                            <a href="{{ route('eleve.show',$inscription->eleve->id) }}" 
                                                class="btn btn-info btn-xs">
                                                <i class="fa fa-eye "></i> Afficher
                                            </a>
                                            <a href="{{ route('eleve.edit',$inscription->eleve->id) }}"
                                                class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i> Modifier
                                            </a>
                                            <a href="#myModal" data-toggle="modal" onclick="deleteData({{ $inscription->eleve->id }})"
                                                class="btn btn-danger btn-xs">
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
                                                            <form action="{{ route('eleve.destroy',$inscription->eleve->id) }}" method="post" id="deleteform">
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
       
@endsection
{{-- script utiliser pour la suppression d'un eleve --}}
<script>
    function deleteData(id)
         {
             var id = id;
             var url = '{{ route("eleve.destroy", ":id") }}';
             url = url.replace(':id', id);
             $("#deleteform").attr('action', url);
         }
    function formSubmit()
    {
        // alert("bonjour");
        $("#deleteform").submit();
    }
</script>

