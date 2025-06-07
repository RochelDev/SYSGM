<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Dossier;
use Livewire\Attributes\On;
use Flux;

class UploadFile extends Component
{
    public ?Dossier $dossier;

    public function mount(Dossier $dossier)
    {
        $this->dossier=$dossier;
    }

    // public function save() 
    // {
    //     $post = Post::create([
    //         'title' => $this->title
    //     ]);
 
    //     return redirect()->to('/posts')
    //          ->with('status', 'Post created!');
    // }

    public function render()
    {
        return view('livewire.upload-file');
    }
}
