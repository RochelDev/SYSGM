<?php

namespace App\Http\Controllers;

use Log;
use Throwable;
use App\Models\Dossier;
use App\Models\Structure;

use Illuminate\Http\Request;
use App\Models\DossierTransfert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrdonnateurTraitementController extends Controller
{

    public function index(){
        // Récupérer l'ID de l'utilisateur connecté
        $userId = Auth::id();

        // Récupérer les dossiers où l'utilisateur connecté est impliqué dans une étape avec le statut 'en cours'
        $dossiers = Dossier::whereHas('etapes', function ($query) use ($userId) {
        $query->where('suivi_dossiers.user_id', $userId)
              ->where('suivi_dossiers.statut', 'en cours');
        })->get();

        ///dd($dossiers);

        // Vous pouvez également vouloir afficher les dossiers qui sont actuellement à une étape nécessitant l'action de cet utilisateur,
        // même si le statut de la pivot n'est pas explicitement 'en cours' (par exemple, 'en attente' pour l'étape actuelle).
        // Cela dépend de votre logique de workflow.

        // Exemple pour récupérer les dossiers à l'étape actuelle pour l'utilisateur (nécessite de définir ce qu'est "l'étape actuelle")
        // $dossiersATraiter = Dossier::whereHas('etapes', function ($query) use ($userId) {
        //     $query->where('etape_id', /* ID de l'étape actuelle pour l'ordonnateur */)
        //           ->wherePivot('statut', 'en attente') // ou un autre statut pertinent
        //           ->where('user_id', $userId);
        // })->get();

        return view('traitement.ordonnateur.traiter', compact('dossiers'));

    }


    public function traiter(Dossier $dossier)
    {
        $etapeActuelle = $dossier->etapes()->orderByPivot('created_at', 'desc')->first();


        try {

            if ($etapeActuelle && $etapeActuelle->pivot->etape_id == 4 && $dossier->typeMobilite->code_type == 'DSP') {
                // Récupérer la structure cible
                $structureCible = Structure::where('code_structure', $dossier->structure_cible)->first();

                if ($structureCible && Auth::user()->structure_id == $structureCible->id) {
                    //$dossier->update(['statut' => 'en cours']);
                    $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'en cours', 'user_id' => auth()->id()]);
                    DB::commit();
                    return back()->with('success', 'Le dossier a été ajouté à votre liste de traitement.');
                } else {
                    return back()->with('error', 'Vous n\'êtes pas autorisé à traiter ce dossier à cette étape.');
                }
            } else {
                $dossier->update(['statut' => 'en cours']);
                if ($etapeActuelle->id == 1) {
                    $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'terminé', 'user_id' => auth()->id()]);
                }
                
                $dossier->etapes()->attach(2, ['user_id' => auth()->id(), 'statut' => 'en cours']); // Si ce n'est pas l'étape 4
                DB::commit();
                return back()->with('success', 'Le dossier a été ajouté à votre liste de traitement.');
            }

        } catch (Throwable $e) {
            DB::rollBack();
            // Gérer l'erreur ici, par exemple, logger l'erreur
            Log::error("Erreur lors de l'ajout du dossier à la liste de traitement " . $dossier->id . ": " . $e->getMessage());
            return back()->with('error', 'Une erreur s\'est produite lors de l\'ajout à votre liste de traitement. Veuillez réessayer.');
        }

    }

    public function valider(Dossier $dossier)
    {
        $etapeActuelle = $dossier->etapes()->orderByPivot('created_at', 'desc')->first();

        // Récupérer la structure DRSC. Vous devrez remplacer 'CODE_DRSC' par le code réel de la DRSC.
        $drscStructure = Structure::where('code_structure', 'DRSC')->firstOrFail();

        $user = Auth::user();
        $userStructure = $user->structure;
        $userStructureCode = $userStructure ? $userStructure->code_structure : null;

        try {

                if ($etapeActuelle && $user->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
                    $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'validé', 'user_id' => auth()->id()]);

                    //Avant envoyer

                   // // if ($etapeActuelle->id == 4) {
                   // //    $etapeSuivanteId = 5; // Passer à l'étape 5
                   // // }

                    // $etapeSuivanteId = $etapeActuelle->id + 1;
                    
                    // $dossier->etapes()->attach($etapeSuivanteId, ['user_id' => auth()->id(), 'statut' => 'en attente']);

                    //envoyer à la DRSC
                    // $dossier->update([
                    //     'destinataire' => $drscStructure->code_structure,
                    //     'envoyeur' => $userStructureCode,
                    // ]);

                    // DossierTransfert::create([
                    //     'dossier_id' => $dossier->id,
                    //     'envoyeur_structure_id' => auth()->user()->structure_id,
                    //     'destinataire_structure_id' => $drscStructure->id,
                    //     'motif' => 'Envoi du dossier à la DRSC',
                    // ]);

                    DB::commit();
                    return back()->with('success', 'Le dossier a été validé.');
                } else {
                    return back()->with('error', 'Vous n\'êtes pas autorisé à valider ce dossier à cette étape.');
                }
            
        } catch (Throwable $e) {
            DB::rollBack();
            // Gérer l'erreur ici, par exemple, logger l'erreur
            Log::error("Erreur lors de la validation du dossier " . $dossier->id . ": " . $e->getMessage());
            return back()->with('error', 'Une erreur s\'est produite lors de la validation du dossier. Veuillez réessayer.');
        }

    }

    public function soumettre(Dossier $dossier)
    {
        // $user = Auth::user();
        // $userStructureId = $user->structure_id;
        // $userStructure = $user->structure; // Récupérer l'objet Structure de l'utilisateur
        // $userStructureCode = $userStructure ? $userStructure->code_structure : null;

        $etapeActuelle = $dossier->etapes()->orderByPivot('created_at', 'desc')->first();

        $dossierStructureId=$dossier->structure_id;
        $dossierStructureCode=$dossier->structure->code_structure;
        $drscStructure = Structure::where('code_structure', 'DRSC')->firstOrFail();

        //dd($drscStructure);

        $etapeSuivanteId = $etapeActuelle->id + 1;

        //dd($etapeSuivanteId);

        $dossier->etapes()->attach($etapeSuivanteId, ['user_id' => auth()->id(), 'statut' => 'en attente']);

        $dossier->update([
            'destinataire' => $drscStructure->code_structure,
            'envoyeur' => $dossierStructureCode,
        ]);

        // ... autres logiques car DossierTransfert exist ...
        DossierTransfert::create([
            'dossier_id' => $dossier->id,
            'envoyeur_structure_id' => $dossierStructureId, // L'ID de la structure de l'utilisateur actuel
            'destinataire_structure_id' => $drscStructure->id, // L'ID de la structure destinataire
            'motif' => 'Envoi du dossier à la structure ' . $drscStructure->nom_structure, // Ou un motif plus spécifique
        ]);


        //Avant envoyer

                   // // if ($etapeActuelle->id == 4) {
                   // //    $etapeSuivanteId = 5; // Passer à l'étape 5
                   // // }

                    // $etapeSuivanteId = $etapeActuelle->id + 1;
                    
                    // $dossier->etapes()->attach($etapeSuivanteId, ['user_id' => auth()->id(), 'statut' => 'en attente']);

                    //envoyer à la DRSC
                    // $dossier->update([
                    //     'destinataire' => $drscStructure->code_structure,
                    //     'envoyeur' => $userStructureCode,
                    // ]);

                    // DossierTransfert::create([
                    //     'dossier_id' => $dossier->id,
                    //     'envoyeur_structure_id' => auth()->user()->structure_id,
                    //     'destinataire_structure_id' => $drscStructure->id,
                    //     'motif' => 'Envoi du dossier à la DRSC',
                    // ]);

        return back()->with('success', 'Le dossier a été envoyé à la ' . $drscStructure->code_structure . '.');
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




    public function ajouterFichiers(Request $request, Dossier $dossier)
    {
        $request->validate([
            'documents.*' => 'required|file|max:10240|mimes:pdf,jpeg,png,jpg,doc,docx',
        ]);

        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $document) {
                $nomFichier = time() . '_' . $document->getClientOriginalName();
                $chemin = $document->storeAs('dossiers/' . $dossier->code_dossier, $nomFichier);

                $dossier->piecesJustificatives()->create([
                    'nom_du_fichier' => $nomFichier,
                    'lien' => $chemin,
                    'titre' => $document->getClientOriginalName(),
                    // 'type_piece_id' => $request->input('type_piece')[$key] ?? null, // Si tu as un moyen de spécifier le type
                ]);
            }
            return back()->with('success', 'Fichier(s) ajouté(s) au dossier.');
        }else {
            // Si aucun fichier n'a été sélectionné
            return back()->with('info', 'Aucun fichier n\'a été sélectionné.');
        }

    }

    public function formulaireAjouterFichiers(Dossier $dossier)
    {
        return view('pages.dossiers.ajouter_fichiers', compact('dossier'));
    }
}
