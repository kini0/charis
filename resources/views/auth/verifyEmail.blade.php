@extends('layouts.auth')

@section('title', 'Vérification email')
@section('page-title', 'Vérifiez votre email')
@section('subtitle', 'Un lien de vérification vous a été envoyé')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">
                <div class="card-body p-4 text-center">
                    <div class="avatar-lg mx-auto mt-2">
                        <div class="avatar-title bg-light text-success display-3 rounded-circle">
                            <i class="ri-checkbox-circle-fill"></i>
                        </div>
                    </div>
                    <div class="mt-4 pt-2">
                        <h4>Bien fait !</h4>
                        <p class="text-muted mx-4">Bravo, vous avez réussi à lire ce message important.</p>
                        <p class="text-muted mx-4 mt-3"><strong>Un email de validation a été envoyé à votre adresse.</strong> Veuillez vérifier votre boîte de réception et cliquer sur le lien de vérification pour activer votre compte.</p>
                        <div class="mt-4">
                            <a href="{{ route('connexion') }}" class="btn btn-success w-100">Retour à l'accueil</a>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

        </div>
    </div>
@endsection
