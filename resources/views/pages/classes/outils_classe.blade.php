    {{-- on herite du chemin du theme actif --}}
@extends($chemin_theme_actif,['title' => 'Outils-Classe'])
    @section('content')
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
                                <a href="{{ route('liste_des_classes') }}">
                                    <div class="btn-group">
                                        <button id="addRow1" class="btn btn-info">
                                           <i class="fa fa-mail-reply"></i> Retour 
                                        </button>
                                    </div>
                                </a>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_classes as $classe)
                                        <tr class="odd gradeX">
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $classe->nom  }} </td>
                                            <td> {{ $classe->branche }} </td>
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