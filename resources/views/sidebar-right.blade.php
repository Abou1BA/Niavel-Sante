
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
					<h1 class="page-title">Inscription Patient</h1>
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
							<p class="text-center text-muted">Si vous dèja un compte,   <a href="{{ route ('signup') }}"> **Connecter**</a> directement à votre compte" </p>
						
							<form action="{{ route('post_inscription_patient') }}" method="post">
							@csrf
                                <div class="top-margin">
                                    <label>Nom </label>
                                    <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" required>
									@error('nom')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
                                </div>
                                <div class="top-margin">
                                    <label>Prénom</label>
                                    <input type="text" name="prenom" class="form-control" value="{{ old('prenom') }}" required>
									@error('prenom')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>


								<div class="top-margin">
									<label>Date de Naissance</label>
									<input type="date" class="form-control" name="date_naissance" value="{{ old('date_naissance') }}">
									@error('date_naissance')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Lieu de naissance <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="lieu_naissance" value="{{ old('lieu_naissance') }}">
									@error('lieu_naissance')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Numéro de Téléphone <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="num_tel" value="{{ old('num_tel') }}">
									@error('num_tel')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Email</label>
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
									@error('email')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Numéro de Sécurité Sociale</label>
									<input type="text" class="form-control" name="num_securite_sociale" value="{{ old('num_securite_sociale') }}">
									@error('num_securite_sociale')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Informations sur le médecin traitant</label>
									<input type="text" class="form-control" name="informations_medecin" value="{{ old('informations_medecin') }}">
									@error('informations_medecin')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Antécédents médicaux </label>
									<input type="text" class="form-control" name="antecedents_medicaux" value="{{ old('antecedents_medicaux') }}">
									@error('antecedents_medicaux')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								
	
								<div class="row top-margin">
									<div class="col-sm-6">
										<label for="password">Mot de passe <span class="text-danger">*</span></label>
										<input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" required>
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