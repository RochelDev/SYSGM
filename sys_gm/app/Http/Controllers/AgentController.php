<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Affiche la liste de tous les agents.
     */
    public function index()
    {
        $agents = Agent::orderBy('created_at', 'desc')->with('user')->paginate(5);
        return view('pages.agents.index', [
            'agents' => $agents,
        ]);
    }

    public function edit(Agent $agent)
    {
        return view('pages.agents.create', compact('agent'));
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
    public function store(Request $request): Response
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
        ]);

        $agent = Agent::create($validatedData);

        return response([
            'agent' => $agent,
            'message' => 'Agent créé avec succès',
        ], 201);
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
    public function update(Request $request, Agent $agent): Response
    {
        $validatedData = $request->validate([
             'matricule' => ['required', 'string', 'max:20', Rule::unique('agents', 'matricule')->ignore($agent)],
            'num_NPI' => ['required', 'string', 'max:20', Rule::unique('agents', 'num_NPI')->ignore($agent)],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:50'],
            'categorie' => ['required', 'string', 'max:50'],
            'historique_poste' => ['nullable', 'array'],
            'date_recrutement' => ['required', 'date'],
            'date_debut_service' => ['required', 'date'],
            'user_id' => ['nullable', 'exists:users,id'],
        ]);

        $agent->update($validatedData);

        return response([
            'agent' => $agent,
            'message' => 'Agent mis à jour avec succès',
        ], 200);
    }

    /**
     * Supprime un agent.
     */
    public function destroy(Agent $agent): Response
    {
        $agent->delete();

        return response([
            'message' => 'Agent supprimé avec succès',
        ], 200);
    }
}
