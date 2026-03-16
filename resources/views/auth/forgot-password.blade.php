@extends('layouts.app.auth')

@section('title', 'Mot de passe oublié')
@section('page-title', 'Mot de passe oublié ?')
@section('subtitle', 'Saisissez votre email pour réinitialiser')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Mot de passe oublié?</h5>
                        <p class="text-muted">Saisissez votre email pour réinitialiser votre mot de passe</p>

                        <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c"
                            class="avatar-xl"></lord-icon>

                    </div>

                    <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                        Entrez l'adresse email associée à votre compte.<br>
                        Nous vous enverrons un lien de réinitialisation.
                    </div>
                    <div class="p-2">
                        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-success w-100" type="submit">Envoyer le lien</button>
                            </div>
                        </form><!-- end form -->
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="mt-4 text-center">
                <p class="mb-0">Attendez, je me souviens de mon mot de passe... <a href="auth-signin-basic.html"
                        class="fw-semibold text-primary text-decoration-underline"> Cliquez ici </a> </p>
            </div>

        </div>
    </div>
@endsection
