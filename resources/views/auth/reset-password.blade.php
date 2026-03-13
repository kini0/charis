@extends('layouts.auth')

@section('title', 'Réinitialiser le mot de passe')
@section('page-title', 'Nouveau mot de passe')
@section('subtitle', 'Choisissez un mot de passe sécurisé')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Écran verrouillé</h5>
                        <p class="text-muted">Entrez votre mot de passe pour déverrouiller l'écran !</p>
                    </div>
                    <div class="user-thumb text-center">
                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="rounded-circle img-thumbnail avatar-lg"
                            alt="thumbnail">
                        <h5 class="font-size-15 mt-3">Anna Adame</h5>
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Mot de passe</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Entrez le mot de passe"
                                    required>
                            </div>
                            <div class="mb-2 mt-4">
                                <button class="btn btn-success w-100" type="submit">Déverrouiller</button>
                            </div>
                        </form><!-- end form -->

                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="mt-4 text-center">
                <p class="mb-0">Ce n'est pas vous ? <a href="auth-signin-basic.html"
                        class="fw-semibold text-primary text-decoration-underline"> Se connecter </a> </p>
            </div>

        </div>
    </div>
@endsection
