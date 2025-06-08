<div>
    <flux:modal name="{{ $dossier->id }}.{{ auth()->user()->profilActif()->intitule_profil }}" class="min-w-[22rem]" :dismissible="false">
          <form action="" method="POST">
            @csrf
            <div class="space-y-6">
            <div>
              <flux:heading size="lg">Ajouter un document</flux:heading>

              <flux:input type="file" name="" label="Documents signés" multiple />
            </div>

            <div class="flex gap-2">
              <flux:spacer />

              <flux:modal.close>
                <flux:button variant="ghost">Annuler</flux:button>
              </flux:modal.close>

              <flux:button type="submit" variant="primary">Enregistrer</flux:button>
            </div>
          </div>
          </form>
        </flux:modal>

        


        {{-- <form wire:submit="save"> 
            <label for="title">Title:</label>
 
            <input type="text" id="title" wire:model="title">
 
            <button type="submit">Save</button>
        </form> --}}
</div>
