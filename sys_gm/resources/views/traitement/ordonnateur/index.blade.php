@php

    function getetape($dossier)
    {
        return $derniereEtape = $dossier->etapes()->orderByPivot('created_at', 'desc')->first();
    }

@endphp


@extends('dashboard')

@section('title', '| Dossiers')

@section('content')


    @foreach ($dossiers as $dossier)
        <livewire:modal-show :$dossier />
        <livewire:upload-file :dossier="$dossier" />
    @endforeach

    @if(session('success'))
        {{-- <div class="alert alert-success">
        {{ session('success') }}
        </div> --}}
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Success alert!</span> {{ session('success') }}
            </div>
        </div>
    @endif



    <div class="">
        <div class="mb-8">
            <div class="bg-white mx-auto p-6 dark:bg-dark-800 rounded-xl border border-gray-200 shadow-sm">
                <div class="space-y-6">
                    <div class="flex flex-col">
                        @if (request()->routeIs('traitement.index'))
                            <h1 class="text-2xl font-bold tracking-tight">Dossiers en attente de traitement</h1>
                            <p class="text-muted-foreground">
                                Consulter les dossiers en attente de traitement.
                            </p>
                        @else
                            <h1 class="text-2xl font-bold tracking-tight">Dossiers reçus</h1>
                            <p class="text-muted-foreground">
                                Consulter la liste de dossiers que vous recever ou en attente de traitement.
                            </p>
                        @endif

                    </div>
                    <div class="space-y-6">
                        <div
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4">
                            <div class="space-y-4">
                                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                    <div class="relative w-full md:max-w-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                        <input type="search"
                                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 disabled:opacity-50 md:text-sm pl-8"
                                            placeholder="Rechercher un dossier..." />
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-filter h-4 w-4">
                                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                        </svg>
                                        Filtres avancés
                                    </button>
                                </div>
                                <div class="rounded-md border">
                                    <div class="relative w-full overflow-auto">
                                        
                                        <table class="min-w-full divide-y divide-gray-200 caption-bottom text-sm">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Code Dossier
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Nom Agent
                                                    </th>

                                                    @if (request()->routeIs('traitement.index'))
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Type de mobilité
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Structure actuelle
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Structure cible
                                                        </th>
                                                    @endif

                                                    @if (request()->routeIs('dossier.reçus'))
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Structure concernée
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Provient de
                                                        </th>
                                                    @endif

                                                    @auth
                                                        @if (auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel' ||
                                                                auth()->user()->profilActif()->intitule_profil == 'Agent DRSC')
                                                            <th scope="col"
                                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Titre
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Référence du Dossier
                                                            </th>
                                                        @endif
                                                    @endauth
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Statut dossier
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Statut traitement
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse ($dossiers as $dossier)
                                                    <tr class="hover:bg-gray-50 transition-colors">
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $dossier->code_dossier }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $dossier->nom_agent }}
                                                        </td>

                                                        @if (request()->routeIs('traitement.index'))
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                                {{ $dossier->typeMobilite->intitule_mobilite }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                                {{ $dossier->structure->code_structure }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                                {{ $dossier->structure_cible }}
                                                            </td>
                                                        @endif

                                                        @if (request()->routeIs('dossier.reçus'))
                                                            <td
                                                                class="px-6 py-3 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                                {{ $dossier->structure->code_structure }} @if (!isset($dossier->structure->code_structure))
                                                                    Aucun
                                                                @endif
                                                            </td>
                                                            <td
                                                                class="px-6 py-3 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                                {{ $dossier->envoyeur }} @if (!isset($dossier->envoyeur))
                                                                    Aucun
                                                                @endif
                                                            </td>
                                                        @endif

                                                        @auth
                                                            @if (auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel' ||
                                                                    auth()->user()->profilActif()->intitule_profil == 'Agent DRSC')
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                                    {{ isset($dossier->titre) }} @if (!isset($dossier->titre))
                                                                        Aucun
                                                                    @endif
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                                    {{ $dossier->reference_dossier }} @if (!isset($dossier->reference_dossier))
                                                                        Aucun
                                                                    @endif
                                                                </td>
                                                            @endif
                                                        @endauth

                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $dossier->statut }}
                                                        </td>

                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ getetape($dossier)->pivot->statut }}
                                                        </td>

                                                        <td
                                                            class="px-6 py-4 flex items-center whitespace-nowrap gap-2 justify-center text-right text-sm font-medium">
                                                            <div class="flex items-center space-x-2">

                                                              @if (request()->routeIs('traitement.index') && getetape($dossier)->pivot->statut == 'en attente')
                                                                @if (getetape($dossier)->id == 2 || getetape($dossier)->id == 5 || getetape($dossier)->id == 1)
                                                                  <flux:tooltip content="Consulter" position="bottom">
                                                                    <a
                                                                      href="{{ route('dossier.showdetails', $dossier) }}"
                                                                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                        <svg class="w-4 h-4" fill="currentColor"
                                                                            viewBox="0 0 20 20">
                                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </a>
                                                                  </flux:tooltip>
                                                                  <flux:tooltip content="Prendre en charge" position="bottom">
                                                                    <form action="{{ route('ordonnateur.traiter', $dossier) }}" method="POST">
                                                                      @csrf
                                                                      <button
                                                                        type="submit"
                                                                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                                                                            <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>
                                                                          </svg>
                                                                      </button>
                                                                    </form>
                                                                  </flux:tooltip>
                                                                @endif

                                                              @elseif (request()->routeIs('dossier.reçus'))
                                                                @if (getetape($dossier)->id == 2 || getetape($dossier)->id == 4 || getetape($dossier)->id == 1)
                                                                  <flux:tooltip content="Consulter" position="bottom">
                                                                    <a
                                                                      href="{{ route('dossier.reçus.showdetails', $dossier) }}"
                                                                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                        <svg class="w-4 h-4" fill="currentColor"
                                                                            viewBox="0 0 20 20">
                                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </a>
                                                                    
                                                                  </flux:tooltip>
                                                                  @if (getetape($dossier)->pivot->statut == 'en attente')
                                                                  <flux:tooltip content="Prendre en charge" position="bottom">
                                                                    <form action="{{ route('ordonnateur.traiter', $dossier) }}" method="POST">
                                                                      @csrf
                                                                      <button
                                                                        type="submit"
                                                                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                                                                            <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>
                                                                          </svg>
                                                                      </button>
                                                                    </form>
                                                                  </flux:tooltip>
                                                                  @endif
                                                                @endif
                                                              @else
                                                                <flux:tooltip content="Consulter" position="bottom">
                                                                    <a
                                                                      href="{{ route('dossier.reçus.showdetails', $dossier) }}"
                                                                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                        <svg class="w-4 h-4" fill="currentColor"
                                                                            viewBox="0 0 20 20">
                                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </a>
                                                                    
                                                                  </flux:tooltip>
                                                              @endif

                                                              {{-- @if (request()->routeIs('traitement.encours'))
                                                                
                                                                <flux:tooltip content="Consulter" position="bottom">
                                                                  <a
                                                                    href="{{ route('dossier.encours.showdetails', $dossier) }}"
                                                                      class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                      <svg class="w-4 h-4" fill="currentColor"
                                                                          viewBox="0 0 20 20">
                                                                          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                          <path fill-rule="evenodd"
                                                                              d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                              clip-rule="evenodd" />
                                                                      </svg>
                                                                  </a>
                                                                </flux:tooltip>
                                                                
                                                                <flux:dropdown position="bottom" align="end">
                
                                                                  <button
                                                                    class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                    <svg class="w-4 h-4" fill="currentColor"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                                    </svg>
                                                                  </button>

                                                                  
                                                                    <flux:menu>
                                                                        <flux:menu.radio.group>
                                                                          <flux:modal.trigger name="{{ $dossier->id }}">
                                                                            <flux:menu.item  icon="cog" class="hover:bg-blue-100! cursor-pointer" wire:navigate>{{ __('Traiter') }}</flux:menu.item>
                                                                          </flux:modal.trigger>                                                                            
                                                                        </flux:menu.radio.group>

                                                                        <flux:menu.separator />

                                                                        <flux:menu.radio.group>
                                                                            <flux:modal.trigger name="{{ $dossier->id }}.{{ auth()->user()->profilActif()->intitule_profil }}">
                                                                              <flux:menu.item  icon="document-plus" class="hover:bg-blue-100! cursor-pointer" wire:navigate>{{ __('Ajouter un document') }}</flux:menu.item>
                                                                            </flux:modal.trigger> 
                                                                        </flux:menu.radio.group>

                                                                    </flux:menu>

                                                                </flux:dropdown>
                                                              @endif --}}
                                                              
                                                            </div>
                                                            
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="10" class="px-6 py-4 justify-center whitespace-nowrap text-sm text-gray-500 text-center">
                                                            Aucun dossier en attente de traitement.
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" id="radix-:ro:-content-suivi" tabindex="0"
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hidden">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
