<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('connexion');
    Route::post('/connexion', 'connexion')->name('login');

    Route::get('/deconnexion', 'logout')->name('logout');
});

#Inscription
Route::controller(RegisterController::class)->group(function () {
    Route::get('/inscription', 'index')->name('register');
    Route::post('/inscription', 'register')->name('register.store');

    Route::get('/verification-email', 'verificationNotice')->name('verification.notice');
    // Route::get('/verification-email/{id}/{hash}', 'verifyEmail')->name('verification.verify');
    // Route::post('/verification-email/resend', 'resendVerificationEmail')->name('verification.resend');
});

#Mot de passe oublié
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('/mot-de-passe-oublie', 'showLinkRequestForm')->name('password.request');
    Route::post('/mot-de-passe-oublie', 'sendResetLinkEmail')->name('password.email');
});

#Réinitialisation du mot de passe
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('/reinitialiser-mot-de-passe/{token}', 'showResetForm')->name('password.reset');

    Route::post('/reinitialiser-mot-de-passe', 'reset')
        ->name('password.store');
});

/*
|--------------------------------------------------------------------------
| Routes protégées — Utilisateur connecté
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {

    // ==========================================
    // ADMIN ESPACE
    // ==========================================
    Route::prefix('admin')
        ->name('admin.')
        ->group(function () {

            Route::controller(AdminController::class)->group(function () {
                Route::get('/espace', 'index')->name('espace');

                Route::get('/profile', 'profile')->name('profile');

                Route::post('/profile/update', 'updateProfile')->name('profileUpdate');
            });
        });
});
