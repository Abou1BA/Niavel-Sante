
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
					<h1 class="page-title">Inscription Medecin</h1>
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
							<hr>
							<form action="{{ route('post_inscription_medecin') }}" method="post">
							@csrf
							<div class="top-margin">
									<label>nom</label>
									<input type="text" name="nom" class="form-control">
									@error('nom')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>prenom</label>
									<input type="text" name="prenom" class="form-control">
									@error('prenom')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>date_naissance</label>
									<input type="date" name="date_naissance" class="form-control">
									@error('date_naissance')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>lieu_naissance</label>
									<input type="text" name="lieu_naissance" class="form-control">
									@error('lieu_naissance')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>numero telephone</label>
									<input type="text" name="num_tel"  class="form-control">
									@error('num_tel')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
									@error('email')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Numéro d'identification Médicale</label>
									<input type="text" name="numero_identification" class="form-control" min=0>
									@error('numero_identification')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Spécialité Médicale</label>
									<input type="text" name="specialite" class="form-control">
									@error('specialite')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Nom et Adresse de votre Etablissement </label>
									<input type="text" name="informations_etablissement" class="form-control">
									@error('informations_etablissement')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
								<div class="top-margin">
									<label>Heure de Consultation </label>
									<input type="time" name="horaires" class="form-control">
									@error('horaires')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
	
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