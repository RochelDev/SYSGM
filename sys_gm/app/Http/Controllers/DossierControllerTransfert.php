<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use App\Models\Structure;
use Illuminate\Http\Request;
use App\Models\DossierTransfert;
use Illuminate\Support\Facades\Auth;

class DossierControllerTransfert extends Controller
{
    public function index(){
        $userStructureId = Auth::user()->structure_id;

        $dossiers = DossierTransfert::where('envoyeur_structure_id', $userStructureId)
                                ->orwhere('destinataire_structure_id', $userStructureId)
                                ->orderBy('created_at', 'desc')
                                ->paginate(5);

        return view('pages.historiquetransfert.index', compact('dossiers'));

    }

    public function envoyerADestinataire(Dossier $dossier, Structure $structure)
    {
        $user = Auth::user();
        $userStructureId = $user->structure_id;
        $userStructure = $user->structure; // Récupérer l'objet Structure de l'utilisateur
        $userStructureCode = $userStructure ? $userStructure->code_structure : null;

        $dossier->update([
            'destinataire' => $structure->code_structure,
            'envoyeur' => $userStructureCode,
        ]);

        // ... autres logiques car DossierTransfert exist ...
        DossierTransfert::create([
            'dossier_id' => $dossier->id,
            'envoyeur_structure_id' => auth()->user()->structure_id, // L'ID de la structure de l'utilisateur actuel
            'destinataire_structure_id' => $structure->id, // L'ID de la structure destinataire
            'motif' => 'Envoi du dossier à la structure ' . $structure->nom_structure, // Ou un motif plus spécifique
        ]);

        return back()->with('success', 'Le dossier a été envoyé à la ' . $structure->code_structure . '.');
    }
}
