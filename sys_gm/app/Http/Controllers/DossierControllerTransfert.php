<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use App\Models\Structure;
use Illuminate\Http\Request;
use App\Models\DossierTransfert;

class DossierControllerTransfert extends Controller
{
    public function envoyerADestinataire(Dossier $dossier, Structure $structure)
    {
        $dossier->update(['destinataire' => $structure->code_structure]);

        // ... autres logiques car DossierTransfert exist ...
        DossierTransfert::create([
            'dossier_id' => $dossier->id,
            'envoyeur_structure_id' => auth()->user()->structure_id, // L'ID de la structure de l'utilisateur actuel
            'destinataire_structure_id' => $structure->id, // L'ID de la structure destinataire
            'motif' => 'Envoi du dossier à la structure ' . $structure->nom_structure, // Ou un motif plus spécifique
        ]);

        return back()->with('success', 'Le dossier a été envoyé à la structure avec le code ' . $structure->code . '.');
    }
}
