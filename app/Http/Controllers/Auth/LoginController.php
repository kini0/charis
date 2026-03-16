<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    # CONNEXION
    public function index()
    {
        return view('auth.login');
    }

    # TRAITEMENT DE LA CONNEXION
    public function connexion(Request $request)
    {
        // dd($request->all());
        try {
            $inputVal = $request->all();

            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))) {
                if (auth()->user()->role == "admin") {
                    return redirect()->route('admin.espace');
                }elseif(auth()->user()->role == "technicien"){
                    return redirect()->route('technicien.espace');
                }elseif(auth()->user()->role == "client"){
                    return redirect()->route('client.espace');
                }else{
                    return redirect()->route('connexion')->with('error', 'Vos accès sont invalides, veuillez réessayer avec les bons identifiants.');
                }
            } else {
                //dd('Infromation invalide, veiller contacter notre service');
                return redirect('/')->with('error', 'Vos accès sont invalides, veuillez réessayer avec les bons identifiants.');
            }

        } catch (\Throwable $th){
            Log::error($th->getMessage());
            return redirect('/')->with('error','Infromation invalide, veiller contacter notre service');
        }
    }
}
