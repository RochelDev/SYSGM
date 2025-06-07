<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Dossier;
use Livewire\Attributes\On;
use Flux;

class ModalShow extends Component
{

    public ?Dossier $dossier = null;
    public $dossierId;
    public bool $show = false;
    public $dossierIdToLoad; // Pour stocker l'ID reçu

    // protected $listeners = ["openModal" => "openTheModal"];

    public function mount($dossier)
    {
        // dd($id);
        // Flux::modal("edit-profile")->show();
        $this->dossier = $dossier;
        // $this->$dossierId = $id;
        // $this->show = true;
    }

    public function openModal($id)
    {
        dd($id);
        Flux::modal("edit-profile")->show();
        $this->dossier = Dossier::findOrFail($id);
        $this->$dossierId = $id;
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
        $this->dossier = null; // Réinitialiser le dossier
        $this->dossierIdToLoad = null;
    }

    

    public function submit()
    {
        Flux::modal()->close();
    }

    

    public function render()
    {
        return view('livewire.modal-show');
    }
}
