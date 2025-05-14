<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DemandeFormRequest;

class DemandeController extends Controller
{
    /**
     * Affiche la liste de tous les demandes.
     */
    public function index()
    {

        $user = Auth::user();
        $structureId = $user->structure_id;
        

        //Accéder à toutes les demandes par défaut
        $demandes = Dossier::orderBy('created_at', 'desc')->paginate(5);
        
        //Gestion de l'affichage des demandes sous conditions
        if ($structureId) {

            if (Auth::user()->profilActif()->intitule_profil == 'Service RH') {
                //l'affichage des demandes du RH d'une structure
                $demandeur= 'RH';
                $demandes = Dossier::where('structure_id', $structureId)
                        ->orWhere('type_demandeur', $demandeur)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
            }

        }

        return view('pages.demandes.index', [
            'demandes' => $demandes,
        ]);
        
    }


    public function demandeStructure()
    {

        $user = Auth::user();
        $structureId = $user->structure_id;

        //Gestion de l'affichage des demandes sous conditions
        if ($structureId) {
            //Affichage des demandes de sa structure
            $demandes = Dossier::where('structure_id', $structureId)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
        }
        
        return view('pages.demandes.index', compact('demandes'));
        
    }

    public function demandeAgent()
    {

        $user = Auth::user();
        $structureId = $user->structure_id;
        
        $agentId = $user->agent()->id;
        //l'affichage des demandes d'un agent
        $demandes = Dossier::where('agent_id', $agentId)
                    ->orderBy('created_at', 'desc')
                    ->paginate(5);
        
        return view('pages.demandes.index', compact('demandes'));
        
    }

    /**
     * Créer les informations d'une demande.
     */
    public function create()
    {
        $demande = new Dossier();
        $codeDossier='';
        // Récupérer la structure de l'utilisateur connecté
        if (Auth::user()->structure) {
            $structureCode = Auth::user()->structure->code_structure;
            // Générer le code dossier
            $codeDossier = Dossier::genererCodeDossier($structureCode);
        }
        
        
        // Passer le code dossier à la vue
        return view('pages.demandes.form', compact('demande', 'codeDossier'));
    }

    /**
     * Soumettre une nouvel demande.
     */
    public function store(DemandeFormRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['statut'] = 'en attente'; // Initialise le statut du dossier

        if (Auth::user()->profilActif()->intitule_profil == 'Service RH') {
            $validatedData['type_demandeur'] = 'RH'; // Initialise le type de demandeur
        }

        $dossier = Dossier::create($validatedData);

        // Créer l'enregistrement de suivi pour l'étape 1
        $dossier->etapes()->attach(1, ['user_id' => auth()->id(), 'statut' => 'en attente']);

        // L'année est déjà gérée automatiquement par les timestamps de Laravel
        $dossier = Dossier::create($validatedData);
        return to_route('demande.index')->with('success', 'Enregistrement réussi!');
    }

    

}