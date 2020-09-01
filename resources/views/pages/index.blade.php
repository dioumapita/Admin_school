<!DOCTYPE html>
<html lang="fr">

<head>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!-- Titre de la page -->
<title>{{ page_title('') }}</title>
<!-- Start Bootstrap And CSS Files -->
<link rel="stylesheet" href="/assets/asset_acceuil/css/bootstrap.min.css">
<!-- fonts -->

{{-- <link href="assets/asset_acceuil/fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700"
    rel="stylesheet">
    
<link
	href="assets/asset_acceuil/fonts.googleapis.com/cssda6f.css?family=Open+Sans:400,600,700"
    rel="stylesheet"> --}}
    
<!-- end fonts -->
<link rel="stylesheet" href="/assets/asset_acceuil/css/ionicons.min.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/owl.carousel.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/owl.theme.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/style.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/box-shadow.css">
<!-- icons -->
<link href="/assets/asset_principal/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!-- End Bootstrap And CSS Files -->
<script type="text/javascript" async="" src="assets/asset_acceuil/js/ga.js"></script>

</head>
<body>
    <!-- Start Header -->
        <header id="home" class="gradient-violat">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><span
                            class="logo-wraper logo-white"> <img src="assets/asset_acceuil/images/Logo.png"
                                alt="">
                        </span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse"
                        id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav  navbar-right">
                            <li class="active"><a href="#home">Home <span
                                    class="sr-only">(current)</span></a></li>
                            <li><a href="#customer-support">Contact</a></li>
                            <li><a href="#blog-card"
                                class="btn btn-orange border-none btn-rounded-corner btn-navbar"
                                target="_blank">Connexion<span class="icon-on-button"><i
                                        class="glyphicon glyphicon-log-in"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <hr class="navbar-divider">
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
    <!-- End Header -->
    <!-- Start Pub -->
        <section id="introduction"
            class="gradient-violat padding-top-90 home-slider">
            <div id="home-slider" class="owl-carousel">
                <div>
                    <div
                        class="sliding-card-with-bottom-image text-center padding-top-90">
                        <h2 class="cta-heading text-white">Admin School</h2>
                        <br>
                        <p class="text-white slider-para">La solution incontournable pour une</br> Adminstration Scolaire
                            simple et efficace
                        </p>
                        <div class="image-container text-center sm-display-none">
                            <img class="img-responsive" src="assets/asset_acceuil/images/pc1.png" alt="">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="container">
                        <div class="row">
                            <div class="image-right-slide-bg clearfix"
                                style="background-image: url(assets/asset_acceuil/images/pc2.png)">
                                <div class="col-md-12">
                                    <h2 class="cta-heading text-white">Admin School</h2>
                                    <br>
                                    <p class="text-white slider-para">
                                        Le logiciel complet pour l'administration automatisée<br>
                                        de l'Etablissement Scolaire
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Pub -->
    <!-- Start Mode De Connexion -->
        <section id="blog-card" class="padding-top-bottom-90">
            <div class="container">
                <div class="heading-wraper text-center margin-bottom-80">
                    <h4 class="text-black">Connectez-Vous en tant que : </h4>
                    <hr class="heading-devider gradient-orange">
                </div>
                <div class="row">
                    <div class="demo-area">
                        <div class="correct-way a-way">
                            <div class="correct-wrapper item-wrapper">
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Superviseur</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/superviseur.png" alt="Superviseur">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Agents Administratifs</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/agent_administratif.png" alt="Agents Administratifs">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <br><br><br>
                <div class="row">
                    <div class="demo-area">
                        <div class="correct-way a-way">
                            <div class="correct-wrapper item-wrapper">
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Enseigant(e)</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/enseignant.png" alt="Enseigant">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Comptable</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/comptable.png" alt="Comptable">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Mode De Connexion -->
    <!-- Start About Admin-School -->
        <section id="cta" class="gradient-violat cta padding-top-bottom-90">
            <div class="container">
                <div class="heading-wraper text-center margin-bottom-80">
                    <h4>Pourquoi Choisir Admin School ???</h4>
                    <hr class="heading-devider gradient-orange">
                    <br>
                    <p class="text-white slider-para">
                        Admin School est un logiciel complet pour l'administration automatisée de l'etablissement scolaire,
                        il permet de faire des traitements complexes de façon sûre et simple.
                        Son interface est vraiment intuitive et convient à tous type d'utilisateurs.</br>
                        Admin School à été developpé dans le but de permettre aux responsables d'un Etablissement Scolaire
                        d'avoire la maitrise permanente et totale de la gestion des activités principale de l'Etablissement
                    </p>
                </div>
            </div>
        </section>
    <!-- End About Admin-School -->
    <!-- Start Contact -->
        <section id="customer-support" class="overflow-x-hidden">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-wraper">
                        <img class="img-responsive" src="assets/asset_acceuil/images/about.svg" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div
                        class="customer-support-content padding-top-bottom-120 sm-padding-top-bottom-50-75">
                        <h4>Un service client toujours à vôtre écoute</h4>
                        <p class="margin-top-bottom-30">
                            Nous sommes toujours heureux de vous aider.Pour toutes questions
                            ou assistance,veuillez nous envoyer un mail à <a href="mailto:adminschool@gmail.com">adminschool@gmail.com</a>
                            ou nous contactez sur les numéros suivants : <br>
                            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp; 623 89 77 08 &nbsp;
                            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp; 660 59 82 86 &nbsp;
                        </p>
                        <a class="btn btn-orange border-none btn-rounded-corner" href="">Admin School Vous satisfaire est notre priorité.
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Contact -->
    <!-- Start Footer -->
        <footer class="">
            <hr class="footer-divider">
            <div class="copyright-cta">
                <p class="text-uppercase">
                    All rights Reserved By <a href="#"><span
                        class="span text-violat ">Redstar Theme</span></a>
                </p>
            </div>
        </footer>
    <!-- End Footer -->
	<div id="scroll-top-div" class="scroll-top-div">
		<div class="scroll-top-icon-container">
			<i class="ion-ios-arrow-thin-up"></i>
		</div>
    </div>
    
    
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="assets/asset_acceuil/js/jquery.min.js"></script>
	<script src="assets/asset_acceuil/js/bootstrap.min.js"></script>
	<script src="assets/asset_acceuil/js/owl.carousel.min.js"></script>
	<script src="assets/asset_acceuil/js/script.js"></script>
	<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7944098-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
      <!--start include flashy -->
        @include ('flashy::message')
      <!-- end include flashy -->
</body>
</html>
