<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Departement;
use App\Http\Requests\Admin\DepartementFormRequest;





class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $departements = Departement::orderBy('created_at', 'desc')->paginate(5);
        // return view('admin.departement.index', compact('departements'));

        return view('admin.departement.index', [
            'departements' => Departement::orderBy('created_at', 'desc')->paginate(5)
       ]);
    }

    // ->with('departements', $departements)

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departement=new Departement();
        // return view('admin.departement.create', compact('departement'));

        return view('admin.departement.create',[
            'departement' => $departement
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartementFormRequest $request)
    {
        $departement= Departement::create($request->validated());
        return to_route('admin.departement.index')->with('success', 'Enregistrement réussi!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        // return view('admin.departement.create', compact('departement'));

        return view('admin.departement.create',[
            'departement' => $departement
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartementFormRequest $request, Departement $departement)
    { 
        $departement->update($request->validated());
        // $departement->update($request->all());
        return to_route('admin.departement.index')->with('success', 'Modification réussi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    { 
        $departement->delete();
        return to_route('admin.departement.index')->with('success', 'Suppression réussi!');
    }


    /**
     * NB:
     * Lister(function index(retourne la page de listing avec une variable))
     * Enregistrement(create(retourne la page du formulaire avec une variable auquelle ont affecte la valeur nouvel enregistrement), 
     * store avec $request comme paramètre(traitement de la requête et enregistrement dans la base de données puis retourne la page de listing avec un message de succès))
     * Modification(edit avec $Nom_modèle comme paramètre(retourne la page du formulaire avec une variable auquelle ont affecte $Nom_modèle), 
     * update avec $request et $Nom_modèle comme paramètres(traitement de la requête et enregistrement dans la base de données puis retourne la page de listing avec un message de succès)
     * Suppression(function destroy avec $Nom_modèle comme paramètre(suppression puis retourne la page de listing avec un message de succès)).
     */
}
