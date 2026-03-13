<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EmailVerificationController extends Controller
{
    /**
     * Affiche l'écran de vérification en attente.
     */
    public function notice(): View|RedirectResponse
    {
        // Si déjà vérifié, on redirige directement
        if (request()->user()->hasVerifiedEmail()) {
            return redirect()->route('dashboard');
        }

        return view('auth.verify-email');
    }

    /**
     * Traite le clic sur le lien de vérification reçu par email.
     */
    public function verify(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('dashboard')->with(
                'status',
                'Votre adresse email est déjà vérifiée.'
            );
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->route('dashboard')->with(
            'status',
            'Votre adresse email a été vérifiée avec succès !'
        );
    }

    /**
     * Renvoie l'email de vérification.
     */
    public function resend(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('dashboard');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with(
            'status',
            'Un nouvel email de vérification a été envoyé à votre adresse.'
        );
    }
}