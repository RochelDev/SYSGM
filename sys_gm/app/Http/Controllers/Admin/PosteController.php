<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poste;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PosteFormRequest;

class PosteController extends Controller
{
    /**
     * Affiche la liste de tous les postes.
     */
    public function index()
    {
        $postes = Poste::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.postes.index', [
            'postes' => $postes,
        ]);
    }

    /**
     * Créer les informations d'un poste.
     */

    public function create()
    {
        $poste = new Poste();
        return view('admin.postes.create', compact('poste'));
    }

    /**
     * Enregistre un nouveau poste.
     */
    public function store(PosteFormRequest $request)
    {
        //$validatedData = $request->validate();

        $poste = Poste::create($request->validated());
        return to_route('admin.poste.index')->with('success', 'Enregistrement réussi!');
    }

    /**
     * Met à jour les informations d'un poste.
     */
    public function edit(Poste $poste)
    {
        return view('admin.postes.create', compact('poste'));
    }

    /**
     * Met à jour les informations d'un poste.
     */
    public function update(PosteFormRequest $request, Poste $poste): Response // Use Response here
    {
        $poste->update($request->validated());
        //dd($request->all());
        // $poste->update($request->all());
        return to_route('admin.poste.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un poste.
     */
    public function destroy(Poste $poste)
    {
        $poste->delete();
        return to_route('admin.poste.index')->with('success', 'Suppression réussi!');
    }
}
