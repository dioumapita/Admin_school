<div>
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Liste Des Notes</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Notes</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste Des Notes</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Liste Des Notes</header>
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
                                <form wire:submit.prevent='envoi'>
                                    <div class="form-group">
                                        <select class="form-control" wire:model.debounce='niveaux'>
                                            <option value="">Selectionnez une classe</option>
                                            @foreach ($all_niveaux as $key => $niveau)
                                            <option value="12">{{ $niveau->nom_niveau.' '.$niveau->options }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit">valider</button>
                                </form>
                            </div>

                            {{-- @if ($n)

                                <div class="btn-group pull-left">
                                    <div class="form-group">
                                        <select class="form-control" wire:model='matiere'>
                                            <option value="">Matiere</option>
                                            @foreach ($n->matieres as $matiere)
                                            <option value="{{ $matiere->id }}">{{ $matiere->nom_matiere }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif --}}
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-right">
                                <div class="form-group">
                                    <select onchange="window.location.href = this.value" class="form-control" name="classe" id="classe">
                                        <option value="{{ route('matiere.index') }}">Afficher par classe</option>
                                        {{-- @foreach ($all_classes as $classe)
                                            <option value="{{ route('matiere_par_classe',$classe->id) }}" @if($classe->id == $niveau->id) selected @endif>{{ $classe->nom_niveau.' '.$classe->options }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="pull-right">gfgfg</div>
                            <div class="btn-group pull-right">
                                <div class="form-group">
                                    <select onchange="window.location.href = this.value" class="form-control" name="classe" id="classe">
                                        <option value="{{ route('matiere.index') }}">Afficher par classe</option>
                                        {{-- @foreach ($all_classes as $classe)
                                            <option value="{{ route('matiere_par_classe',$classe->id) }}" @if($classe->id == $niveau->id) selected @endif>{{ $classe->nom_niveau.' '.$classe->options }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table
                            class="table table-striped table-bordered table-hover table-checkable order-column"
                            style="width: 100%">
                            <thead>
                                <tr>
                                    <th> Matricule </th>
                                    <th> Nom </th>
                                    <th> Prénom </th>
                                    <th> Note1 </th>
                                    <th> Note2 </th>
                                    <th> Note3 </th>
                                </tr>
                            </thead>
                            <tbody> 
                                    @if($notes)
                                            @foreach ($notes as $note)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        {{ $note->eleve->matricule}}
                                                    </td>
                                                    <td>
                                                        {{ $note->eleve->nom}}
                                                    </td>
                                                    <td>
                                                        {{ $note->eleve->prenom }}
                                                    </td>
                                                    <td>
                                                        {{ $note->note1 }}
                                                    </td>
                                                    <td>
                                                        {{ $note->note2 }}
                                                    </td>
                                                    <td>
                                                        {{ $note->note3 }}
                                                    </td>
                                                </tr>
                                            @endforeach 
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("select[num=niveau]").on("change",function(){
                alert($(this).val());
        });
    });
</script>