<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>BIENVENU SUR NIAVEL_SANTE</title>

	<link rel="shortcut icon" href="{{ asset('images/bg_header.jpg') }}">
	
	<link rel="stylesheet" media="screen" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' ) }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen" >
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js') }}"></script>
	<script src="assets/js/respond.min.js') }}"></script>
	<![endif]-->
</head>

<body class="index">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="{{ route ('index') }}"><img src="{{ asset('images/te.jpeg') }}" alt="Niavel_Sante"  width="200" height="100"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="{{ route ('index')  }}">ACCUEIL</a></li>
					
					<li><a href="{{ route ('about')  }}">A PROPOS</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">PLUS DE PAGES <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route ('sidebar-left') }}">Hopital</a></li>
							<li class="active"><a href="{{ route ('sidebar-right')  }}">Patient</a></li>
							<li class="active"><a href="{{ route ('Medecin')  }}">Médecin</a></li>
						</ul>
					</li>
					<li><a href="{{ route ('contact')  }}">CONTACT</a></li>
					<li><a class="btn" href="{{ route ('signin')  }}">Connexion / Inscription</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->







@yield('content')







<footer id="footer" class="top-space">

<div class="footer1">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 widget">
                <h3 class="widget-title">Contact</h3>
                <div class="widget-body">
                    <p>+221 77 428 63 39<br>
                        <a href="{{ asset('mailto:#') }}">abouniavelb@gmail.com</a><br>
                        <br>
                        Ouakam, Cité Avion 
                    </p>	
                </div>
            </div>

            <div class="col-md-3 widget">
                <h3 class="widget-title">Suivez-nous sur</h3>
                <div class="widget-body">
                    <p class="follow-me-icons">
                        <a href="https://wa.me/+221774286339"><img src="{{ asset('images/waa.jpeg') }}" alt="WhatsApp" class="social-icon" width="40" height="40"></a>
                        <a href="https://www.facebook.com/profile.php?id=774286339"><img src="{{ asset('images/like.png') }}" alt="facebook" class="social-icon" width="40" height="40"></a>
                        <a href="https://www.linkedin.com/in/votreprofillinkedin"><img src="{{ asset('images/li.png') }}" alt="LinkedIn" class="social-icon" width="40" height="40"></a>

                    </p>	
                </div>
            </div>

            <div class="col-md-6 widget">
                <h3 class="widget-title">Téléchargez dès aujourd'hui et Prenez le Contrôle de Votre Santé!</h3>
                <div class="widget-body">
                    <p>Télécharger Niavel_Sante offre aux utilisateurs un moyen pratique de gérer efficacement leurs informations médicales. Cette application centralise les données de santé, permettant un accès instantané depuis n'importe où. Niavel_Sante assure la sécurité des données grâce à un stockage crypté et sécurisé. Les utilisateurs peuvent planifier et suivre leurs rendez-vous médicaux, ainsi que leurs traitements, pour une gestion optimale de leur santé. De plus, Niavel_Sante facilite le partage des informations médicales avec les professionnels de santé, favorisant une meilleure coordination des soins.





</p>
                </div>
            </div>

        </div> <!-- /row of widgets -->
    </div>
</div>

<div class="footer2">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 widget">
                <div class="widget-body">
                    <p class="simplenav">
                        <a href="#">Accueil</a> ||
                        <a href="{{ route ('about')  }}">Apropos</a> |
                        <a href="{{ route ('sidebar-left')  }}">Inscription Hopital</a> |
                        <a href="{{ route ('contact')  }}">Contact</a> |
                        <b><a href="{{ route ('signin')  }}">Créer Compte</a></b>
                    </p>
                </div>
            </div>

            <div class="col-md-6 widget">
                <div class="widget-body">
                    <p class="text-right">
                        Copyright &copy; 2024, AbouNiavel. Tous droits réservés.  
                    </p>
                </div>
            </div>

        </div> <!-- /row of widgets -->
    </div>
</div>

</footer>	





<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>
<script src="{{ asset('http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/headroom.min.js') }}"></script>
<script src="{{ asset('js/jQuery.headroom.min.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
</body>
</html>
