<div>
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Informations Générales</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('home') }}">Accueil</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Etablissement</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Informations Générales</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <div class="card card-topline-aqua">
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <div class="profile-userpic">
                                    <img src="images/photos/avatars/{{ $avatar_user_online }}" class="img-circle" alt="photo_profil" width="500px" height="140px">
                                </div>
                            </div>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{ $nom_user_online }} </div>
                                <div class="profile-usertitle-job"> Superviseur </div>
                            </div>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Prénom</b> <a class="pull-right">{{ $prenom_user_online }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Téléphone</b> <a class="pull-right">{{ $telephone_user_online }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Adresse</b> <a class="pull-right">{{ $adresse_user_online }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="card">
                        <div class="card-topline-aqua">
                            <header></header>
                        </div>
                        <div class="white-box">
                            <!-- Nav tabs -->
                            <div class="p-rl-20">
                                <ul class="nav customtab nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#tab1" class="nav-link active" data-toggle="tab">
                                            Modifier les informations
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab2" class="nav-link"data-toggle="tab">
                                            Logo + Cachet
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                {{-- message de succès de la mis à jour des informatons de l'etablissement --}}
                                @if(session()->has('msg_info_etablissement'))
                                    <div wire:poll.3s  class="alert alert-success">
                                        <strong>{{ session('msg_info_etablissement') }}</strong>
                                    </div>
                                @endif
                                <div class="tab-pane active fontawesome-demo" id="tab1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="full-width p-rl-20">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="card card-box">
                                                        <div class="card-head">
                                                            <header>Informations De L'Etablissement</header>
                                                        </div>
                                                        
                                                        <div class="card-body " id="bar-parent6">
                                                            <form wire:submit.prevent="update_infos_general">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <h4>Nom *</h4>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                                                                                <input type="text" wire:model='nom' class="form-control @error('nom')is-invalid @enderror" placeholder="Nom">
                                                                                    <!-- Message d'erreur du nom -->
                                                                                    @error('nom')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>
                                                                            <br>
                                                                        <h4>Téléphone *</h4>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                                <input type="text" wire:model='telephone' class="form-control @error('telephone')is-invalid @enderror"  placeholder="Téléphone">
                                                                                    <!--Message d'erreur du telephone -->
                                                                                    @error('telephone')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>
                                                                            <br>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <h4>Adresse *</h4>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                                                                <input type="text" wire:model='adresse' class="form-control @error('adresse')is-invalid @enderror" placeholder="Adresse">
                                                                                <!--Message d'erreur de l'adresse -->
                                                                                @error('adresse')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                            <br>
                                                                        <h4>Adresse E-Mail *</h4>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                                <input type="text" wire:model='email' class="form-control @error('email')is-invalid @enderror" placeholder="E-Mail">
                                                                                <!--Message d'erreur de l'email -->
                                                                                @error('email')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                            <span class="profile-usertitle-job">Ce champs de saisi est facultatif</span>
                                                                            <br>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <h4>Site web *</h4>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-firefox"></i></span>
                                                                                <input type="text" wire:model='site_web' class="form-control @error('site_web')is-invalid @enderror " placeholder="Site web">
                                                                                <!-- Message d'erreur du site web -->
                                                                                    @error('site_web')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>
                                                                            <span class="profile-usertitle-job">Ce champs de saisi est facultatif</span>
                                                                            <br>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <h4>Type D'etablissement *</h4>
                                                                            <div class="form-group">
                                                                                <select wire:model='type' class="form-control @error('type')is-invalid @enderror">
                                                                                <option value="Privé">Privé</option>
                                                                                <option value="Public">Public</option>
                                                                                </select>
                                                                                <!-- Message d'erreur du type d'etablissement -->
                                                                                @error('type')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong id="msg_error_profil">{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        <br>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary btn btn-block">Mettre à jour</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="full-width p-rl-20">
                                                <div class="col-md-12 col-sm-12">
                                                    <div  class="card card-box">
                                                        <div class="card-head">
                                                            <header>Logo + Cachet</header>
                                                        </div>
                                                        <div class="card-body " id="bar-parent6">
                                                            <div class="row">
                                                                @livewire('logo-etablissement')
                                                                    &nbsp;
                                                                @livewire('cachet-etablissement')
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
</div>
