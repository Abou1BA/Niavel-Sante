
@extends('layouts.app')

@section('content')


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="{{ route ('index')  }}">Accueil</a></li>
			<li class="active">A propos</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title"> A propos de nous</h1>
				</header>
				<h3>Notre mission</h3>
				<p><img src="images/fond.jpeg" alt="" class="img-rounded pull-right" width="300" > Nous sommes déterminés à simplifier la gestion de la santé en offrant une solution numérique intuitive pour la gestion des informations médicales. Notre objectif est d'autonomiser les individus en leur donnant un accès facile à leurs dossiers médicaux et en leur permettant de prendre des décisions éclairées concernant leur santé.</p>
				<h3>Notre Vision</h3>
				<p>Nous croyons en un avenir où la technologie joue un rôle central dans l'amélioration de la santé et du bien-être. En combinant l'innovation technologique avec une approche centrée sur l'utilisateur, nous visons à révolutionner la manière dont les individus gèrent leur santé au quotidien.</p>
				<h3>Nos valeurs</h3>
				<p> 
					<ul>
						<li>Accessibilité : Nous nous engageons à rendre l'application accessible à tous, quel que soit leur niveau de compétence technologique.</li>
						<li>Sécurité : La confidentialité et la sécurité des données de nos utilisateurs sont notre priorité absolue. Nous mettons en œuvre les meilleures pratiques de sécurité pour protéger leurs informations médicales.</li>
						<li>Fiabilité : Nous nous efforçons de fournir une application fiable et performante, garantissant une expérience utilisateur optimale à nos utilisateurs.</li>
						<li>Innovation : Nous sommes constamment à la recherche de nouvelles façons d'améliorer notre produit et d'offrir des fonctionnalités innovantes qui répondent aux besoins changeants de nos utilisateurs.</li>
            		</ul>
				</p>				
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
				<h4>Conseils</h4>
<ul class="list-unstyled list-spaces">
    <li><a href="#">Prenez soin de votre santé</a><br><span class="small text-muted">Découvrez nos conseils pour améliorer votre bien-être au quotidien.</span></li>
    <li><a href="#">Une application intuitive</a><br><span class="small text-muted">Soyez guidé pas à pas dans l'utilisation de notre application simple et efficace.</span></li>
    <li><a href="#">Restez informer</a><br><span class="small text-muted">Recevez les dernières actualités sur la santé et les nouvelles fonctionnalités de notre application.</span></li>
    <li><a href="#">Contactez-nous</a><br><span class="small text-muted">Besoin d'aide ou avez-vous des questions ? N'hésitez pas à nous contacter.</span></li>
    <li><a href="#">Partagez votre expérience</a><br><span class="small text-muted">Faites-nous part de vos retours et suggestions pour continuer à améliorer notre application.</span></li>
</ul>

				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
@endsection