<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function switch(Request $request)
    {
        $profilId = $request->input('profil_id');

        if (Auth::check() && $profilId) {
            /** @var User $user */
            $user = Auth::user();

            // Vérifiez si le profil ID appartient bien à l'utilisateur (sécurité)
            if ($user->profils()->where('profil_id', $profilId)->exists()) {
                $user->setProfilActif($profilId);
                return redirect()->route('dashboard')->with('success', 'Profil actif mis à jour.');
            } else {
                return redirect()->route('dashboard')->with('error', 'Profil non autorisé.');
            }
        }

        return redirect()->route('dashboard')->with('error', 'Erreur lors du changement de profil.');
    }
}