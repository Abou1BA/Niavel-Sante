@extends('layouts.app_admin')

@section('content')

<div class="container-fluid px-4" style="margin-top: 10px;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord du Medecin</div>

                <div class="card-body">
                    <p><strong>Nom:</strong> {{ $user->nom }}</p>
                    <p><strong>Prénom:</strong> {{ $user->prenom }}</p>
                    <p><strong>Date de Naissance:</strong> {{ $user->date_naissance }}</p>
                    <p><strong>Numéro de Téléphone:</strong> {{ $user->num_tel }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Numéro d'identification:</strong> {{ $medecin->numero_identification }}</p>
                    <p><strong>specialite:</strong> {{ $medecin->specialite }}</p>
                    <p><strong>informations_etablissement:</strong> {{ $medecin->informations_etablissement }}</p>
                    <p><strong>Horaire:</strong> {{ $medecin->horaires }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
