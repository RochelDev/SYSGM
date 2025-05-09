<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Ministere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Profil; // Importez le modèle Profil

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::with('profils', 'ministere')->paginate(10); // Paginer les utilisateurs
        
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        $user = new User(); // Créer une instance vide pour le formulaire
        $profils = Profil::all(); // Récupérer tous les profils
        $ministeres = Ministere::all(); // Ajoute cette ligne pour ministeres
        return view('admin.users.create', compact('user', 'profils' , 'ministeres'));
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ministere_id' => ['nullable', 'integer', 'exists:ministeres,id'],
            'password' => ['required', 'confirmed', Password::min(8)],
            'profils' => ['nullable', 'array'], // Autoriser la sélection de plusieurs profils
            'profils.*' => ['exists:profils,id'], // Vérifier que les IDs de profils existent
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->profils()->attach($request->input('profils', [])); // Attacher les profils sélectionnés

        return redirect()->route('admin.user.index')->with('success', 'Utilisateur créé avec succès.');
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        $profils = Profil::all(); // Récupérer tous les profils
        $ministeres = Ministere::all();
        return view('admin.users.edit', compact('user', 'profils', 'ministeres'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'ministere_id' => ['nullable', 'integer', 'exists:ministeres,id'],
            'profils' => ['nullable', 'array'],
            'profils.*' => ['exists:profils,id'],
        ];

        if ($request->filled('password')) {
            $rules['password'] = ['required', 'confirmed', Password::min(8)];
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->ministere_id = $request->ministere_id;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        // Synchroniser les profils de l'utilisateur simplement
        //$user->profils()->sync($request->input('profils', []));

        // Synchroniser les profils avec le statut
        $profils = $request->input('profils', []);
        $this->syncProfils($user, $profils);

        return redirect()->route('admin.user.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }

    private function syncProfils(User $user, array $profils): void
    {
        $user->profils()->detach(); // Detach all existing profils first.

        $profilsData = [];
        $agentProfilId = Profil::where('intitule_profil', 'Agent')->value('id'); //get agent profil id

        $hasAgentProfil = in_array($agentProfilId, $profils);
        $firstProfilId = count($profils) > 0 ? $profils[0] : null;

        foreach ($profils as $profilId) {
            $statut = 'inactif';
            if ($hasAgentProfil && $profilId == $agentProfilId) {
                $statut = 'actif';
            } elseif (!$hasAgentProfil && $profilId == $firstProfilId) {
                $statut = 'actif';
            } elseif (count($profils) == 1) {
                $statut = 'actif';
            }
            $profilsData[$profilId] = ['statut' => $statut];
        }
        $user->profils()->attach($profilsData);
    }

}