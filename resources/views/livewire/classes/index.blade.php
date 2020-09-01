<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Liste Des Classes</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item" href="#">Classes</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Liste Des Classes</li>
        </ol>
    </div>
</div>
<!-- start message succes classe -->
<div>
    @if (session()->has('msg_succes_classe'))
            <div class="alert alert-success">
                {{ session('msg_succes_classe') }}
            </div>
    @endif
</div>
<!-- end message succes create classe -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>Liste Des Classes</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <a wire:click='form_create_classe'>
                            <div class="btn-group">
                                <button id="addRow1" class="btn btn-info">
                                    Ajouter Une Classe <i class="fa fa-plus"></i>
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
                                    <a href="{{ route('print_excel_pdf_copy_classe') }}">
                                        <i class="fa fa-print"></i> Imprimer </a>
                                </li>
                                <li>
                                    <a href="{{ route('print_excel_pdf_copy_classe') }}">
                                        <i class="fa fa-file-pdf-o"></i> Enregister au format PDF </a>
                                </li>
                                <li>
                                    <a href="{{ route('print_excel_pdf_copy_classe') }}">
                                        <i class="fa fa-file-excel-o"></i> Exporter vers Excel </a>
                                </li>
                                <li>
                                    <a href="{{ route('print_excel_pdf_copy_classe') }}">
                                        <i class="fa fa-copy"></i> Copier dans un fichier text </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="pull-right">  
                            <div class="input-group md-form form-sm form-1 pl-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text cyan lighten-2" id="basic-text1">
                                        <i class="fa fa-search text-black" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input wire:model='chercher' class="form-control my-0 py-1" type="search" placeholder="Chercher..." aria-label="Search">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-2">
                        <div class="pull-left">
                            <label>Afficher :</label>
                                <select wire:model.lazy='par_page'>
                                    @for ($i = 5; $i <= 25; $i = $i+5)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select> par page
                        </div>
                    </div>
                </div>
                <div class="table-scrollable">
                    <table
                        class="table table-striped table-bordered table-hover table-checkable order-column"
                        style="width: 100%" id="exportTable">
                        <thead>
                            <tr>
                                <th> N° </th>
                                <th> Niveau </th>
                                <th> Branche </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $key => $classe)
                                <tr class="odd gradeX">
                                    <td> {{ $classes->firstItem() + $key }} </td>
                                    <td> {{ $classe->nom  }} </td>
                                    <td> {{ $classe->branche }} </td>
                                    <td class="valigntop">
                                        <div class="btn-group">
                                            <button
                                                class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                type="button" data-toggle="dropdown"
                                                aria-expanded="false">
                                                Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a wire:click='edit({{ $classe->id }})'>
                                                        <i class="icon-fixed-width icon-pencil"></i> Modifier
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#myModal{{ $classe->id }}" data-toggle="modal">
                                                        <i class="icon-fixed-width icon-trash"></i> Supprimer 
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="myModal{{ $classe->id }}" class="mt-5 modal fade" data-backdrop="static">
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
                                                            Si vous supprimez une classe vous pouvez la restaurer au niveau de la corbeille,
                                                            avant 1 mois
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                        <button wire:click='delete({{ $classe->id }})' type="button" class="btn btn-danger" data-dismiss="modal">
                                                            Oui Supprimer
                                                        </button>
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
                    <!--Start lien pagination et text -->
                        <div class="pull-right">
                            {{ $classes->links() }}
                        </div>
                        <div class="text-left">
                            Affichage de l'élément {{ $classes->firstItem() }} à {{ $classes->lastItem() }} sur {{ $classes->total() }} éléments
                        </div>
                    <!--End lien pagination et text -->
            </div>
        </div>
    </div>
</div>
    
