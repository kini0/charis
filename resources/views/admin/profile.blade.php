@extends('layouts.app.admin')

@section('title', 'Tableau de bord')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg profile-setting-img">
                    <img src="{{ asset('assets/images/profile-bg.jpg') }}" class="profile-wid-img" alt="" />
                    <div class="overlay-content">
                        <div class="text-end p-3">
                            <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                <input id="profile-foreground-img-file-input" type="file"
                                    class="profile-foreground-img-file-input" />
                                {{-- <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                    <i class="ri-image-edit-line align-bottom me-1"></i>
                                    Change Cover
                                </label> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.profileUpdate') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card mt-n5">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                            class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                            alt="user-profile-image" />
                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                            <input id="profile-img-file-input" type="file"
                                                class="profile-img-file-input" />
                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                    <i class="ri-camera-fill"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <h5 class="fs-16 mb-1">{{ Auth::user()->name }}</h5>
                                    <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                    <div class="col-xxl-9">
                        <div class="card mt-xxl-n5">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails"
                                            role="tab">
                                            <i class="fas fa-home"></i> Informations personnelles
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                            <i class="far fa-user"></i> Historique de connexion
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                                            <i class="far fa-envelope"></i> politique de confidentialité
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-4">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                       
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Nom complet</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="firstnameInput" placeholder="Enter your firstname"
                                                            value="Dave" />
                                                    </div>
                                                </div>

                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Adresse Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            id="emailInput" placeholder="Enter your email"
                                                            value="daveadame@velzon.com" />
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="oldpasswordInput" class="form-label">Password*</label>
                                                        <input type="password" name="password" class="form-control"
                                                            id="oldpasswordInput"
                                                            placeholder="Veuillez entrer votre mot de passe ou laisser vide" />
                                                    </div>
                                                </div>
                                                <!--end col-->


                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="submit" class="btn btn-primary">
                                                            Enregistrer les modifications
                                                        </button>

                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                       
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="changePassword" role="tabpanel">

                                        <div class="mt-4 mb-3 border-bottom pb-2">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="link-primary">All Logout</a>
                                            </div>
                                            <h5 class="card-title">Login History</h5>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-smartphone-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>iPhone 12 Pro</h6>
                                                <p class="text-muted mb-0">
                                                    Los Angeles, United States - March 16 at 2:47PM
                                                </p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-tablet-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Apple iPad Pro</h6>
                                                <p class="text-muted mb-0">
                                                    Washington, United States - November 06 at 10:43AM
                                                </p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-smartphone-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Galaxy S21 Ultra 5G</h6>
                                                <p class="text-muted mb-0">
                                                    Conneticut, United States - June 12 at 3:24PM
                                                </p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-macbook-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Dell Inspiron 14</h6>
                                                <p class="text-muted mb-0">
                                                    Phoenix, United States - July 26 at 8:10AM
                                                </p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="privacy" role="tabpanel">
                                        <div class="mb-4 pb-2">
                                            <h5 class="card-title text-decoration-underline mb-3">
                                                Security:
                                            </h5>
                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-14 mb-1">
                                                        Two-factor Authentication
                                                    </h6>
                                                    <p class="text-muted">
                                                        Two-factor authentication is an enhanced
                                                        security meansur. Once enabled, you'll be
                                                        required to give two types of identification
                                                        when you log into Google Authentication and SMS
                                                        are Supported.
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable
                                                        Two-facor
                                                        Authentication</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-14 mb-1">Secondary Verification</h6>
                                                    <p class="text-muted">
                                                        The first factor is a password and the second
                                                        commonly includes a text with a code sent to
                                                        your smartphone, or biometrics using your
                                                        fingerprint, face, or retina.
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set up
                                                        secondary method</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-14 mb-1">Backup Codes</h6>
                                                    <p class="text-muted mb-sm-0">
                                                        A backup code is automatically generated for you
                                                        when you turn on two-factor authentication
                                                        through your iOS or Android Twitter app. You can
                                                        also generate a backup code on twitter.com.
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate
                                                        backup codes</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="card-title text-decoration-underline mb-3">
                                                Application Notifications:
                                            </h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <label for="directMessage" class="form-check-label fs-14">Direct
                                                            messages</label>
                                                        <p class="text-muted">
                                                            Messages from people you follow
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="directMessage" checked />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="desktopNotification">
                                                            Show desktop notifications
                                                        </label>
                                                        <p class="text-muted">
                                                            Choose the option you want as your default
                                                            setting. Block a site: Next to "Not allowed to
                                                            send notifications," click Add.
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="desktopNotification" checked />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="emailNotification">
                                                            Show email notifications
                                                        </label>
                                                        <p class="text-muted">
                                                            Under Settings, choose Notifications. Under
                                                            Select an account, choose the account to
                                                            enable notifications for.
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="emailNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="chatNotification">
                                                            Show chat notifications
                                                        </label>
                                                        <p class="text-muted">
                                                            To prevent duplicate mobile notifications from
                                                            the Gmail and Chat apps, in settings, turn off
                                                            Chat notifications.
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="chatNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="purchaesNotification">
                                                            Show purchase notifications
                                                        </label>
                                                        <p class="text-muted">
                                                            Get real-time purchase alerts to protect
                                                            yourself from fraudulent charges.
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="purchaesNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="card-title text-decoration-underline mb-3">
                                                Delete This Account:
                                            </h5>
                                            <p class="text-muted">
                                                Go to the Data & Privacy section of your profile
                                                Account. Scroll to "Your data & privacy options."
                                                Delete your Profile Account. Follow the instructions
                                                to delete your account :
                                            </p>
                                            <div>
                                                <input type="password" class="form-control" id="passwordInput"
                                                    placeholder="Enter your password" value="make@321654987"
                                                    style="max-width: 265px" />
                                            </div>
                                            <div class="hstack gap-2 mt-3">
                                                <a href="javascript:void(0);" class="btn btn-soft-danger">Close & Delete
                                                    This
                                                    Account</a>
                                                <a href="javascript:void(0);" class="btn btn-light">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </form>
            <!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
