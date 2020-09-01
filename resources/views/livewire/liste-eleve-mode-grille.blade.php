<div>
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
    <div class="mt-5">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-3">
                <div class="col-auto ml-auto">
                    Afficher
                  <select wire:model.lazy='par_page' id="par_page" class="custom-select w-auto">
                    @for ($i = 12; $i <= 92; $i+=20)
                     <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                  <label for="par_page">Eleves Par Page</label>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-9">
                <div class="form-group pull-right">
                 <label for="recherche" class="sr-only">Recherche</label>
                  <input type="text" wire:model='recherche' id="recherche" class="form-control" placeholder="Ex: 05-06-2020" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Recherche par date d'inscription</small>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($all_inscriptions as $inscription)
                <div class="col-md-4">
                    <div class="card card-box">
                        <div class="card-body no-padding ">
                            <div class="doctor-profile">
                                <img src="/assets/asset_principal/img/std/std10.jpg" class="doctor-pic"
                                    alt="">
                                <div class="profile-usertitle">
                                    <div class="doctor-name">{{ $inscription->eleve->nom.' '.$inscription->eleve->prenom }} </div>
                                    <div class="name-center"> Classe: {{ $inscription->niveau->nom_niveau }} </div>
                                </div>
                                <p>Date Inscription: {{ $inscription->date_inscription }}</p>
                                <div>
                                    <p>
                                        {{ $inscription->eleve->matricule }}
                                    </p>
                                </div>
                                <div class="profile-userbuttons">
                                    <a href="{{ route('eleve.show',$inscription->eleve->id) }}"
                                        class="btn btn-circle deepPink-bgcolor btn-sm">
                                       Lire La Suite
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-6 ">
                <div class="pull-right">
                    {{ $all_inscriptions->links() }} 
                </div>
                
            </div>
        </div>
    </div>
</div>
