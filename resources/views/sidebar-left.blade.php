
@extends('layouts.app')

@section('content')

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="{{ route ('index') }}">Accueil</a></li>
			<li class="active">Inscription</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inscription Hopital</h1>
				</header>
				@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif	
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Créer un nouveau compte</h3>
							<p class="text-center text-muted">Si l'hopital a dèja un compte,   <a href="{{ route ('signup') }}"> **Connecter**</a> directement à ce compte" </p>
							<hr>

							<form action="{{ route('post_inscription_hopital') }}" method="post">
							@csrf
							<div class="top-margin">
                                    <label>Nom_Gerant </label>
                                    <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" required>
									@error('nom')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
                                </div>
                                <div class="top-margin">
                                    <label>Prénom_Gerant</label>
                                    <input type="text" name="prenom" class="form-control" value="{{ old('prenom') }}" required>
									@error('prenom')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Date de Naissance du Gerant</label>
									<input type="date" class="form-control" name="date_naissance" value="{{ old('date_naissance') }}">
									@error('date_naissance')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Lieu de naissance du Gerant <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="lieu_naissance" value="{{ old('lieu_naissance') }}">
									@error('lieu_naissance')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Numéro de Téléphone du Gerant <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="num_tel" value="{{ old('num_tel') }}">
									@error('num_tel')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Email du Gerant</label>
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
									@error('email')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Nom de l'hopital</label>
									<input type="text" name="nom_hopital" class="form-control">
									@error('nom_hopital')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Adresse</label>
									<input type="text" name="adresse_hopital" class="form-control">
									@error('adresse_hopital')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Numéro de Téléphone <span class="text-danger">*</span></label>
									<input type="text" name="num_tel_hopital" class="form-control">
									@error('num_tel_hopital')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Informations sur le représentant légal de l'hôpital.</label>
									<input type="text" name="infos" class="form-control">
									@error('infos')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Numéro d'identification fiscal.</label>
									<input type="text" name="num_identi" class="form-control">
									@error('num_identi')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Informations sur les services médicaux offerts par l'hôpital.</label>
									<input type="text" name="services_medicaux" class="form-control">
									@error('services_medicaux')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Informations sur les professionnels de santé associés à l'hôpital</label>
									<input type="text" name="infos_professionnel" class="form-control">
									@error('infos_professionnel')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div>
								<label for="type">Type d'hopital :</label>
									<select id="type" name="type_hopi">
									<option value="type1">Public</option>
									<option value="type2">Privé</option>
									@error('type_hopi')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
									</select>
								</div>
								<div class="row top-margin">
								<div class="row top-margin">
								<div class="row top-margin">
    <div class="col-sm-6">
        <label for="password">Mot de passe <span class="text-danger">*</span></label>
        <input type="password" id="password" name="password" class="form-control" required>
		@error('password')
			<div class="invalid-feedback">{{ $message }}</div>
		@enderror
    </div>
    <div class="col-sm-6">
        <label for="confirm_password">Confirmer le mot de passe <span class="text-danger">*</span></label>
        <input type="password" id="confirm_password" name="password_confirmation" class="form-control" required>
        <div id="password_error" class="text-danger" style="display: none;">Les mots de passe ne correspondent pas.</div>
    </div>
</div>




								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											J'accepte les <a href="page_terms.html">Termes et Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right"><p class="text-right"><button type="submit" class="btn btn-primary btn-large" >Créer </button></p>
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
	
@endsection