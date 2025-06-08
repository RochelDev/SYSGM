<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fonction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FonctionFormRequest;

class FonctionController extends Controller
{
    /**
     * Affiche la liste de tous les fonctions.
     */
    public function index()
    {
        $fonctions = Fonction::orderBy('created_at', 'desc')->paginate(5);// limiter et paginer les résultats récupérés depuis la base de données.

        return view('admin.fonctions.index', [
            'fonctions' => $fonctions,
        ]);
    }

    /**
     * Créer les informations d'une fonction.
     */

    public function create()
    {
        $fonction = new Fonction();
        return view('admin.fonctions.create', compact('fonction'));
    }

    /**
     * Enregistre un nouveau fonction.
     */
    public function store(FonctionFormRequest $request)
    {
        //$validatedData = $request->validate();

        $fonction = Fonction::create($request->validated());
        return to_route('admin.fonction.index')->with('success', 'Enregistrement réussi!');
    }

    /**
 * Affiche le formulaire d'édition pour une fonction existante.
 */

    public function edit(Fonction $fonction)
    {
        return view('admin.fonctions.create', compact('fonction'));
    }

    /**
     * Met à jour les informations d'un fonction.
     */
    public function update(FonctionFormRequest $request, Fonction $fonction): Response // Use Response here
    {
        $fonction->update($request->validated());
        //dd($request->all());
        // $fonction->update($request->all());
        return to_route('admin.fonction.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un fonction.
     */
    public function destroy(Fonction $fonction)
    {
        $fonction->delete();
        return to_route('admin.fonction.index')->with('success', 'Suppression réussi!');
    }
}
