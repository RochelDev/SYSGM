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
        $demandes = Dossier::orderBy('created_at', 'desc')->paginate(5);

        return view('pages.demandes.index', [
            'demandes' => $demandes,
        ]);
    }

    /**
     * Créer les informations d'un demande.
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
        // L'année est déjà gérée automatiquement par les timestamps de Laravel
        $dossier = Dossier::create($validatedData);
        return to_route('demande.index')->with('success', 'Enregistrement réussi!');
    }

    

}