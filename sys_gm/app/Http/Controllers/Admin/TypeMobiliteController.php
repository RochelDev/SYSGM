<?php

namespace App\Http\Controllers\Admin;

use App\Models\TypeMobilite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TypeMobiliteFormRequest;

class TypeMobiliteController extends Controller
{
    /**
     * Affiche la liste de tous les type de mobilités.
     */
    public function index()
    {
        $type_mobilites = TypeMobilite::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.type_mobilites.index', [
            'type_mobilites' => $type_mobilites,
        ]);
    }

    /**
     * Créer les informations d'un type de mobilité.
     */

    public function create()
    {
        $type_mobilite = new TypeMobilite();
        return view('admin.type_mobilite.create', compact('type_mobilite'));
    }

    /**
     * Enregistre un nouveau type de mobilité.
     */
    public function store(TypeMobiliteFormRequest $request)
    {
        //$validatedData = $request->validate();

        $type_mobilite = TypeMobilite::create($request->validated());
        return to_route('admin.type_mobilite.index')->with('success', 'Enregistrement réussi!');
    }

    /**
     * Met à jour les informations d'un type de mobilité.
     */
    public function edit(TypeMobilite $type_mobilite)
    {
        return view('admin.type_mobilite.create', compact('type_mobilite'));
    }

    /**
     * Met à jour les informations d'un type de mobilité.
     */
    public function update(TypeMobiliteFormRequest $request, TypeMobilite $type_mobilite): Response // Use Response here
    {
        $type_mobilite->update($request->validated());
        //dd($request->all());
        // $type_mobilite->update($request->all());
        return to_route('admin.type_mobilite.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un type de mobilité.
     */
    public function destroy(TypeMobilite $type_mobilite)
    {
        $type_mobilite->delete();
        return to_route('admin.type_mobilite.index')->with('success', 'Suppression réussi!');
    }
}
