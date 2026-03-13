<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Affiche le formulaire de demande de réinitialisation.
     */
    public function showLinkRequestForm(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Envoie le lien de réinitialisation par email.
     */
    public function sendResetLinkEmail(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ], [
            'email.required' => "L'adresse email est obligatoire.",
            'email.email'    => "L'adresse email n'est pas valide.",
        ]);

        // On envoie le lien quel que soit le résultat (sécurité : pas de fuite d'info)
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        // En cas d'échec, on renvoie quand même un message générique
        // pour ne pas révéler si l'email existe ou non en base
        return back()->with(
            'status',
            'Si cette adresse est enregistrée, vous recevrez un email sous peu.'
        );
    }
}