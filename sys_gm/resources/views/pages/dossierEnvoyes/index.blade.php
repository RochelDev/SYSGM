@php
  $dossiers=$dossiersreçus
@endphp

@extends('dashboard')

@section('title', '| Document')

@section('content')
    <!-- Affectation -->

    <div class="">
        <div class="mb-8">
            <div class="bg-white mx-auto p-6 dark:bg-dark-800 rounded-xl border border-gray-200 shadow-sm">
                <div class="space-y-6">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold tracking-tight">Dossiers à traiter</h1>
                      <p class="text-muted-foreground">
                        Traitez les dossiers de mobilité et suivez l'état des dossiers en cours.
                      </p>
                    </div>
                    <div class="space-y-6">
                      <div
                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4"
                      >
                        <div class="space-y-4">
                          <div
                            class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between"
                          >
                            <div class="relative w-full md:max-w-sm">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground"
                              >
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                              </svg>
                              <input
                                type="search"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 disabled:opacity-50 md:text-sm pl-8"
                                placeholder="Rechercher un dossier..."
                              />
                            </div>
                            <button
                              class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-filter h-4 w-4"
                              >
                                <polygon
                                  points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"
                                ></polygon>
                              </svg>
                              Filtres avancés
                            </button>
                          </div>
                          <div class="rounded-md border">
                            <div class="relative w-full overflow-auto">
                              {{-- <table class="w-full caption-bottom text-sm">
                                <thead>
                                  <tr
                                    class="border-b transition-colors hover:bg-muted/50"
                                  >
                                    <th
                                      class="h-12 px-4 text-left align-middle font-medium text-muted-foreground"
                                    >
                                      Référence
                                    </th>
                                    <th
                                      class="h-12 px-4 text-left align-middle font-medium text-muted-foreground"
                                    >
                                      Date
                                    </th>
                                    <th
                                      class="h-12 px-4 text-left align-middle font-medium text-muted-foreground "
                                    >
                                      Agent
                                    </th>
                                    <th
                                      class="h-12 px-4 text-left align-middle font-medium text-muted-foreground "
                                    >
                                      Matricule
                                    </th>
                                    <th
                                      class="h-12 px-4 text-left align-middle font-medium text-muted-foreground "
                                    >
                                      Type de demande
                                    </th>
                                    <th
                                      class="h-12 px-4 text-left align-middle font-medium text-muted-foreground "
                                    >
                                      Service demandeur
                                    </th>
                                    <th
                                      class="h-12 px-4 text-left align-middle font-medium text-muted-foreground "
                                    >
                                      État
                                    </th>
                                    <th
                                      class="h-12 px-4 align-middle font-medium text-muted-foreground text-right"
                                    >
                                      Actions
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    class="border-b transition-colors hover:bg-muted/50"
                                  >
                                    <td class="p-4 align-middle ">DEM-2025-001</td>
                                    <td class="p-4 align-middle ">2025-04-15</td>
                                    <td class="p-4 align-middle ">Adéchola Kofi</td>
                                    <td class="p-4 align-middle ">AP2023-1234</td>
                                    <td class="p-4 align-middle ">Détachement</td>
                                    <td class="p-4 align-middle ">Ministère de l'Économie</td>
                                    <td class="p-4 align-middle ">
                                      <div
                                        class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-yellow-100 text-yellow-800"
                                      >
                                        En attente
                                      </div>
                                    </td>
                                    <td class="p-4 align-middle text-right">
                                      <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
                                        type="button"
                                      >
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="24"
                                          height="24"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          class="lucide lucide-file-text h-4 w-4 mr-1"
                                        >
                                          <path
                                            d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                                          ></path>
                                          <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                          <path d="M10 9H8"></path>
                                          <path d="M16 13H8"></path>
                                          <path d="M16 17H8"></path>
                                        </svg>
                                        Voir
                                      </button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table> --}}
                              <table class="min-w-full divide-y divide-gray-200 caption-bottom text-sm">
                                <thead class="bg-gray-50">
                                  <tr>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Code Dossier
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom Agent
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type de mobilité
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Structure actuelle
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Structure cible
                                  </th>
                                  @auth
                                  @if(auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel' || auth()->user()->profilActif()->intitule_profil == 'Agent DRSC')
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Titre
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Référence du Dossier
                                      </th>
                                  @endif
                                  @endauth
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Statut
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Actions
                                    </th>
                                  </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                  @foreach($dossiers as $dossier)
                                  <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                        {{ $dossier->code_dossier }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $dossier->nom_agent }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        {{ $dossier->typeMobilite->intitule_mobilite }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                        {{ $dossier->structure->code_structure }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                        {{ $dossier->structure_cible }}
                                    </td>
                                    @auth
                                    @if(auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel' || auth()->user()->profilActif()->intitule_profil == 'Agent DRSC' )
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{ isset($dossier->titre) }} @if (!isset($dossier->titre)) Aucun @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{ $dossier->reference_dossier }} @if (!isset($dossier->reference_dossier)) Aucun @endif
                                        </td>
                                    @endif
                                    @endauth
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                        {{ $dossier->statut }}
                                    </td>
                                    <td class="px-6 py-4 flex items-center whitespace-nowrap gap-2 text-right text-sm font-medium">
                                        <a class="inline-flex items-center justify-center p-2 bg-blue-500 rounded-lg text-white hover:p-1.5" 
                                        href="{{ route('dossier.show', $dossier) }}">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-file-text h-4 w-4 mr-1">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                          </svg>
                                          Voir
                                        </a>
                                        <a class="p-2 bg-[#0F2C59] rounded-lg text-white hover:p-1.5" href="{{ route('dossier.show', $dossier) }}">traiter</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        role="tabpanel"
                        id="radix-:ro:-content-suivi"
                        tabindex="0"
                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hidden"
                      ></div>
                    </div>
                  </div>
            </div>
        </div>



        





    </div>
    
@endsection