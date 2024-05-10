@extends('layouts.app_admin')

@section('content')

<div class="container-fluid px-4" style="margin-top: 10px;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord du Hopital</div>

                <div class="card-body">
                    <p><strong>Nom de l'hopital:</strong> {{ $user->nom_hopital }}</p>
                    <p><strong>Adresse:</strong> {{ $user->adresse_hopital }}</p>
                    <p><strong>Numéro de Téléphone:</strong> {{ $user->num_tel_hopital }}</p>
                    <p><strong>Email hopital:</strong> {{ $user->email_hopital }}</p>
                    <p><strong>Informations sur le représentant légal de l'hôpital:</strong> {{ $hopital->infos }}</p>
                    <p><strong>Numéro d'identification fiscal:</strong> {{ $hopital->num_identi }}</p>
                    <p><strong>Informations sur les services médicaux offerts par l'hôpital :</strong> {{ $hopital->services_medicaux }}</p>
                    <p><strong>Informations sur les professionnels de santé associés à l'hôpital:</strong> {{ $hopital->infos_professionnel }}</p>
                    <p><strong>Type:</strong> {{ $hopital->type_hopi }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
