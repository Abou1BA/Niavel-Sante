
@extends('layouts.app')

@section('content')


	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Niavel_Sante: Numérisez Votre Carnet de Santé</h1>
				<p class="tagline">Une Solution Intuitive pour Gérer Votre Santé en Toute Simplicité <a href="{{ asset('http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus') }}"></a></p>
				<p><a class="btn btn-action btn-lg" role="button" href="{{ route ('about') }}">Plus d'information</a> </p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Qu'est-ce que Niavel_Sante </h2>
		<p class="text-muted">
		Niavel_Sante est une application innovante conçue pour simplifier la gestion de votre santé. En numérisant votre carnet de santé traditionnel, Niavel_Sante vous permet d'accéder facilement à vos informations médicales importantes, où que vous soyez.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Raisons pour choisir cette application</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Accessibilité et disponibilité</h4></div>
					<div class="h-body text-center">
						<p>Les informations médicales sont stockées de manière électronique, ce qui permet un accès rapide et facile aux données de santé. Les individus peuvent consulter leur carnet de santé numérique à tout moment et depuis n'importe où, ce qui peut être particulièrement utile en cas d'urgence médicale ou lors de consultations avec des professionnels de la santé.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Centralisation des informations</h4></div>
					<div class="h-body text-center">
						<p>Centraliser toutes les informations médicales d'un individu en un seul endroit. Cela inclut les antécédents médicaux, les allergies, les médicaments, les vaccinations, les résultats d'examens médicaux, etc. Cette centralisation facilite la gestion des dossiers médicaux et réduit le risque de perte ou d'oubli d'informations importantes. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Meilleure coordination des soins de santé</h4></div>
					<div class="h-body text-center">
						<p>En ayant accès à un carnet de santé numérique complet et à jour, les professionnels de la santé peuvent fournir des soins plus efficaces et mieux coordonnés. Ils disposent de toutes les informations nécessaires pour prendre des décisions éclairées concernant le traitement et la gestion des conditions médicales des patients.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Sécurité et confidentialité</h4></div>
					<div class="h-body text-center">
						<p>Les systèmes de gestion des dossiers médicaux électroniques sont conçus pour garantir la sécurité et la confidentialité des données de santé des individus. Des mesures de sécurité robustes, telles que le cryptage des données et les contrôles d'accès, sont mises en place pour protéger les informations médicales sensibles contre les accès non autorisés. </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Fonctionnalités Principales de Niavel_Sante</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Numérisation Facile du Carnet de Santé</h3>
				<p> Niavel_Sante simplifie le processus de gestion des dossiers médicaux, offrant aux utilisateurs un moyen pratique et sécurisé de prendre le contrôle de leur santé.</p>
			</div>
			<div class="col-sm-6">
				<h3>Gestion des Rendez-vous Médicaux</h3>
				<p>Niavel_Sante aide les utilisateurs à organiser leur emploi du temps médical de manière efficace, à améliorer la ponctualité aux rendez-vous et à optimiser leur suivi médical global.</p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Suivi des Traitements et des Prescriptions</h3>
				<p>
				En offrant une manière organisée et centralisée de gérer les traitements et les prescriptions, Niavel_Sante aide les utilisateurs à optimiser leur observance thérapeutique, à éviter les interactions médicamenteuses et à améliorer leur suivi médical global. 
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Stockage Sécurisé des Données de Santé</h3>
				<p>En garantissant un stockage sécurisé des données de santé, Niavel_Sante offre aux utilisateurs la tranquillité d'esprit nécessaire pour gérer leurs informations médicales en toute confiance et confidentialité.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
		<h2 class="text-center top-space">Tarifs de Niavel_Sante</h4>
    <p>Découvrez nos différentes options d'abonnement pour profiter pleinement de Niavel_Sante :</p>
		<ul>
			<li><strong>Abonnement Basique :</strong> Accès aux fonctionnalités essentielles de l'application. Gratuit.</li>
			<li><strong>Abonnement Premium :</strong> Accès complet à toutes les fonctionnalités avancées, y compris la sauvegarde automatique des données et le support prioritaire. montant/mois.</li>
			<li><strong>Abonnement Famille :</strong> Pour partager l'accès à Niavel_Sante avec jusqu'à cinq membres de votre famille. montant/mois.</li>
		</ul>
			<p>Choisissez l'abonnement qui correspond le mieux à vos besoins et commencez à prendre le contrôle de votre santé dès aujourd'hui !</p>
			<p>Vous avez des questions sur nos tarifs ou besoin d'assistance pour choisir votre abonnement ? Contactez notre équipe d'assistance pour obtenir de l'aide personnalisée.</p>

    <p class="text-right"><a class="btn btn-primary btn-large" href="{{ route ('contact') }}" >Plus d'informations </a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
    <div class="container">
        <div class="wrapper clearfix">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_linkedin_counter"></a>
            
			</div>
            <!-- AddThis Button END -->
        </div>
    </div>
</section>


	<!-- /social links -->


