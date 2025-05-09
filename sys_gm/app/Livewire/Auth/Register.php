<?php

namespace App\Livewire\Auth;

use App\Models\Agent;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public ?string $num_npi = null; // Champ NPI nullable par défaut
    public bool $showNpiField = true; // Condition pour afficher le champ NPI (modifiez la logique ici)

    public function mount()
    {
        // Déterminez ici si le champ NPI doit être affiché.
        // Par exemple, basé sur une configuration, une variable d'environnement, etc.
        // $this->showNpiField = config('app.enable_npi_registration');
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ];

        if ($this->showNpiField) {
            $rules['num_npi'] = ['required', 'string', Rule::exists('agents', 'num_NPI')];
        }

        $this->validate($rules);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        if ($this->showNpiField && $this->num_npi) {
            // Vérifier si un utilisateur existe déjà pour cet agent
            $agent = Agent::where('num_NPI', $this->num_npi)->first();
            if ($agent && $agent->user_id) {
                $this->addError('num_npi', 'Ce numéro NPI est déjà associé à un compte.');
                // On ne lie pas l'utilisateur et on ne continue pas.
                // Vous pourriez même supprimer l'utilisateur créé ici si nécessaire.
                $user->delete();
                return;
            }

            // Associer l'utilisateur à l'agent
            Agent::where('num_NPI', $this->num_npi)->update(['user_id' => $user->id]);

            // Attribuer le profil 'Agent' à l'utilisateur
            $agentProfil = Profil::where('intitule_profil', 'Agent')->first();
            if ($agentProfil) {
                $user->profils()->attach($agentProfil->id, ['statut' => 'actif']);
            } else {
                logger('Le profil "Agent" n\'a pas été trouvé.');
            }
        }

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register', ['showNpiField' => $this->showNpiField]);
    }
}