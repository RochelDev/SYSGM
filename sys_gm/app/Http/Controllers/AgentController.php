<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Ministere;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    /**
     * Affiche la liste de tous les agents.
     */
    public function index()
    {
        $user = Auth::user();
        $structureId = '';
        
        //Gestion de l'affichage des agents sous conditions
        if ($user->profilActif()->intitule_profil == 'Service RH' || $user->profilActif()->intitule_profil == 'Agent') {
            //l'affichage des agents du RH d'une structure
            $structureId = $user->structure_id;
            $agents = Agent::where('structure_id', $user->structure_id)
                    ->orderBy('created_at', 'desc')
                    ->paginate(5);
        }
        if ($user->usertype == 'admin' && $user->structure_id == null) {
            //Accéder à tous les agents par défaut
            $agents = Agent::orderBy('created_at', 'desc')->paginate(5);
                
        }

        $agents = Agent::orderBy('created_at', 'desc')->with('user', 'structure')->paginate(5);
        return view('pages.agents.index', [
            'agents' => $agents,
        ]);
    }

    public function edit(Agent $agent)
    {
        $structures = Structure::all();
        return view('pages.agents.create', compact('agent', 'structures'));
    }

    public function create()
    {
        $agent = new Agent();
        $structures = Structure::all();
        return view('pages.agents.create', compact('agent', 'structures'));
    }


    // public function index(): Response
    // {
    //     $agents = Agent::with('user')->get();
    //     return response([
    //         'agents' => $agents,
    //         'message' => 'Liste des agents récupérée avec succès',
    //     ], 200);
        
    // }

    /**
     * Enregistre un nouvel agent.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'matricule' => ['required', 'string', 'max:20', 'unique:agents,matricule'],
            'num_NPI' => ['required', 'string', 'max:20', 'unique:agents,num_NPI'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:50'],
            'categorie' => ['required', 'string', 'max:50'],
            'historique_poste' => ['nullable', 'array'], // Vous devrez peut-être traiter cela différemment
            'date_recrutement' => ['required', 'date'],
            'date_debut_service' => ['required', 'date'],
            'user_id' => ['nullable', 'exists:users,id'],
            'structure_id' => ['nullable', 'exists:structures,id'],
        ]);

        $agent = Agent::create($validatedData);

        return to_route('agent.index')->with('success', 'Modification réussi!');
    }

    /**
     * Affiche les détails d'un agent spécifique.
     */
    public function show(Agent $agent): Response
    {
        $agent->load('user');
        return response([
            'agent' => $agent,
            'message' => 'Détails de l\'agent récupérés avec succès',
        ], 200);
    }

    /**
     * Met à jour les informations d'un agent.
     */
    public function update(Request $request, Agent $agent)
    {
        $validatedData = $request->validate([
            'matricule' => ['required', 'string', 'max:20', 'exists:agents,matricule'],
            'num_NPI' => ['required', 'string', 'max:20', 'exists:agents,num_NPI'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:50'],
            'categorie' => ['required', 'string', 'max:50'],
            'historique_poste' => ['nullable', 'array'],
            'date_recrutement' => ['required', 'date'],
            'date_debut_service' => ['required', 'date'],
            'user_id' => ['nullable', 'exists:users,id'],
            'structure_id' => ['nullable', 'exists:structures,id'],
        ]);

        $agent->update($validatedData);

        return to_route('agent.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un agent.
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return to_route('agent.index')->with('success', 'Suppression réussi!');
    }
}
