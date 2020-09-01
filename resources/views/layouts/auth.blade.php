<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin School" />
	<meta name="author" content="Elhadj Mamadou Diouma Barry" />
	<!-- Titre de page lage -->
	<title>{{ page_title($title)  }}</title>
	<!-- google font -->
	<link href="../../../../../../fonts.googleapis.com/cssbc32.css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="/assets/asset_auth/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/assets/asset_auth/fonts/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="/assets/asset_auth/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
    <link rel="stylesheet" href="/assets/asset_auth/css/style.css">
    <link rel="stylesheet" href="/assets/asset_auth/css/main.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="/assets/asset_auth/images/favicon.ico"/>
</head>
<body>

	

        @yield('content')

	<!-- start js include path -->
	<script src="/assets/asset_auth/js/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="/assets/asset_auth/css/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/asset_auth/js/style.js"></script>
	<!-- end js include path -->
</body>
</html>