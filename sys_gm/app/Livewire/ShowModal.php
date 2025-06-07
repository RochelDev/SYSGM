<?php

namespace App\Livewire;

use App\Models\Dossier;
use Livewire\Component;

class ShowModal extends Component
{
    public ?Dossier $dossier = null;
    public bool $show = false;
    public $dossierIdToLoad; // Pour stocker l'ID reçu

    protected $listeners = ["openModal" => "openTheModal"];

    public function openTheModal($id)
    {
        $this->dossierIdToLoad = $id;
        $this->dossier = Dossier::findOrFail($id);
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
        $this->dossier = null; // Réinitialiser le dossier
        $this->dossierIdToLoad = null;
    }

    public function render()
    {
        return view('livewire.show-modal');
    }
}
