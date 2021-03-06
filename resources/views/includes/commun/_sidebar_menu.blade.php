<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed sidemenu-closed" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="/images/photos/avatars/{{ $avatar }}" class="img-circle user-img-circle"
											alt="Photo_profil" width="250px" height="80px" />
									</div>
									<div class="pull-left info">
										<p>{{ $nom }}</p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												En line</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item {{ set_active_route('home') }}">
								<a href="{{ route('home') }}" class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
									<span class="title">Menu Principal</span>
								</a>
							</li>
							<li class="nav-item {{ set_active_route('liste_des_themes') }}">
								<a href="{{ route('liste_des_themes') }}" class="nav-link nav-toggle"> <i class="material-icons">color_lens</i>
									<span class="title">Thèmes</span>
								</a>
							</li>
							<!-- Start Elèves -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"><i class="material-icons">time_to_leave</i>
										<span class="title">Gestion Des Voitures</span><span class="arrow"></span></a>
									{{-- <ul class="sub-menu">
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Inscriptions</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Réinscriptions</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Liste Des Elèves</span>
											</a>
										</li>
									</ul> --}}
								</li>
							<!-- End Elèves -->
							<!-- Start Notes -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">healing</i>
										<span class="title">Gestion Des Pièces</span> <span class="arrow"></span>
									</a>
									{{-- <ul class="sub-menu">
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Gestion Des Notes</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Config Moyenne</span>
											</a>
										</li>
									</ul> --}}
								</li>
							<!-- End Notes -->
							<!-- Start Enseignants -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">credit_card</i>
										<span class="title">Vente De Voitures</span> <span class="arrow"></span>
									</a>
									{{-- <ul class="sub-menu">
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Inscriptions</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Liste Des Enseignants</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Emargement</span>
											</a>
										</li>
									</ul> --}}
								</li>
							<!-- End Enseignants -->
							<!-- Start Matières -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">credit_card</i>
										<span class="title">Vente De Pièces</span> <span class="arrow"></span>
									</a>
									{{-- <ul class="sub-menu">
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Ajouter Une Matière</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Liste Des Matières</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Configurations</span>
											</a>
										</li>
									</ul> --}}
								</li>
							<!-- End Matières -->
							<!-- Start Emplois Du Temps -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group_add</i>
										<span class="title">Gestion Des Fournisseurs</span> <span class="arrow"></span>
									</a>
									{{-- <ul class="sub-menu">
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Planing</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Attribution De Matière</span>
											</a>
										</li>
									</ul> --}}
								</li>
							<!-- End Emplois Du Temps -->
							<!-- Start Comptabilité -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i
											class="material-icons">group</i>
										<span class="title">Travailleurs</span> <span class="arrow"></span>
									</a>
									{{-- <ul class="sub-menu">
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Paiement Des Frais Scolaire</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Etat De Paiement Des Frais Scolaire</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Paiement Des Enseignants</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Etat De Paiement Des Enseignants</span>
											</a>
										</li>
									</ul> --}}
								</li>
							<!-- End Comptabilite -->
							<!-- Start Impression -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i
											class="material-icons">print</i>
										<span class="title">Impressions</span> <span class="arrow"></span>
									</a>
									{{-- <ul class="sub-menu">
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Classement Des Elèves</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Bulletins De Notes</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Cartes Scolaires</span>
											</a>
										</li>
									</ul> --}}
								</li>
							<!-- End Impression -->
							<!-- Start Classes -->
								{{-- <li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
										<span class="title">Classes</span> <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="{{ route('niveaux.index') }}" class="nav-link ">
												<span class="title">Liste Des Classes</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('niveaux.create') }}" class="nav-link">
												<span class="title">Ajouter Une Classe</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_department_bootstrap.html" class="nav-link ">
												<span class="title">Frais De Scolarite</span>
											</a>
										</li>
									</ul>
								</li> --}}
							<!-- End Classes -->
						<!-- Start Etablissement -->
							{{-- <li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">account_balance</i>
									<span class="title">Etablissement</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item {{ set_active_route('etablissement_infos_general') }}">
										<a href="{{ route('etablissement_infos_general') }}" class="nav-link ">
											<span class="title">Informations Générales</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_view.html" class="nav-link ">
											<span class="title">En-tête Des Rapports</span>
										</a>
									</li>
									<li class="nav-item {{ set_active_route('annee_scolaire.index') }}">
										<a href="{{ route('annees.index') }}" class="nav-link ">
											<span class="title">Année Scolaire</span>
										</a>
									</li>
								</ul>
							</li> --}}
						<!-- End Etablissement -->
						</ul>
					</div>
				</div>
			</div>
<!-- end sidebar menu -->
<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">

