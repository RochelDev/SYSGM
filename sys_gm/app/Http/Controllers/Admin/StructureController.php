<?php

namespace App\Http\Controllers\Admin;

use App\Models\Structure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StructureFormRequest;

class StructureController extends Controller
{
    /**
     * Affiche la liste de tous les structures.
     */
    public function index()
    {
        $structures = Structure::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.structures.index', [
            'structures' => $structures,
        ]);
    }

    /**
     * Créer les informations d'un structure.
     */

    public function create()
    {
        $structure = new Structure();
        return view('admin.structures.create', compact('structure'));
    }

    /**
     * Enregistre un nouveau structure.
     */
    public function store(StructureFormRequest $request)
    {
        //$validatedData = $request->validate();

        $structure = Structure::create($request->validated());
        return to_route('admin.structure.index')->with('success', 'Enregistrement réussi!');
    }

    /**
     * Met à jour les informations d'un structure.
     */
    public function edit(Structure $structure)
    {
        return view('admin.structures.create', compact('structure'));
    }

    /**
     * Met à jour les informations d'un structure.
     */
    public function update(StructureFormRequest $request, Structure $structure): Response // Use Response here
    {
        $structure->update($request->validated());
        //dd($request->all());
        // $structure->update($request->all());
        return to_route('admin.structure.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un structure.
     */
    public function destroy(Structure $structure)
    {
        $structure->delete();
        return to_route('admin.structure.index')->with('success', 'Suppression réussi!');
    }
}
