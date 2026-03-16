@extends('layouts.app.auth')

@section('title', 'Créer un compte')
@section('page-title', 'Créer un compte')
@section('subtitle', 'Rejoignez la plateforme GEODRONE')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Créer un nouveau compte</h5>
                        <p class="text-muted">Obtenez votre compte velzon gratuit maintenant</p>
                    </div>
                    <div class="p-2 mt-4">
                        <form class="needs-validation" novalidate method="POST" action="{{ route('register.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="useremail" class="form-label">E-mail <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="useremail"
                                    placeholder="Entrez l'adresse e-mail" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer l'e-mail
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom d'utilisateur <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="username" placeholder="Entrez le nom d'utilisateur"
                                    required>
                                <div class="invalid-feedback">
                                    Veuillez entrer le nom d'utilisateur
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password-input">Mot de passe</label>
                                <div class="position-relative auth-pass-inputgroup">
                                    <input type="password" class="form-control pe-5 password-input"
                                        onpaste="return false" placeholder="Entrez le mot de passe" id="password-input"
                                        aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        required>
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                        type="button" id="password-addon"><i
                                            class="ri-eye-fill align-middle"></i></button>
                                    <div class="invalid-feedback">
                                        Veuillez entrer le mot de passe
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-0 fs-12 text-muted fst-italic">En vous inscrivant, vous acceptez les Conditions d'utilisation de Velzon <a
                                        href="#"
                                        class="text-primary text-decoration-underline fst-normal fw-medium"></a></p>
                            </div>

                            <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                <h5 class="fs-13">Le mot de passe doit contenir :</h5>
                                <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 caractères</b></p>
                                <p id="pass-lower" class="invalid fs-12 mb-2">Au moins une lettre <b>minuscule</b> (a-z)</p>
                                <p id="pass-upper" class="invalid fs-12 mb-2">Au moins une lettre <b>majuscule</b> (A-Z)</p>
                                <p id="pass-number" class="invalid fs-12 mb-0">Au moins un <b>chiffre</b> (0-9)</p>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success w-100" type="submit">S'inscrire</button>
                            </div>

                            <div class="mt-4 text-center">
                                <div class="signin-other-title">
                                    <h5 class="fs-13 mb-4 title text-muted">Créer un compte avec</h5>
                                </div>

                                <div>
                                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i
                                            class="ri-facebook-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i
                                            class="ri-google-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i
                                            class="ri-github-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i
                                            class="ri-twitter-fill fs-16"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="mt-4 text-center">
                <p class="mb-0">Vous avez déjà un compte ? <a href="{{ route('connexion') }}"
                        class="fw-semibold text-primary text-decoration-underline"> Se connecter </a> </p>
            </div>

        </div>
    </div>
@endsection
