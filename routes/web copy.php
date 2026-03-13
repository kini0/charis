<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('connexion')->name('login');
    Route::post('/connexion', 'login')->name('login.attempt');

    // ── Inscription ────────────────────────────────────────────────────
    Route::get('/inscription', 'inscription')->name('register');
 
    Route::post('/inscription','register')->name('register.store');
 
    // ── Mot de passe oublié ────────────────────────────────────────────
    Route::get('/mot-de-passe-oublie', 'showLinkRequestForm')->name('password.request');
 
    Route::post('/mot-de-passe-oublie','sendResetLinkEmail')->name('password.email');
 
    // ── Réinitialisation du mot de passe ───────────────────────────────
    Route::get('/reinitialiser-mot-de-passe/{token}', 'showResetForm')->name('password.reset');
 
    Route::post('/reinitialiser-mot-de-passe','reset')->name('password.store');

    Route::get('deconnexion', 'logout')->name('logout');
});




Route::middleware('guest')->group(function () {
 
    // ── Connexion ──────────────────────────────────────────────────────
    Route::get('/connexion', [LoginController::class, 'showLoginForm'])
        ->name('login');
 
    Route::post('/connexion', [LoginController::class, 'login'])
        ->name('login.attempt');
 
    // ── Inscription ────────────────────────────────────────────────────
    Route::get('/inscription', [RegisterController::class, 'showRegistrationForm'])
        ->name('register');
 
    Route::post('/inscription', [RegisterController::class, 'register'])
        ->name('register.store');
 
    // ── Mot de passe oublié ────────────────────────────────────────────
    Route::get('/mot-de-passe-oublie', [ForgotPasswordController::class, 'showLinkRequestForm'])
        ->name('password.request');
 
    Route::post('/mot-de-passe-oublie', [ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.email');
 
    // ── Réinitialisation du mot de passe ───────────────────────────────
    Route::get('/reinitialiser-mot-de-passe/{token}', [ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset');
 
    Route::post('/reinitialiser-mot-de-passe', [ResetPasswordController::class, 'reset'])
        ->name('password.store');
});