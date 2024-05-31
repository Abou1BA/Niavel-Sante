@extends('layouts.app_admin')

@section('content')

<div class="container-fluid px-4" style="margin-top: 10px;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord du contact</div>

                <div class="card-body">
                    <p><strong>Nom:</strong> {{ $contact->userName }}</p>
                    <p><strong>Email:</strong> {{ $contact->userEmail }}</p>
                    <p><strong>Téléphone:</strong> {{ $contact->userPhone }}</p>
                    <p><strong>Message:</strong> {{ $contact->userMessage }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
