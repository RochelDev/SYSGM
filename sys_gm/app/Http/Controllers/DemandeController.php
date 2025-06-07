<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use App\Models\Structure;
use App\Models\TypeMobilite;
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

            if ($user->profilActif()->intitule_profil == 'Service RH') {
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

    public function showdetails(Dossier $demande)
    {
        //dd($demande);
        return view('pages.demandes.demande', compact('demande'));        
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
        $codeDossier ='';
        $nomAgent = '';
        $user = Auth::user();
        $structureID='';
        // Récupérer la structure de l'utilisateur connecté
        if ($user->structure) {
            $structureCode = Auth::user()->structure->code_structure;
            // Générer le code dossier
            $codeDossier = Dossier::genererCodeDossier($structureCode);
            $structureID = $user->structure->id;
        }
        //dd($codeDossier);
        //dd($structureID);

        if ($user->profilActif()->intitule_profil == 'Agent' && $user->agent ) {
            $nomAgent = $user->agent->nom . ' ' . $user->agent->prenom;
        }
        //dd($nomAgent);

        // dd([
        //     'profil_actif' => auth()->user()->profilActif() ? auth()->user()->profilActif()->intitule_profil : null,
        //     'has_agent' => auth()->user()->agent ? true : false,
        //     'nom_agent' => $nomAgent
        // ]);
        
        $structures=Structure::all();
        $typemobs=TypeMobilite::all();
        // Passer les variables à la vue
        return view('pages.demandes.form', compact('demande', 'codeDossier', 'nomAgent', 'structureID', 'structures', 'typemobs'));
    }

    /**
     * Soumettre une nouvel demande.
     */
    public function store(DemandeFormRequest $request)
    {
        $validatedData = $request->validated();

        // Initialisation des données spécifiques à la création
        $validatedData['statut'] = 'en attente';
        $validatedData['annee'] = date('Y');
        $validatedData['agent_id'] = Auth::user()->agent->id ?? null; // Assurez-vous que l'agent est lié à l'utilisateur
        $validatedData['type_demandeur'] = (Auth::user()->profilActif()->intitule_profil == 'Service RH') ? 'RH' : 'Agent';

        if ($dossier) {
            // Handle uploaded documents
            if ($request->hasFile('documents')) {
                foreach ($request->file('documents') as $document) {
                    $nomFichier = time() . '_' . $document->getClientOriginalName();
                    $chemin = $document->storeAs('dossiers/' . $dossier->code_dossier, $nomFichier);
            
                    $dossier->piecesJustificatives()->create([
                        'nom_du_fichier' => $nomFichier,
                        'lien' => $chemin,
                        'titre' => $document->getClientOriginalName(),
                        // 'type_piece_id' => ..., // À gérer selon ta logique
                    ]);
                }
            }

            // Création du dossier
            $dossier = Dossier::create($validatedData);

            // Attachement à l'étape 1 avec le statut "en attente"
            $dossier->etapes()->attach(1, ['user_id' => auth()->id(), 'statut' => 'en attente']);

            return to_route('demande.index')->with('success', 'Demande enregistrée avec succès !');
         } else {
            // Si la création du dossier échoue (ce qui est rare avec create()),
            // tu peux ajouter une gestion d'erreur plus spécifique ici si nécessaire.
            return back()->with('error', 'Erreur lors de l\'enregistrement de la demande.');
        }
    }

}