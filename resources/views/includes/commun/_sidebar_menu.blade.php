<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
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
									<span class="title">Tableau de Bord</span>
								</a>
							</li>
							<li class="nav-item {{ set_active_route('liste_des_themes') }}">
								<a href="{{ route('liste_des_themes') }}" class="nav-link nav-toggle"> <i class="material-icons">color_lens</i>
									<span class="title">Thèmes</span>
								</a>
							</li>
							<!-- Start Elèves -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
										<span class="title">Elèves</span><span class="arrow"></span></a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_students.html" class="nav-link "> <span class="title">All
													Students</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_student.html" class="nav-link "> <span class="title">Add
													Student</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_student_bootstrap.html" class="nav-link "> <span class="title">Add
													Student Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="edit_student.html" class="nav-link "> <span class="title">Edit
													Student</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="student_profile.html" class="nav-link "> <span class="title">About
													Student</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End Elèves -->
							<!-- Start Enseignants -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
										<span class="title">Enseignants</span> <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_professors.html" class="nav-link "> <span class="title">All
													Professors</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_professor.html" class="nav-link "> <span class="title">Add
													Professor</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_professor_bootstrap.html" class="nav-link "> <span
													class="title">Add Professor Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="edit_professor.html" class="nav-link "> <span class="title">Edit
													Professor</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="professor_profile.html" class="nav-link "> <span class="title">About
													Professor</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End Enseignants -->
							<!-- Start Matières -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">local_library</i>
										<span class="title">Matières</span> <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_courses.html" class="nav-link "> <span class="title">All
													Courses</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_course.html" class="nav-link "> <span class="title">Add
													Course</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_course_bootstrap.html" class="nav-link "> <span class="title">Add
													Course Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="edit_course.html" class="nav-link "> <span class="title">Edit
													Course</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="course_details.html" class="nav-link "> <span class="title">About
													Course</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End Matières -->
							<!-- Start Notes -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">note_add</i>
										<span class="title">Notes</span> <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_courses.html" class="nav-link "> <span class="title">All
													Courses</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_course.html" class="nav-link "> <span class="title">Add
													Course</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_course_bootstrap.html" class="nav-link "> <span class="title">Add
													Course Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="edit_course.html" class="nav-link "> <span class="title">Edit
													Course</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="course_details.html" class="nav-link "> <span class="title">About
													Course</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End Notes -->
							<!-- Start Classes -->
								<li class="nav-item">
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
											<a href="add_department.html" class="nav-link "> <span class="title">Add
													Department</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_department_bootstrap.html" class="nav-link "> <span
													class="title">Add Department Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ">
												<span class="title">Branches</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End Classes -->
							<!-- Start Salles -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">local_play</i>
										<span class="title">Salles</span> <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_department.html" class="nav-link "> <span class="title">All
													Departments</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_department.html" class="nav-link "> <span class="title">Add
													Department</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_department_bootstrap.html" class="nav-link "> <span
													class="title">Add Department Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="edit_department.html" class="nav-link "> <span class="title">Edit
													Department</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End salles -->
							<!-- Start Emplois du temps -->
								<li class="nav-item">
									<a href="event.html" class="nav-link nav-toggle"> <i class="material-icons">event</i>
										<span class="title">Emplois du temps</span>
									</a>
								</li>
							<!-- End Emplois du temps -->
							<!-- Start Absences -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">view_list</i>
										<span class="title">Absences</span> <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_staffs.html" class="nav-link "> <span class="title">All
													Staff</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_staff.html" class="nav-link "> <span class="title">Add Staff</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_staff_bootstrap.html" class="nav-link "> <span class="title">Add
													Staff Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="edit_staff.html" class="nav-link "> <span class="title">Edit
													Staff</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="staff_profile.html" class="nav-link "> <span class="title">Staff
													Profile</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End Absences -->
							<!-- Start Comptabilité -->
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i
											class="material-icons">credit_card</i>
										<span class="title">Comptabilite</span> <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_holidays.html" class="nav-link "> <span class="title">All
													Holiday</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_holiday.html" class="nav-link "> <span class="title">Add
													Holiday</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="add_holiday_bootstrap.html" class="nav-link "> <span class="title">Add
													Holiday Bootstrap</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="edit_holiday.html" class="nav-link "> <span class="title">Edit
													Holiday</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="holiday_calendar.html" class="nav-link "> <span class="title">Holiday
													Calendar</span>
											</a>
										</li>
									</ul>
								</li>
							<!-- End Comptabilite -->
							<!-- Start Impression -->
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i
										class="material-icons">print</i>
									<span class="title">Impressions</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_holidays.html" class="nav-link "> <span class="title">All
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday.html" class="nav-link "> <span class="title">Add
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday_bootstrap.html" class="nav-link "> <span class="title">Add
												Holiday Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_holiday.html" class="nav-link "> <span class="title">Edit
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="holiday_calendar.html" class="nav-link "> <span class="title">Holiday
												Calendar</span>
										</a>
									</li>
								</ul>
							</li>
						<!-- End Impression -->
						<!-- Start Statistique -->
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i
										class="material-icons">timeline</i>
									<span class="title">Statisques</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_holidays.html" class="nav-link "> <span class="title">All
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday.html" class="nav-link "> <span class="title">Add
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday_bootstrap.html" class="nav-link "> <span class="title">Add
												Holiday Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_holiday.html" class="nav-link "> <span class="title">Edit
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="holiday_calendar.html" class="nav-link "> <span class="title">Holiday
												Calendar</span>
										</a>
									</li>
								</ul>
							</li>
						<!-- End Statistique -->
						<!-- Start Messagerie -->
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">Messagerie</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="email_inbox.html" class="nav-link ">
											<span class="title">Inbox</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_view.html" class="nav-link ">
											<span class="title">View Mail</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_compose.html" class="nav-link ">
											<span class="title">Compose Mail</span>
										</a>
									</li>
								</ul>
							</li>
						<!-- END Messagerie -->
						<!-- Start Etablissement -->
							<li class="nav-item">
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
							</li>
						<!-- End Etablissement -->
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Fees</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="fees_collection.html" class="nav-link "> <span class="title">Fees
												Collection</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees.html" class="nav-link "> <span class="title">Add Fees </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees_bootstrap.html" class="nav-link "> <span class="title">Add
												Fees Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="fees_receipt.html" class="nav-link "> <span class="title">Fee
												Receipt</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="widget.html" class="nav-link nav-toggle"> <i class="material-icons">widgets</i>
									<span class="title">Widget</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dvr</i>
									<span class="title">UI Elements</span>
									<span class="label label-rouded label-menu label-warning">new</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="ui_buttons.html" class="nav-link ">
											<span class="title">Buttons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_tabs_accordions_navs.html" class="nav-link ">
											<span class="title">Tabs &amp; Accordions</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_typography.html" class="nav-link ">
											<span class="title">Typography</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="notification.html" class="nav-link ">
											<span class="title">Notification</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_icons.html" class="nav-link ">
											<span class="title">Icons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_panels.html" class="nav-link ">
											<span class="title">Panels</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_grid.html" class="nav-link ">
											<span class="title">Grids</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="calendar.html" class="nav-link ">
											<span class="title">Calender</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_tree.html" class="nav-link ">
											<span class="title">Tree View</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_carousel.html" class="nav-link ">
											<span class="title">Carousel</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">store</i>
									<span class="title">Material Elements</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="material_button.html" class="nav-link ">
											<span class="title">Buttons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_tab.html" class="nav-link ">
											<span class="title">Tabs</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_chips.html" class="nav-link ">
											<span class="title">Chips</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_grid.html" class="nav-link ">
											<span class="title">Grid</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_icons.html" class="nav-link ">
											<span class="title">Icon</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_form.html" class="nav-link ">
											<span class="title">Form</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_datepicker.html" class="nav-link ">
											<span class="title">DatePicker</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_select.html" class="nav-link ">
											<span class="title">Select Item</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_loading.html" class="nav-link ">
											<span class="title">Loading</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_menu.html" class="nav-link ">
											<span class="title">Menu</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_slider.html" class="nav-link ">
											<span class="title">Slider</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_tables.html" class="nav-link ">
											<span class="title">Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_toggle.html" class="nav-link ">
											<span class="title">Toggle</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_badges.html" class="nav-link ">
											<span class="title">Badges</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">subtitles</i>
									<span class="title">Forms </span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="layouts_form.html" class="nav-link ">
											<span class="title">Form Layout</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="advance_form.html" class="nav-link ">
											<span class="title">Advance Component</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="wizard.html" class="nav-link ">
											<span class="title">Form Wizard</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="validation_form.html" class="nav-link ">
											<span class="title">Form Validation</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="editable_form.html" class="nav-link ">
											<span class="title">Editor</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">list</i>
									<span class="title">Data Tables</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="basic_table.html" class="nav-link ">
											<span class="title">Basic Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="advanced_table.html" class="nav-link ">
											<span class="title">Advance Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="export_table.html" class="nav-link ">
											<span class="title">Export Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="child_row_table.html" class="nav-link ">
											<span class="title">Child Row Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="group_table.html" class="nav-link ">
											<span class="title">Grouping</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="tableData.html" class="nav-link ">
											<span class="title">Tables With Sourced Data</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">timeline</i>
									<span class="title">Charts</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="charts_echarts.html" class="nav-link ">
											<span class="title">eCharts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_morris.html" class="nav-link ">
											<span class="title">Morris Charts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_chartjs.html" class="nav-link ">
											<span class="title">Chartjs</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">map</i>
									<span class="title">Maps</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="google_maps.html" class="nav-link ">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="vector_maps.html" class="nav-link ">
											<span class="title">Vector Maps</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle"> <i
										class="material-icons">description</i>
									<span class="title">Extra pages</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item  ">
										<a href="login.html" class="nav-link "> <span class="title">Login</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="sign_up.html" class="nav-link "> <span class="title">Sign Up</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="forgot_password.html" class="nav-link "> <span class="title">Forgot
												Password</span>
										</a>
									</li>
									<li class="nav-item"><a href="user_profile.html" class="nav-link "><span
												class="title">Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="contact.html" class="nav-link "> <span class="title">Contact Us</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="lock_screen.html" class="nav-link "> <span class="title">Lock
												Screen</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="blank_page.html" class="nav-link "> <span class="title">Blank
												Page</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">slideshow</i>
									<span class="title">Multi Level Menu</span>
									<span class="arrow "></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-university"></i> Item 1
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="javascript:;" class="nav-link nav-toggle">
													<i class="fa fa-bell-o"></i> Arrow Toggle
													<span class="arrow "></span>
												</a>
												<ul class="sub-menu">
													<li class="nav-item">
														<a href="javascript:;" class="nav-link">
															<i class="fa fa-calculator"></i> Sample Link 1</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-clone"></i> Sample Link 2</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-cogs"></i> Sample Link 3</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-rss"></i> Sample Link 2</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-hdd-o"></i> Sample Link 3</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-gavel"></i> Arrow Toggle
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-paper-plane"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-power-off"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-recycle"></i> Sample Link 1
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="fa fa-volume-up"></i> Item 3 </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
<!-- end sidebar menu -->
<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
                    
