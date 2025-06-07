<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DossierControllertraitement extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userStructure = $user->structure;
        $userStructureId = $userStructure ? $user->structure_id : '';
        $userStructureCode = $userStructure ? $userStructure->code_structure : '';

        $dossiersQuery = Dossier::orderBy('created_at', 'desc');

        if ($user->structure_id == null && $user->usertype == 'admin' && $user->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
            $dossiersQuery->whereExists(function ($query) use ($user) {
                $query->select(DB::raw(1))
                    ->from('suivi_dossiers')
                    ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                    ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                    ->where('suivi_dossiers.user_id', $user->id)
                    ->where(function ($q) {
                        $q->where('suivi_dossiers.statut', 'en attente');
                    })
                    ->whereIn('etapes.id', [2, 4])
                    ->orderBy('suivi_dossiers.created_at', 'desc')
                    ->limit(1);
            });
        }
        if ($user->structure_id == null && $user->usertype == 'admin' && $user->profilActif()->intitule_profil == 'Agent DRSC') {
            $dossiersQuery->whereExists(function ($query) use ($user) {
                $query->select(DB::raw(1))
                    ->from('suivi_dossiers')
                    ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                    ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                    ->where('suivi_dossiers.user_id', $user->id)
                    ->where(function ($q) {
                        $q->where('suivi_dossiers.statut', 'en attente');
                    })
                    ->whereIn('etapes.id', [3, 5, 6])
                    ->orderBy('suivi_dossiers.created_at', 'desc')
                    ->limit(1);
            });
        }
        
        if ($user->profilActif()->intitule_profil == 'Agent DRSC') {

            if ($userStructureId != null) {
               $dossiersQuery->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                    $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'en attente')
                              ->orWhere('suivi_dossiers.statut', 'validé');
                        })
                          ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [3, 5, 6])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
            }
            $dossiers = $dossiersQuery->paginate(5);
            return view('traitement.agentdrsc.index', compact('dossiers'));
        }
        elseif ($user->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
            if ($userStructureId != null) {
               $dossiersQuery->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'en attente')
                              ->orWhere('suivi_dossiers.statut', 'validé');
                        })
                        ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
            }
            $dossiers = $dossiersQuery->paginate(5);
            return view('traitement.ordonnateur.index', compact('dossiers'));   
        }
        else {
            $dossiers = $dossiersQuery->paginate(5);
            return view('pages.dossiers.index', compact('dossiers'));
        }
    }


    public function encours()
    {
        $user = Auth::user();
        $userStructureId = $user->structure_id;
        $userStructureCode = $user->structure ? $user->structure->code_structure : null;
        $profil = $user->profilActif()->intitule_profil ?? null;

        $dossiers = Dossier::orderBy('created_at', 'desc');

        if ($user->structure_id == null && $user->usertype == 'admin' && $user->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
            $dossiers->whereExists(function ($query) use ($user) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'en cours');
                        })
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }

        elseif ($user->structure_id == null && $user->usertype == 'admin' && $user->profilActif()->intitule_profil == 'Agent DRSC') {
            $dossiers->whereExists(function ($query) use ($user) {
                $query->select(DB::raw(1))
                    ->from('suivi_dossiers')
                    ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                    ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                    ->where('suivi_dossiers.user_id', $user->id)
                    ->where(function ($q) {
                        $q->where('suivi_dossiers.statut', 'en cours');
                    })
                    ->whereIn('etapes.id', [3, 5, 6])
                    ->orderBy('suivi_dossiers.created_at', 'desc')
                    ->limit(1);
            });
        }
        elseif ($userStructureId && $user->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
            $dossiers->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'en cours');
                        })
                        ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }
        elseif ($userStructureId && $user->profilActif()->intitule_profil == 'Agent DRSC') {
            $dossiers->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'en cours');
                        })
                        ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }
        else {
            $dossiers->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'en cours');
                        })
                        ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }

        // $dossiers->whereHas('etapes', function ($query) use ($user) {
        //     $query->where('suivi_dossiers.statut', 'en cours')
        //           ->orWhere('suivi_dossiers.statut', 'validé')
        //           ->where('suivi_dossiers.user_id', $user->id);
        // });



        // Gestion de l'affichage des demandes sous conditions (structure)
        // if ($userStructureId) {
        //     $dossiers->where(function ($query) use ($userStructureId, $userStructureCode) {
        //         $query->where('structure_id', $userStructureId)
        //               ->orWhere('destinataire', $userStructureCode);
        //     });
        // }

        $dossiersEnCours = $dossiers->paginate(5);

        if ($profil == 'Agent DRSC') {
            return view('traitement.agentdrsc.traiter', ['dossiers' => $dossiersEnCours]);
        } elseif ($profil == 'Ordonnateur Sectoriel') {
            return view('traitement.ordonnateur.traiter', ['dossiers' => $dossiersEnCours]);
        } else {
            return view('pages.dossiers.traiter', ['dossiers' => $dossiersEnCours]);
        }
    }




    public function dossierReçus()
    {
        $user = Auth::user();
        $userStructureId = $user->structure_id;
        $userStructureCode = $user->structure ? $user->structure->code_structure : '';
        $profil = $user->profilActif()->intitule_profil ?? null;

        $dossiers = Dossier::query()->orderBy('created_at', 'desc');

        // Filtrer les dossiers où l'utilisateur est impliqué dans une étape "en cours"
        // $dossiers->whereHas('etapes', function ($query) use ($user) {
        //     $query->wherePivot('statut', 'en cours')
        //           ->where('suivi_dossiers.user_id', $user->id);
        // });

        // Gestion de l'affichage des demandes sous conditions (structure)
        if ($userStructureId) {
            $dossiers->where(function ($query) use ($userStructureCode) {
                $query->where('destinataire', $userStructureCode);
            });
        }

        // Accès à tous les dossiers pour l'admin
        if ($user->structure_id == null) {
            $dossiers->orderBy('created_at', 'desc');
        }

        $dossiers = $dossiers->paginate(5);
        //$etapeActuelle = $dossier->etapes()->wherePivot('statut', '!=', 'en cours');


        if ($profil == 'Agent DRSC') {
            return view('traitement.agentdrsc.index', [
                'dossiers' => $dossiers
            ]);
        } elseif ($profil == 'Ordonnateur Sectoriel') {
            return view('traitement.ordonnateur.index', [
                'dossiers' => $dossiers
            ]);
        } else {
            return view('pages.dossiers.index', [
                'dossiers' => $dossiers
            ]);
        }
    }

    public function dossierTransfert()
    {
        $user = Auth::user();
        $userStructureId = $user->structure_id;
        $userStructureCode = $user->structure ? $user->structure->code_structure : '';
        $profil = $user->profilActif()->intitule_profil ?? null;

        $dossiersReçusQuery = Dossier::whereHas('transferts', function ($query) use ($userStructureId) {
            $query->where('destinataire_structure_id', $userStructureId);
        })->orderBy('created_at', 'desc');

        $dossiersEnvoyésQuery = Dossier::whereHas('transferts', function ($query) use ($userStructureId) {
            $query->where('envoyeur_structure_id', $userStructureId);
        })->orderBy('created_at', 'desc');

        $dossiersQuery = Dossier::query()->orderBy('created_at', 'desc'); // Tous les dossiers (ou ceux liés à la structure)

        // Accès à tous les dossiers pour l'admin (pas de filtre spécifique d'envoi/réception ici)
        if ($user->structure_id == null) {
            $dossiersEnvoyésQuery = Dossier::query()->orderBy('created_at', 'desc');
            $dossiersReçusQuery = Dossier::query()->orderBy('created_at', 'desc');
        }

        $dossiersReçus = $dossiersReçusQuery->paginate(5);
        $dossiersEnvoyés = $dossiersEnvoyésQuery->paginate(5);
        $dossiers = $dossiersQuery->paginate(5);

        return view('pages.dossierTransfert.index', [
            'dossiers' => $dossiers,
            'dossiersEnvoyés' => $dossiersEnvoyés,
            'dossiersReçus' => $dossiersReçus,
        ]);
    }

    public function showdetails(Dossier $dossier)
    {
        //dd($dossier);
        $user = Auth::user();
        $userStructureId = $user->structure_id;
        $profil = $user->profilActif()->intitule_profil ?? null;

        if ($profil == 'Agent DRSC') {
            return view('traitement.agentdrsc.details', compact('dossier'));
        } elseif ($profil == 'Ordonnateur Sectoriel') {
            return view('traitement.ordonnateur.details', compact('dossier'));
        } else {
            return view('pages.dossiers.details', compact('dossier'));
        }
        
                
    }


    public function validations()
    {
        $user = Auth::user();
        $userStructureId = $user->structure_id;
        $userStructureCode = $user->structure ? $user->structure->code_structure : null;
        $profil = $user->profilActif()->intitule_profil ?? null;

        $dossiers = Dossier::orderBy('created_at', 'desc');

        if ($user->structure_id == null && $user->usertype == 'admin' && $user->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
            $dossiers->whereExists(function ($query) use ($user) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'validé');
                        })
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }

        elseif ($user->structure_id == null && $user->usertype == 'admin' && $user->profilActif()->intitule_profil == 'Agent DRSC') {
            $dossiers->whereExists(function ($query) use ($user) {
                $query->select(DB::raw(1))
                    ->from('suivi_dossiers')
                    ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                    ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                    ->where('suivi_dossiers.user_id', $user->id)
                    ->where(function ($q) {
                        $q->where('suivi_dossiers.statut', 'validé');
                    })
                    ->whereIn('etapes.id', [3, 5, 6])
                    ->orderBy('suivi_dossiers.created_at', 'desc')
                    ->limit(1);
            });
        }
        elseif ($userStructureId && $user->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
            $dossiers->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'validé');
                        })
                        ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }
        elseif ($userStructureId && $user->profilActif()->intitule_profil == 'Agent DRSC') {
            $dossiers->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'validé');
                        })
                        ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }
        else {
            $dossiers->whereExists(function ($query) use ($user, $userStructureId, $userStructureCode) {
                     $query->select(DB::raw(1))
                        ->from('suivi_dossiers')
                        ->join('etapes', 'suivi_dossiers.etape_id', '=', 'etapes.id')
                        ->whereColumn('suivi_dossiers.dossier_id', 'dossiers.id')
                        ->where('suivi_dossiers.user_id', $user->id)
                        ->where(function ($q) {
                            $q->where('suivi_dossiers.statut', 'validé');
                        })
                        ->where('structure_id', $userStructureId)
                          ->where('destinataire', $userStructureCode)
                        ->orWhere('suivi_dossiers.user_id', $user->id)
                        ->whereIn('etapes.id', [2, 4])
                        ->orderBy('suivi_dossiers.created_at', 'desc')
                        ->limit(1);
                    });
        }

        // Accès à tous les dossiers pour l'admin (et on garde le filtre "en cours" sur les étapes)
        if ($user->structure_id == null && $user->usertype == 'admin') {
            $dossiers->orderBy('created_at', 'desc');
        }

        $dossiersValider = $dossiers->paginate(5);

        if ($profil == 'Agent DRSC') {
            return view('traitement.agentdrsc.valider', ['dossiers' => $dossiersValider]);
        } elseif ($profil == 'Ordonnateur Sectoriel') {
            return view('traitement.ordonnateur.valider', ['dossiers' => $dossiersValider]);
        } else {
            return view('pages.dossiers.traiter', ['dossiers' => $dossiersValider]);
        }
    }

}
