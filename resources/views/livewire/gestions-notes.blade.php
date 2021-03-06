<div>
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Gestions Des Notes</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Notes</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Gestions Des Notes</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    {{-- @if(empty($niveau_choisi)) --}}
                        <header>Gestions Des Notes</header>
                    {{-- @else
                        <header>Classe: {{ $niveau_choisi->nom_niveau.' '.$niveau_choisi->options }}</header>
                    @endif --}}
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-left">
                                @if(empty($niveau_choisi))
                                    <div class="form-group">
                                        <select class="form-control" wire:model.lazy='id_niveau'>
                                            <option value="">Selectionnez une classe</option>
                                            @foreach ($all_niveaux as $key => $niveau)
                                                <option value="{{ $niveau->id }}">{{ $niveau->nom_niveau.' '.$niveau->options }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @else
                                    <div class="btn-group">
                                        <button id="addRow1" class="btn btn-danger" data-toggle="modal" data-target="#modalLoginForm">
                                            Saisir Les Notes <i class="fa fa-plus"></i>
                                        </button>
                                        <!-- debut modal -->
                                        <div class="modal fade" data-backdrop="static" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div  class="modal-header btn btn-primary text-center text-white">
                                                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Saisie Des Notes</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" class="white-text">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- start modal body -->
                                                        <div class="modal-body">
                                                            <form wire:click='store()' method="GET">
                                                                <input type="hidden" name="niveau_choisi" value="{{ $niveau_choisi->id }}">
                                                                <div class="form-group">
                                                                    <label for="">Selectionner une matiere</label>
                                                                    <select class="form-control" name="matiere" id="">
                                                                    @foreach ($all_matieres as $key => $matiere)
                                                                        <option value="{{ $matiere->id }}">{{ $matiere->nom_matiere}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Selectionner un trimestre</label>
                                                                    <select class="form-control" name="trimestre" id="">
                                                                    @foreach ($all_trimestre as $key => $trimestre)
                                                                        <option value="{{ $trimestre->id }}">{{ $trimestre->nom_trimestre}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Selectionner une annee scolaire</label>
                                                                    <select class="form-control" name="annee" id="">
                                                                    @foreach ($all_annee as $key => $annee)
                                                                        <option value="{{ $annee->id }}">{{ $annee->annee_scolaire}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer d-flex justify-content-center">
                                                                    <button type="submit" class="btn btn-success">Valider <i class="fa fa-check"></i></button>
                                                                    <button class="btn btn-dark" data-dismiss="modal">Annuler <i class="fa fa-times"></i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    <!-- end modal body -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fin modal -->
                                    </div>
                                @endif
                            </div> 
                            {{-- @if(empty($niveau_choisi))
                                <div class="btn-group pull-left">
                                    <div class="form-group">
                                        <select onchange="window.location.href = this.value" class="form-control" name=niveau>
                                            <option value="">Selectionnez une classe</option>
                                            @foreach ($all_niveaux as $key => $niveau)
                                                <option value="{{ route('note_par_niveau',$niveau->id) }}">{{ $niveau->nom_niveau.' '.$niveau->options }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>   
                            @else
                                <div class="btn-group">
                                    <button id="addRow1" class="btn btn-danger" data-toggle="modal" data-target="#modalLoginForm">
                                        Saisir Les Notes <i class="fa fa-plus"></i>
                                    </button>
                                    <!-- debut modal -->
                                    <div class="modal fade" data-backdrop="static" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div  class="modal-header btn btn-primary text-center text-white">
                                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Saisie Des Notes</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" class="white-text">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- start modal body -->
                                                    <div class="modal-body">
                                                        <form action="{{ route('saisie_note') }}" method="GET">
                                                            <input type="hidden" name="niveau_choisi" value="{{ $niveau_choisi->id }}">
                                                            <div class="form-group">
                                                                <label for="">Selectionner une matiere</label>
                                                                <select class="form-control" name="matiere" id="">
                                                                @foreach ($all_matieres as $key => $matiere)
                                                                    <option value="{{ $matiere->id }}">{{ $matiere->nom_matiere}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Selectionner un trimestre</label>
                                                                <select class="form-control" name="trimestre" id="">
                                                                @foreach ($all_trimestre as $key => $trimestre)
                                                                    <option value="{{ $trimestre->id }}">{{ $trimestre->nom_trimestre}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Selectionner une annee scolaire</label>
                                                                <select class="form-control" name="annee" id="">
                                                                @foreach ($all_annee as $key => $annee)
                                                                    <option value="{{ $annee->id }}">{{ $annee->annee_scolaire}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-center">
                                                                <button type="submit" class="btn btn-success">Valider <i class="fa fa-check"></i></button>
                                                                <button class="btn btn-dark" data-dismiss="modal">Annuler <i class="fa fa-times"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                <!-- end modal body -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin modal -->
                                </div>
                            @endif --}}
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
