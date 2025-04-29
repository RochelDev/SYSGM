<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poste;
use App\Models\Structure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PosteFormRequest;

class PosteController extends Controller
{
    /**
     * Affiche la liste de tous les postes.
     */
    public function index(Request $request)
    {
        $structures = Structure::orderBy('nom_structure')->get();
        $postes = Poste::with('structure')
            ->when($request->has('structure_filter') && $request->input('structure_filter') != '', function ($query) use ($request) {
                $query->where('structure_id', $request->input('structure_filter'));
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Exemple de pagination de 10 éléments par page

        return view('admin.postes.index', compact('postes', 'structures'));
    }

    /**
     * Créer les informations d'un poste.
     */

    public function create(Request $request)
    {
        
        $poste = new Poste();
        if ($request->has('structure')) {
            $structure = Structure::findOrFail($request->input('structure'));
            return view('admin.postes.create', compact('poste', 'structure'));
        } else {
            $structures = Structure::all();
            return view('admin.postes.create', compact('poste', 'structures'));
        }
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
    public function edit(Poste $poste, Request $request)
    {
        if ($request->has('structure')) {
            $structure = Structure::findOrFail($request->input('structure'));
            return view('admin.postes.create', compact('poste', 'structure'));
        } else {
            $structures = Structure::all();
            return view('admin.postes.create', compact('poste' , 'structures'));
        }
        //return view('admin.postes.create', compact('poste'));
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
