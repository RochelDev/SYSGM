<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DossierController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userStructureId = $user->structure_id;
        $userStructure = $user->structure; // Récupérer l'objet Structure de l'utilisateur
        $userStructureCode = $userStructure ? $userStructure->code_structure : null;

        $dossiers = Dossier::where('structure_id', $userStructureId)
                        ->orWhere('destinataire', $userStructureCode)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);

        return view('pages.dossiers.index', compact('dossiers'));
    }

    public function dossierEnvoyes(){
        $userStructureCode = Auth::user()->structure->code_structure;

        $dossiersEnvoyes = Dossier::where('envoyeur', $userStructureCode)
                                ->orderBy('created_at', 'desc')
                                ->paginate(5, ['*'], 'envoyes');

        return view('pages.dossiers.index', compact('dossiers'));

    }

    public function dossierRecus(){
        $userStructureCode = Auth::user()->structure->code_structure;

        $dossiers = Dossier::where('destinataire', $userStructureCode)
                                ->orderBy('created_at', 'desc')
                                ->paginate(5, ['*'], 'recus');

        return view('pages.dossiers.index', compact('dossiers'));

    }




    public function upload(UploadPieceJustificativeRequest $request, Dossier $dossier)
    {
        if ($request->hasFile('fichier')) {
            $fichier = $request->file('fichier');
            $nomFichier = time() . '_' . $fichier->getClientOriginalName();
            $chemin = $fichier->storeAs('pieces_justificatives/' . $dossier->code_dossier, $nomFichier);

            $dossier->piecesJustificatives()->create([
                'titre' => $request->input('titre') ?? $fichier->getClientOriginalName(),
                'nom_du_fichier' => $nomFichier,
                'lien' => $chemin,
                // Tu peux ajouter d'autres informations comme le type de pièce, la date, etc.
                'type_piece_id' => $request->input('type_piece_id'),
            ]);

            return back()->with('success', 'Fichier uploadé avec succès.');
        }

        return back()->with('error', 'Aucun fichier n\'a été sélectionné.');
    }

    public function download(PieceJustificative $piece): StreamedResponse
    {
        $path = Storage::path($piece->lien);

        if (Storage::exists($piece->lien)) {
            return Storage::download($piece->lien, $piece->nom_du_fichier);
        } else {
            return abort(404, 'Fichier non trouvé.');
        }
    }


    public function destroyPiece(PieceJustificative $piece)
    {
        if (Storage::exists($piece->lien)) {
            Storage::delete($piece->lien);
        }
        $piece->delete();
        return back()->with('success', 'Fichier supprimé avec succès.');
    }
}
