<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MakeProfilFormRequest;

class ProfilAccessController extends Controller
{
    /**
     * Affiche la liste de tous les profils.
     */
    public function index()
    {
        $profils = Profil::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.profils.index', [
            'profils' => $profils,
        ]);
    }

    /**
     * Créer les informations d'un profil.
     */

    public function create()
    {
        $profil = new Profil();
        return view('admin.profils.create', compact('profil'));
    }

    /**
     * Enregistre un nouveau profil.
     */
    public function store(MakeProfilFormRequest $request)
    {
        //$validatedData = $request->validate();
        //dd($request->all());
        $profil = Profil::create($request->validated());
        return to_route('admin.profil.index')->with('success', 'Enregistrement réussi!');
    }

    /**
     * Met à jour les informations d'un profil.
     */
    public function edit(Profil $profil)
    {
        return view('admin.profils.create', compact('profil'));
    }

    /**
     * Met à jour les informations d'un profil.
     */
    public function update(MakeProfilFormRequest $request, Profil $profil) // Use Response here
    {
        $profil->update($request->validated());
        //dd($request->all());
        // $profil->update($request->all());
        return to_route('admin.profil.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un profil.
     */
    public function destroy(Profil $profil)
    {
        $profil->delete();
        return to_route('admin.profil.index')->with('success', 'Suppression réussi!');
    }
}
