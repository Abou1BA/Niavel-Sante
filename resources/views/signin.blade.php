<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="shortcut icon" href="{{ asset('images/bg_header.jpg') }}">
    
    <link rel="stylesheet" media="screen" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' ) }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen" >
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>
        /* Réinitialisation des styles par défaut */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styles généraux */
        body {
            font-family: Arial, sans-serif;
            background-image: url('/images/fond1.jpeg');/* Ajoutez le chemin vers votre image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%; /* Largeur fixe */
            margin: 0 auto; /* Centrage horizontal */
            overflow-x: hidden; /* Empêche le défilement horizontal */
        }

        .content-wrapper {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap; /* Permet aux éléments de s'enrouler sur les petits écrans */
            padding: 30px;
            margin-top: 250px; /* Marge en haut */
        }

        .compartment {
            flex: 1;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Fond semi-transparent blanc */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
            margin: 10px; /* Espacement entre les compartiments */
        }

        .btn {
            display: block;
            width: 200px;
            padding: 10px;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px auto; /* Centre le bouton horizontalement */
        }

        .btn:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
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
                    <li><a class="btn" href="signin">Connexion / Inscription</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 

    <div class="container">
        <div class="content-wrapper">
            <div class="compartment">
                <h2>Hôpital</h2>
                <p class="text-right"><a class="btn btn-primary btn-large" href="{{ route ('sidebar-left') }}" >Inscription Hopital </a></p>
            </div>
            <div class="compartment">
                <h2>Médecin</h2>
                <p class="text-right"><a class="btn btn-primary btn-large" href="{{ route ('Medecin') }}" >Inscription Medecin </a></p>
            </div>
            <div class="compartment">
                <h2>Patient</h2>
                <p class="text-right"><a class="btn btn-primary btn-large" href="{{ route ('sidebar-right') }}" >Inscription Patient</a></p>
            </div>
        </div>
    </div>
    <footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+221 77 428 63 39<br>
								<a href="mailto:#">abouniavelb@gmail.com</a><br>
								<br>
								Ouakam, Cité Avion
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Suivez-nous</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix"><a href="https://wa.me/+221774286339"><img src="{{ asset('images/waa.jpeg') }}" alt="WhatsApp" class="social-icon" width="40" height="40"></a>
								<a href="https://www.facebook.com/profile.php?id=774286339"><img src="{{ asset('images/like.png') }}" alt="facebook" class="social-icon" width="40" height="40"></a>
								<a href="https://www.linkedin.com/in/votreprofillinkedin"><img src="{{ asset('images/li.png') }}" alt="LinkedIn" class="social-icon" width="40" height="40"></a>

							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">L'Exception qui se Distingue par l'Excellence</h3>
						<div class="widget-body">
						<p>Vous recherchez une plateforme fiable pour suivre et gérer votre santé de manière proactive ? Ne cherchez pas plus loin ! Niavel_Sante est là pour vous.

En créant un compte sur Niavel_Sante, vous débloquez un monde de possibilités pour prendre en main votre bien-être. </p>
							<p>Rejoignez-nous dès maintenant et commencez votre voyage vers une vie plus saine et plus épanouie !

Inscrivez-vous en quelques clics et commencez à vivre mieux dès aujourd'hui !</p>
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
								<a href="#">accueil</a> 
								<a href="{{ route ('about')  }}">A propos</a> |
								<a href="{{ route ('signup')  }}">Connexion</a> |
								<a href="{{ route ('contact')  }}">Contact</a> |
								<b><a href="{{ route ('signin')  }}">Créer un Compte</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2024, AbouNiavel. Tous droits réservés 
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
</body>
</html>
