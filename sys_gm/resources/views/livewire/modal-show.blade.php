<div>
    @php

    $dossier ??= null;
    $EtapeActuelle ??= 'Introuvable';
    $hasroute ??= false;
    $route_form ??= null;
    $route_valider ??= null;
    $route_soumettre ??= null;
    $route_refuser ??= null;


    if (auth()->user()->profilActif()->intitule_profil == 'Agent DRSC') {
        $hasroute = true;
        $route_valider = 'drsc.valider';
        $route_soumettre = '';
        $route_refuser = '';
    }

    if (auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') {
        $hasroute = true;
        $route_valider = route('ordonnateur.valider', $dossier);
        $route_soumettre = route('ordonnateur.soumettre', $dossier);
        $route_refuser = '';
    }

    if (getetape($dossier)->pivot->statut != 'validé') {
        $route_form=$route_valider;
    }else{
        $route_form=$route_soumettre;
    }

    



// class ShowPost extends \Livewire\Component {
//     public function delete() {
//         // Control "confirm" modals anywhere on the page...
//         Flux::modal('confirm')->show();
//         Flux::modal('confirm')->close();

//         // Control "confirm" modals within this Livewire component...
//         $this->modal('confirm')->show();
//         $this->modal('confirm')->close();

//         // Closes all modals on the page...
//         Flux::modals()->close();
//     }
// }

    @endphp







@if ($dossier != null)


    @if ($hasroute)

    <div>
        <flux:modal name="{{ $dossier->id }}" class="bg-white grid w-full gap-4 sm:rounded-lg max-w-3xl pointer-events-auto" :dismissible="false">
            <div class="space-y-6">
                <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                    <h2 class="text-lg font-semibold leading-none tracking-tight">
                        Détails de la demande {{ $dossier->code_dossier }}
                    </h2>
                </div>

                <div class="mt-4 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h3 class="font-semibold mb-2">
                                Information sur l'agent
                            </h3>
                            <div class="grid grid-cols-2 gap-2 text-sm">
                                <div class="font-medium">
                                    Nom complet:
                                </div>
                                <div>
                                    {{ $dossier->agent->prenom }} {{ $dossier->agent->nom }}
                                </div>
                                <div class="font-medium">
                                    Matricule:
                                </div>
                                <div>
                                    {{ $dossier->agent->matricule }}
                                </div>
                                <div class="font-medium">
                                    Structure actuelle:
                                </div>
                                <div>
                                    {{ $dossier->structure->nom_structure }}
                                </div>
                                <div class="font-medium">
                                    Type de demande:
                                </div>
                                <div>
                                    {{ $dossier->typemobilite->intitule_mobilite }}
                                </div>
                                <div class="font-medium">
                                    Date de soumission:
                                </div>
                                <div>
                                    {{ $dossier->created_at->format('d/m/Y') }}
                                </div>
                                <div class="font-medium">
                                    Etape actuelle:
                                </div>
                                <div>
                                    {{ $EtapeActuelle = getetape($dossier)->nom }}
                                </div>
                                
                            </div>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">
                                Documents joints
                            </h3>
                            <div class="space-y-2 max-h-40 overflow-y-auto">
                                @if ($dossier->piecesJustificatives->isNotEmpty())
                                    @foreach ($dossier->piecesJustificatives as $document)
                                        <div
                                            class="flex items-center justify-between p-2 border rounded-md hover:bg-gray-50 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text h-6 w-6 mr-2 text-blue-600">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                            </svg>
                                            <div class="flex flex-wrap items-center">
                                                <div class="flex item-center">
                                                <span class="text-sm">{{ $document->nom_du_fichier }}</span>
                                                </div>
                                                <span
                                                    class="text-xs text-gray-500">{{ number_format(Storage::size($document->lien) / 1024, 2) }}
                                                    KB</span>

                                            </div>
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-download h-4 w-4">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" x2="12" y1="15" y2="3">
                                                    </line>
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-gray-600 text-sm">Aucun document joint.</p>
                                @endif
                            </div>
                            <div class="mt-4">
                            </div>
                        </div>
                    </div>

                <form action="{{ $route_form }}" method="post">
                    @csrf
                    <div class="space-y-2">
                        <h3 class="font-semibold">Commentaire / Avis</h3>
                        <textarea
                            class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-24"
                            placeholder="Saisissez votre commentaire, avis ou motif de rejet..."></textarea>
                    </div>

                    <div class="mt-4 flex flex-wrap gap-2 justify-between">

                        <div></div>
                            
                        
                        <div class="flex flex-wrap gap-2 justify-end">
                            @if(getetape($dossier)->pivot->statut == 'en cours')

                            <div class="flex flex-wrap gap-2 justify-end">
                                <flux:modal.close>                                
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  border hover:text-black h-10 px-4 py-2 bg-red-500 text-white border-red-200 hover:bg-red-100 hover:border-red-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-circle-x h-4 w-4 mr-2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                        Rejeter
                                    </button>
                                </flux:modal.close>

                                



                                <flux:modal.close>
                                    <button
                                        type="submit"
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border  text-white h-10 px-4 py-2 bg-green-600 hover:bg-green-200 hover:border-green-700 hover:text-black cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 mr-2">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        Valider
                                    </button>
                                 </flux:modal.close>

                            </div>

                            @else
                            
                            <flux:modal.close>
                                
                                <button
                                type="submit"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border  text-white h-10 px-4 py-2 bg-blue-600 hover:bg-blue-200 hover:border-blue-700 hover:text-black cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 mr-2">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                                    Soumettre
                                </button>
                            </flux:modal.close>
                        @endif
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </flux:modal>
    </div>

    @else
    <div>
        <flux:modal name="{{ $dossier->id }}" class="grid w-full gap-4 sm:rounded-lg max-w-3xl pointer-events-auto">
            <div>Profil non autorisé</div>
        </flux:modal>
    </div>
    @endif

@else

<div>
    <flux:modal name="error" class="grid w-full gap-4 sm:rounded-lg max-w-3xl pointer-events-auto">
        <div class="space-y-6">
            Oups! Aucun dossier trouvé
        </div>
    </flux:modal>
</div>
@endif



</div>
