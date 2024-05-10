<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Connexion</title>

	<link rel="shortcut icon" href="{{ asset('images/gt_favicon.png')}}">
	
	<link rel="stylesheet" media="screen" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen" >
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js'}}"></script>
	<script src="assets/js/respond.min.js'}}"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="{{ route ('index') }}"><img src="images/te.jpeg" alt="Niavel_Sante" width="200" height="100"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="{{ route ('index') }}">Accueil</a></li>
					<li><a href="{{ route ('about') }}">Apropos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Plus de pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route ('sidebar-left') }}">Hopital</a></li>
							<li><a href="{{ route ('sidebar-right') }}">Patient</a></li>
							<li class="active"><a href="{{ route ('Medecin')  }}">Médecin</a></li>
						</ul>
					</li>
					<li><a href="{{ route ('contact') }}">Contact</a></li>
					<li class="active"><a class="btn" href="{{ route ('signin') }}">Connexion/Inscription</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="{{ route ('index') }}">Accueil</a></li>
			<li class="active">Connexion</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Connexion</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Coordonnées</h3>


							<form method="POST" action="{{ route('login') }}">
        @csrf



								<div class="top-margin">
									<label>Email</label>
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
									@error('email')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class=" top-margin">
										<label for="password">Mot de passe <span class="text-danger">*</span></label>
										<input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" required>
										@error('password')
											<div class="invalid-feedback">{{ $message }}</div>
										@enderror
								</div> <br><br>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var passwordInput = document.getElementById('password');
        var confirmPasswordInput = document.getElementById('confirm_password');
        var passwordError = document.getElementById('password_error');
        var form = document.querySelector('form');

        confirmPasswordInput.addEventListener('input', function() {
            if (confirmPasswordInput.value !== passwordInput.value) {
                passwordError.style.display = 'block';
            } else {
                passwordError.style.display = 'none';
            }
        });

        confirmPasswordInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                if (confirmPasswordInput.value !== passwordInput.value) {
                    passwordError.style.display = 'block';
                } else {
                    passwordError.style.display = 'none';
                    form.submit(); // Soumet le formulaire si les mots de passe correspondent
                }
            }
        });
    });
</script>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											J'accepte les <a href="page_terms.html">Termes et Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Connecter</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

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
								<a href="https://www.linkedin.com/feed/?trk=seo-authwall-base_sign-in-submit"><img src="{{ asset('images/li.png') }}" alt="LinkedIn" class="social-icon" width="40" height="40"></a>

							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Vous et Nous</h3>
						<div class="widget-body">
							<p>"Ne manquez pas les dernières mises à jour sur votre santé! Connectez-vous dès maintenant à votre compte Niavel_Sante pour accéder à des conseils personnalisés, des ressources utiles et bien plus encore. Votre bien-être n'attend pas!"

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
								<a href="#">Accueil</a> | 
								<a href="{{ route ('about') }}">Apropos</a> |
								<a href="{{ route ('sidebar-right') }}">Hopital</a> |
								<a href="{{ route ('contact') }}">Contact</a> |
								<b><a href="{{ route ('signin') }}">Créer un compte</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2024, AbouNiavel.Tous droits réservés
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>
	<script src="{{ asset('http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/headroom.min.js')}}"></script>
	<script src="{{ asset('js/jQuery.headroom.min.js')}}"></script>
	<script src="{{ asset('js/template.js')}}"></script>
</body>
</html>