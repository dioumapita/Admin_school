{{-- on herite du theme activer --}}
@extends($chemin_theme_actif,['title' => 'annee-scolaire'])
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Années Scolaires</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Etablissement</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Années Scolaires</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Années Scolaires</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <a href="{{ route('annees.create') }}">
                                <div class="btn-group">
                                    <button id="addRow1" class="btn btn-info">
                                        Ajouter Une Année Scolaire <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </a>
                            <div class="btn-group">
                                <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                    data-toggle="dropdown">Outils
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-left">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Imprimer </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Enregister au format PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-word-o"></i> Exporter vers Word </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table
                            class="table table-striped table-bordered table-hover table-checkable order-column"
                            style="width: 100%">
                            <thead>
                                <tr>
                                    <th> N° </th>
                                    <th> Début </th>
                                    <th> Fin </th>
                                    <th> Année Scolaire </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($liste_annees as $key => $annee)
                                    <tr class="odd gradeX">
                                        <td> {{ $annee->id }} </td>
                                        <td> {{ $annee->debut_annee }} </td>
                                        <td> {{ $annee->fin_annee }} </td>
                                        <td> {{ $annee->annee_scolaire }}</td>
                                        <td>
                                            <a href="{{ route('annees.edit',$annee->id) }}"
                                                class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i> Modifier
                                            </a>
                                            {{-- <form action="{{ route('annees.destroy',$annee->id) }}" method="post" class="inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button tye="submit" onlick="confirm('dddd')" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o "></i> Supprimer
                                                </button>
                                            </form> --}}
                                            <a href="#myModal" data-toggle="modal" onclick="deleteData({{$annee->id}})"
                                                class="btn btn-danger btn-xs">
                                                <i class="fa fa-pencil"></i> Supprimer
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
                                                            <form action="{{ route('annees.destroy',$annee->id) }}" method="post" id="deleteform">
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
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("annees.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteform").attr('action', url);
     }
function formSubmit()
{
    // alert("bonjour");
    $("#deleteform").submit();
}
</script>