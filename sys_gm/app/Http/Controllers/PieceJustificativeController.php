<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadPieceJustificativeRequest;

class PieceJustificativeController extends Controller
{
    
    public function upload(UploadPieceJustificativeRequest $request, Dossier $dossier)
    {
        if ($request->hasFile('fichiers')) {
            $fichiers = $request->file('fichiers');
            $titres = $request->input('titre') ?? [];
            $typePieceIds = $request->input('type_piece_id') ?? [];

            foreach ($fichiers as $index => $fichier) {
                $nomFichier = time() . '_' . $fichier->getClientOriginalName();
                $chemin = $fichier->storeAs('pieces_justificatives/' . $dossier->code_dossier, $nomFichier);

                $dossier->piecesJustificatives()->create([
                    'titre' => isset($titres[$index]) ? $titres[$index] : $fichier->getClientOriginalName(),
                    'nom_du_fichier' => $nomFichier,
                    'lien' => $chemin,
                    'type_piece_id' => isset($typePieceIds[$index]) ? $typePieceIds[$index] : null,
                ]);
            }

            return back()->with('success', 'Fichiers uploadés avec succès.');
        }

        return back()->with('error', 'Aucun fichier n\'a été sélectionné.');
    }

}
