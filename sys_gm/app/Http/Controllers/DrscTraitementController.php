<?php

namespace App\Http\Controllers;

use Log;
use Throwable;

use App\Models\Structure;
use Illuminate\Http\Request;
use App\Models\DossierTransfert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DrscTraitementController extends Controller
{ 
    public function traiter(Dossier $dossier)
    {
        // Récupérer l'étape actuelle (la dernière non terminée)
        $etapeActuelle = $dossier->etapes()->orderByPivot('created_at', 'desc')->wherePivot('statut', '!=', 'validé')->first();

        try {

            if ($etapeActuelle) {
                $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'en cours', 'user_id' => auth()->id()]);
                DB::commit();
                return back()->with('success', 'Le dossier a été ajouté à votre liste de traitement.');
            }
            else{
                return back()->with('error', 'Impossible d\'ajouter ce dossier à la liste de traitement en cours.');
            }

        } catch (Throwable $e) {
            DB::rollBack();
            // Gérer l'erreur ici, par exemple, logger l'erreur
            Log::error("Erreur lors de la validation du dossier " . $dossier->id . ": " . $e->getMessage());
            return back()->with('error', 'Une erreur s\'est produite lors de la validation du dossier. Veuillez réessayer.');
        }

    }

    // public function valider(Dossier $dossier)
    // {
    //     // Récupérer l'étape actuelle (la dernière non terminée)
    //     $etapeActuelle = $dossier->etapes()->orderByPivot('created_at', 'desc')->wherePivot('statut', '!=', 'validé')->first();

    //     if ($etapeActuelle) {
    //         // 1. Valider l'étape courante
    //     $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'validé', 'user_id' => auth()->id()]);

    //     // 2. Déterminer l'étape suivante
    //     $etapeSuivanteId = $etapeActuelle->pivot->etape_id + 1;

    //     // 3. Logique spécifique pour l'agent DRSC
    //     if (auth()->user()->profilActif()->intitule_profil == 'Agent DRSC') {
    //         // Cas pour une mise à disposition (DSP)
    //         if ($dossier->typeMobilite->code_type == 'DSP') {
    //             // Après la validation à l'étape de la DRSC (étape 3)
    //             if ($etapeActuelle->pivot->etape_id == 3) {
    //                 $dossier->etapes()->attach($etapeSuivanteId, ['user_id' => auth()->id(), 'statut' => 'en attente']);
    //                 // Récupérer la structure cible
    //                 $structureCible = Structure::where('code_structure', $dossier->structure_cible)->firstOrFail();

    //                     // Pour envoyer le dossier à la structure cible
    //                     $user = Auth::user();
    //                     $userStructureCode = $user->structure ? $user->structure->code_structure : null;
    //                     $dossier->update([
    //                         'destinataire' => $structureCible->code_structure,
    //                         'envoyeur' => $userStructureCode,
    //                     ]);

    //                     DossierTransfert::create([
    //                         'dossier_id' => $dossier->id,
    //                         'envoyeur_structure_id' => auth()->user()->structure_id,
    //                         'destinataire_structure_id' => $structureCible->id,
    //                         'motif' => 'Envoi du dossier à la '. $structureCible->code_structure ,
    //                     ]);

    //                     return back()->with('success', 'Le dossier a été envoyé à la structure cible.');
    //                 }
    //             }
    //             // Cas pour les autres types de mobilité (ex: détachement)
    //             else {
    //                 // Définir l'étape suivante à 6 si l'étape actuelle est validée et qu'on est après l'étape 3
    //                 if ($etapeActuelle->pivot->etape_id >= 3) {
    //                     if ($etapeSuivanteId == 4 || $etapeSuivanteId == 5) {
    //                         $etapeSuivanteId = 6;
    //                     }
    //                 }
    //             }


    //             if ($etapeSuivanteId == 6) {
    //                 $dossier->update(['statut' => 'Validé']);
    //                 $dossier->suiviDossiers()->create(['etape' => 6, 'statut' => 'terminé', 'user_id' => auth()->id()]);
    //                 return back()->with('success', 'Le dossier a été validé officiellement par la fonction publique.');
    //             }

    //         }
    //     }

    // }

    public function valider(Dossier $dossier)
    {
        $etapeActuelle = $dossier->etapes()->orderByPivot('created_at', 'desc')->first();

        try {
            DB::beginTransaction();

            $user = Auth::user();
            $userStructure = $user->structure;
            $userStructureCode = $userStructure ? $userStructure->code_structure : null;
            $dossierStructureCode=$dossier->structure->code_structure;

            if ($dossier->typeMobilite->code_type == 'DSP') {

                if ($etapeActuelle && $etapeActuelle->pivot->etape_id == 3) {
                    // Récupérer la structure cible
                    //$structureCible = Structure::where('code_structure', $dossier->structure_cible)->first();

                    $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'validé', 'user_id' => auth()->id()]);
                        
                    //Avant envoyer
                        //passer à l'étape 4
                        // // $etapeSuivanteId = 4;
                        // $etapeSuivanteId = $etapeActuelle->id + 1;

                    //Envoyer

                         //$dossier->update([
                             //'destinataire' => $structureCible->code_structure,
                             //'envoyeur' => $userStructureCode,
                         //]);

                        //DossierTransfert::create([
                        //    'dossier_id' => $dossier->id,
                        //    'envoyeur_structure_id' => auth()->user()->structure_id,
                        //    'destinataire_structure_id' => $structureCible->id,
                        //    'motif' => 'Envoi du dossier à la '. $structureCible->code_structure ,
                        //]);

                    // créer pivot et mettre à jour le statut sur en attente
                        // $dossier->etapes()->attach($etapeSuivanteId, ['user_id' => null, 'statut' => 'en attente']);

                        //return back()->with('success', 'Le dossier a été envoyé à la structure cible.');

                    DB::commit();
                    return back()->with('success', 'Le dossier a été validé avec succès.');

                }
                elseif ($etapeActuelle && $etapeActuelle->pivot->etape_id == 5) {
                    // Valider Etape
                    $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'validé', 'user_id' => auth()->id()]);

                    //statut dossier validé
                    $dossier->update(['statut' => 'Validé']);

                        //passer à l'étape 6
                        // // $etapeSuivanteId = 6;
                        // $etapeSuivanteId = $etapeActuelle->id + 1;

                        //Envoyer

                         //$dossier->update([
                             //'destinataire' => $dossierStructureCode,
                             //'envoyeur' => $userStructureCode,
                         //]);

                        //DossierTransfert::create([
                        //    'dossier_id' => $dossier->id,
                        //    'envoyeur_structure_id' => auth()->user()->structure_id,
                        //    'destinataire_structure_id' => $dossier->structure_id,
                        //    'motif' => 'Envoi du dossier à la '. $dossierStructureCode ,
                        //]);

                        // créer pivot et mettre à jour le statut sur terminé
                        // $dossier->etapes()->attach($etapeSuivanteId, ['user_id' => auth()->id(), 'statut' => 'terminé']);
                    DB::commit();
                    return back()->with('success', 'Le dossier a été validé avec succès.');
                } else {
                    DB::rollBack();
                    return back()->with('error', 'Vous n\'êtes pas autorisé à valider ce dossier à cette étape.');
                }

            } else {
                // Logique de validation normale
                $dossier->etapes()->updateExistingPivot($etapeActuelle->id, ['statut' => 'validé', 'user_id' => auth()->id()]);

                $dossier->update(['statut' => 'Validé']);

                //passer à l'étape 6
                        // // $etapeSuivanteId = 6;
                        // $etapeSuivanteId = $etapeActuelle->id + 1;


                //Envoyer

                         //$dossier->update([
                             //'destinataire' => $dossierStructureCode,
                             //'envoyeur' => $userStructureCode,
                         //]);

                        //DossierTransfert::create([
                        //    'dossier_id' => $dossier->id,
                        //    'envoyeur_structure_id' => auth()->user()->structure_id,
                        //    'destinataire_structure_id' => $dossier->structure_id,
                        //    'motif' => 'Envoi du dossier à la '. $dossierStructureCode ,
                        //]);

                        // créer pivot et mettre à jour le statut sur terminé
                        // $dossier->etapes()->attach($etapeSuivanteId, ['user_id' => auth()->id(), 'statut' => 'terminé']);

                //normalement
                //if ($etapeSuivanteId == 6) {
                     //$dossier->update(['statut' => 'Validé']);
                     //$dossier->suiviDossiers()->create(['etape' => 6, 'statut' => 'terminé', 'user_id' => auth()->id()]);
                     //return back()->with('success', 'Le dossier a été validé officiellement par la fonction publique.');
                 //}

                DB::commit();
                return back()->with('success', 'Le dossier a été validé avec succès.');
            }

        } catch (Throwable $e) {
            DB::rollBack();
            // Gérer l'erreur ici, par exemple, logger l'erreur
            \Log::error("Erreur lors de la validation du dossier " . $dossier->id . ": " . $e->getMessage());
            return back()->with('error', 'Une erreur s\'est produite lors de la validation du dossier. Veuillez réessayer.');
        }
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


    public function differerDossier(Dossier $dossier)
    {
        // Similaire à l'ordonnateur, adapte si nécessaire en fonction des rôles
        $derniereEtapeActive = $dossier->etapes()->orderByPivot('created_at', 'desc')->wherePivot('statut', '!=', 'différé')->first();

        if ($derniereEtapeActive && $derniereEtapeActive->pivot->etape_id > 1) {
            $etapeActuelleId = $derniereEtapeActive->pivot->etape_id;
            $etapePrecedenteId = $etapeActuelleId - 1;

            $dossier->etapes()->wherePivot('etape_id', $etapeActuelleId)->updateExistingPivot($etapeActuelleId, ['statut' => 'différé']);

            $etapePrecedentePivot = $dossier->etapes()->wherePivot('etape_id', $etapePrecedenteId)->first();
            if ($etapePrecedentePivot && $etapePrecedentePivot->pivot->statut == 'différé') {
                $dossier->etapes()->updateExistingPivot($etapePrecedenteId, ['statut' => 'en cours']);
            } else if (!$etapePrecedentePivot) {
                $dossier->etapes()->attach($etapePrecedenteId, ['user_id' => auth()->id(), 'statut' => 'en cours']);
            }

            $dossier->update(['statut' => 'en cours']);

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
