<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ministere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MinistereFormRequest;
use Illuminate\Http\Response; // Import the Response class

class MinistereController extends Controller
{
    /**
     * Affiche la liste de tous les ministères.
     */
    public function index()
    {
        $ministeres = Ministere::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.ministeres.index', [
            'ministeres' => $ministeres,
        ]);
    }

    /**
     * Créer les informations d'un ministère.
     */

    public function create()
    {
        $ministere = new Ministere();
        return view('admin.ministeres.create', compact('ministere'));
    }

    /**
     * Enregistre un nouveau ministère.
     */
    public function store(MinistereFormRequest $request)
    {
        //$validatedData = $request->validate();

        $ministere = Ministere::create($request->validated());
        return to_route('admin.ministere.index')->with('success', 'Enregistrement réussi!');
    }

    /**
     * Met à jour les informations d'un ministère.
     */
    public function edit(Ministere $ministere)
    {
        return view('admin.ministeres.create', compact('ministere'));
    }

    /**
     * Met à jour les informations d'un ministère.
     */
    public function update(MinistereFormRequest $request, Ministere $ministere): Response // Use Response here
    {
        $ministere->update($request->validated());
        //dd($request->all());
        // $ministere->update($request->all());
        return to_route('admin.ministere.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un ministère.
     */
    public function destroy(Ministere $ministere)
    {
        $ministere->delete();
        return to_route('admin.ministere.index')->with('success', 'Suppression réussi!');
    }
}
