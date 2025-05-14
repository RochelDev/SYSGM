<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;

class DossierControllertraitement extends Controller
{
    public function traiterOrdonnateur(Dossier $dossier)
    {
        $dossier->update(['statut' => 'en cours']);
        $dossier->etapes()->attach(2, ['user_id' => auth()->id(), 'statut' => 'en cours']);

        return back()->with('success', 'Le dossier a été ajouté à votre liste de traitement.');
    }

    public function validerOrdonnateur(Dossier $dossier)
    {
        // Mettre à jour le statut de l'étape 2
        $dossier->etapes()->wherePivot('etape_id', 2)->updateExistingPivot(2, ['statut' => 'validé']);

        // Passer à l'étape 3
        $dossier->etapes()->attach(3, ['user_id' => auth()->id(), 'statut' => 'en attente']);

        return back()->with('success', 'Le dossier a été validé et envoyé à la Fonction Publique.');
    }


    public function differerDossier(Dossier $dossier)
    {
        // Récupérer la dernière étape active du dossier
        $derniereEtapeActive = $dossier->etapes()->orderByPivot('created_at', 'desc')->wherePivot('statut', '!=', 'différé')->first();

        if ($derniereEtapeActive && $derniereEtapeActive->pivot->etape_id > 1) {
            $etapeActuelleId = $derniereEtapeActive->pivot->etape_id;
            $etapePrecedenteId = $etapeActuelleId - 1;

            // Mettre à jour le statut de l'étape actuelle à "différé"
            $dossier->etapes()->wherePivot('etape_id', $etapeActuelleId)->updateExistingPivot($etapeActuelleId, ['statut' => 'différé']);

            // Réactiver l'étape précédente (si elle existe et n'est pas déjà active)
            $etapePrecedentePivot = $dossier->etapes()->wherePivot('etape_id', $etapePrecedenteId)->first();
            if ($etapePrecedentePivot && $etapePrecedentePivot->pivot->statut == 'différé') {
                $dossier->etapes()->updateExistingPivot($etapePrecedenteId, ['statut' => 'en cours']); // Ou 'à traiter' selon ton besoin
            } else if (!$etapePrecedentePivot) {
                // Si l'étape précédente n'a pas encore d'enregistrement, on le crée
                $dossier->etapes()->attach($etapePrecedenteId, ['user_id' => auth()->id(), 'statut' => 'en cours']); // Ou 'à traiter'
            } else {
                // Si l'étape précédente existe et n'est pas 'différé', on ne change rien à son statut.
            }

            // Mettre à jour le statut général du dossier
            $dossier->update(['statut' => 'en cours']); // Statut général après avoir été différé

            return back()->with('success', 'Le dossier a été renvoyé à l\'étape précédente.');
        } else {
            return back()->with('error', 'Impossible de différer le dossier à cette étape.');
        }
    }



    public function differer_Dossier(Dossier $dossier) //sans mis à jour statut
{
    // Récupérer la dernière étape du dossier
    $derniereEtape = $dossier->etapes()->orderByPivot('created_at', 'desc')->first();

    if ($derniereEtape && $derniereEtape->pivot->etape_id > 1) {
        $etapeActuelleId = $derniereEtape->pivot->etape_id;
        $etapePrecedenteId = $etapeActuelleId - 1;

        // Option 1: Mettre à jour le statut de l'étape actuelle à "différé"
        $dossier->etapes()->wherePivot('etape_id', $etapeActuelleId)->updateExistingPivot($etapeActuelleId, ['statut' => 'différé']);

        // Option 2: Détacher de l'étape actuelle
        // $dossier->etapes()->detach($etapeActuelleId);

        // Rattacher à l'étape précédente avec le statut approprié
        $dossier->etapes()->attach($etapePrecedenteId, ['user_id' => auth()->id(), 'statut' => 'à traiter']);

        // Mettre à jour le statut général du dossier si nécessaire
        $dossier->update(['statut' => 'en cours']); // Ou un autre statut pertinent

        return back()->with('success', 'Le dossier a été renvoyé à l\'étape précédente.');
    } else {
        return back()->with('error', 'Impossible de différer le dossier à cette étape.');
    }
}
}
