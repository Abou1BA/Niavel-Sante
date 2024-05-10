
@extends('layouts.app')

@section('content')


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="{{ route ('index')  }}">Accueil</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contacter nous</h1>
				</header>
				
				<p>
				Contacter Niavel_Sante est très bénéfique. Il vous permettra d'obtenir une assistance technique, des réponses à vos questions, partager vos commentaires et suggestions, ou pour aborder des préoccupations concernant la confidentialité et la sécurité de vos données médicales.
				</p>
				<br>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Nom && Prénom">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="email" placeholder="Email">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Telephone">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Saisissez votre message..." class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label class="checkbox"><input type="checkbox"> Abonnez-vous au bulletin d'information</label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Envoyer">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						Ouakam, Cité Avion 
					</address>
					<h4>Téléphone:</h4>
					<address>
						(221) 77 428 63 39
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<!-- <section class="container-full top-space">
		<div id="map"></div>
	</section> -->

	
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.8826407934853!2d-17.456876964095887!3d14.71922648584047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172c8406ae37d%3A0xdd1295a49c8fa450!2sPG9W%2BP76%2C%20Rue%20DD%20132%2C%20Dakar!5e0!3m2!1sfr!2ssn!4v1711115198736!5m2!1sfr!2ssn" width="1400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


@endsection 