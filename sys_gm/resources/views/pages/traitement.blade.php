@extends('user')

@section('title', '| Pages')

@section('content')

        <!-- Liste Section -->
        <div class="mb-8">
            <div class="mx-auto p-6 dark:bg-dark-800 rounded-xl shadow-sm">
                <div class="space-y-6">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold tracking-tight">Dossiers à traiter</h1>
                      <p class="text-muted-foreground">
                        Traitez les demandes de mobilité et suivez l'état des dossiers en cours.
                      </p>
                    </div>
                  
                    <div class="space-y-6">
                      <div
                        class="inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground gap-2"
                        style="outline: none"
                      >

                            <flux:radio.group wire:model="role" variant="segmented">
                                <flux:radio label="Demandes à traiter" icon="wrench" checked />
                                <flux:radio label="Suivi de dossier (DEM-2025-001)" icon="pencil-square" />
                            </flux:radio.group>
                          
                      </div>
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
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-8"
                                placeholder="Rechercher une demande..."
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
                              <table class="w-full caption-bottom text-sm">
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

        <div class="mb-8">
            <div class="mx-auto p-6 dark:bg-dark-800 rounded-xl shadow-sm">
              <div class="space-y-6">
                <div class="flex flex-col">
                  <h1 class="text-2xl font-bold tracking-tight">
                    Dossiers à traiter
                  </h1>
                  <p class="text-muted-foreground">
                    Traitez les demandes de mobilité et suivez l'état des
                    dossiers en cours.
                  </p>
                </div>
                <div class="space-y-6">
                  <div
                    class="inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground"
                    style="outline: none"
                  >
                    <button
                      type="button"
                      role="tab"
                      id="radix-:ro:-trigger-demandes"
                      class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                    >
                      Demandes à traiter</button
                    ><button
                      type="button"
                      role="tab"
                      id="radix-:ro:-trigger-suivi"
                      class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                    >
                      Suivi de dossier (DEM-2025-001)
                    </button>
                  </div>
                  <div
                    class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4"
                  ></div>
                  <div
                    class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                  >
                    <div class="space-y-6">
                      <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold">
                          Suivi du dossier:
                          <span class="text-blue-700">DEM-2025-001</span>
                        </h2>
                        <div
                          class="inline-flex items-center rounded-md border px-2.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-yellow-100 text-yellow-800 text-sm py-1"
                        >
                          En traitement
                        </div>
                      </div>
                      <flux:radio.group wire:model="role" variant="segmented" class="flex items-center justify-between bg-white! border-none rounded-none! p-0!">
                          <flux:radio label="Timeline" checked class="p-2 text-blue! border-b-2 border-b-blue-500 rounded-none!" />
                          <flux:radio label="Documents" class="p-2 text-blue border-b-2 rounded-none!" />
                          <flux:radio label="Fiches agents" class="p-2 text-blue border-b-2 rounded-none!" />
                      </flux:radio.group>
                      <div class="space-y-4">
                        <div
                          class="inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground"
                          style="outline: none"
                        >
                          <button
                            type="button"
                            role="tab"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                          >
                            Timeline</button
                          ><button
                            type="button"
                            role="tab"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                          >
                            Documents</button
                          ><button
                            type="button"
                            role="tab"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 "
                          >
                            Fiche agent
                          </button>
                        </div>
                        <div
                          class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4"
                        >
                          <div
                            class="relative pl-8 border-l-2 border-gray-200 space-y-10 py-4"
                          >
                            <div class="relative">
                              <div class="absolute -left-[41px] mt-1.5">
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
                                  class="lucide lucide-circle-check-big h-6 w-6 text-green-500"
                                >
                                  <path
                                    d="M21.801 10A10 10 0 1 1 17 3.335"
                                  ></path>
                                  <path d="m9 11 3 3L22 4"></path>
                                </svg>
                              </div>
                              <div class="mb-1 flex items-baseline">
                                <h3 class="text-lg font-medium">
                                  Soumission initiale
                                </h3>
                                <span class="ml-2"
                                  ><div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 bg-green-100 text-green-800 text-xs"
                                  >
                                    Complété
                                  </div></span
                                >
                              </div>
                              <div class="space-y-2 text-sm">
                                <div class="flex items-center text-gray-600">
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
                                    class="lucide lucide-calendar h-4 w-4 mr-2"
                                  >
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect
                                      width="18"
                                      height="18"
                                      x="3"
                                      y="4"
                                      rx="2"
                                    ></rect>
                                    <path d="M3 10h18"></path>
                                  </svg>
                                  2025-04-15 09:30
                                </div>
                                <div class="flex items-center text-gray-600">
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
                                    class="lucide lucide-user h-4 w-4 mr-2"
                                  >
                                    <path
                                      d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"
                                    ></path>
                                    <circle
                                      cx="12"
                                      cy="7"
                                      r="4"
                                    ></circle></svg>
                                    Kofi Adéchola (Agent)
                                </div>
                                <div class="flex items-baseline mt-1">
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
                                    class="lucide lucide-info h-4 w-4 mr-2 text-gray-600 flex-shrink-0"
                                  >
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                  </svg>
                                  <p class="text-gray-600">
                                    Demande de détachement soumise avec tous
                                    les documents requis
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="relative">
                              <div class="absolute -left-[41px] mt-1.5">
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
                                  class="lucide lucide-clock h-6 w-6 text-blue-500"
                                >
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <polyline
                                    points="12 6 12 12 16 14"
                                  ></polyline>
                                </svg>
                              </div>
                              <div class="mb-1 flex items-baseline">
                                <h3 class="text-lg font-medium">
                                  Validation Ordonnateur Sectoriel
                                </h3>
                                <span class="ml-2"
                                  ><div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 bg-blue-100 text-blue-800 text-xs"
                                  >
                                    En cours
                                  </div></span
                                >
                              </div>
                              <div class="space-y-2 text-sm">
                                <div class="flex items-center text-gray-600">
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
                                    class="lucide lucide-user h-4 w-4 mr-2"
                                  >
                                    <path
                                      d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"
                                    ></path>
                                    <circle
                                      cx="12"
                                      cy="7"
                                      r="4"
                                    ></circle></svg> 
                                    Marc Ahouannou (Ordonnateur Sectoriel)
                                </div>
                              </div>
                            </div>
                            <div class="relative">
                              <div class="absolute -left-[41px] mt-1.5">
                                <div class="h-6 w-6 text-gray-300">
                                  <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <circle cx="12" cy="12" r="10"></circle>
                                  </svg>
                                </div>
                              </div>
                              <div class="mb-1 flex items-baseline">
                                <h3 class="text-lg font-medium">
                                  Signature Responsable Sectoriel
                                </h3>
                                <span class="ml-2"></span>
                              </div>
                            </div>
                            <div class="relative">
                              <div class="absolute -left-[41px] mt-1.5">
                                <div class="h-6 w-6 text-gray-300">
                                  <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <circle cx="12" cy="12" r="10"></circle>
                                  </svg>
                                </div>
                              </div>
                              <div class="mb-1 flex items-baseline">
                                <h3 class="text-lg font-medium">
                                  Paraphe DRSC
                                </h3>
                                <span class="ml-2"></span>
                              </div>
                            </div>
                            <div class="relative">
                              <div class="absolute -left-[41px] mt-1.5">
                                <div class="h-6 w-6 text-gray-300">
                                  <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <circle cx="12" cy="12" r="10"></circle>
                                  </svg>
                                </div>
                              </div>
                              <div class="mb-1 flex items-baseline">
                                <h3 class="text-lg font-medium">
                                  Paraphe DGFP
                                </h3>
                                <span class="ml-2"></span>
                              </div>
                            </div>
                            <div class="relative">
                              <div class="absolute -left-[41px] mt-1.5">
                                <div class="h-6 w-6 text-gray-300">
                                  <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <circle cx="12" cy="12" r="10"></circle>
                                  </svg>
                                </div>
                              </div>
                              <div class="mb-1 flex items-baseline">
                                <h3 class="text-lg font-medium">
                                  Décision finale MTFP
                                </h3>
                                <span class="ml-2"></span>
                              </div>
                            </div>
                            <div class="relative">
                              <div class="absolute -left-[41px] mt-1.5">
                                <div class="h-6 w-6 text-gray-300">
                                  <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <circle cx="12" cy="12" r="10"></circle>
                                  </svg>
                                </div>
                              </div>
                              <div class="mb-1 flex items-baseline">
                                <h3 class="text-lg font-medium">
                                  Archivage RH
                                </h3>
                                <span class="ml-2"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4"
                        ></div>
                        <div
                          class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg">
          <div class="px-4 py-5 sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                  Traitement de la Demande
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                  #{request.id} - {request.type}
                </p>
                <div class="mt-4">
                  <span
                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800"
                  >
                    En attente de traitement
                  </span>
                </div>
              </div>

              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="grid grid-cols-1 gap-6">
                  <!-- Informations de base -->
                  <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="text-sm font-medium text-gray-500">
                      Informations
                    </h4>
                    <dl
                      class="mt-2 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2"
                    >
                      <div>
                        <dt class="text-sm font-medium text-gray-500">
                          Agent
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          {request.agent}
                        </dd>
                      </div>
                      <div>
                        <dt class="text-sm font-medium text-gray-500">
                          Service
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          {request.department}
                        </dd>
                      </div>
                      <div>
                        <dt class="text-sm font-medium text-gray-500">
                          Date de soumission
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          {new
                          Date(request.date).toLocaleDateString('fr-FR')}
                        </dd>
                      </div>
                    </dl>
                  </div>

                  <!-- Documents -->
                  <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-4">
                      Documents
                    </h4>
                    <ul
                      class="divide-y divide-gray-200 border border-gray-200 rounded-md"
                    >
                      <li
                        class="px-4 py-3 flex items-center justify-between text-sm"
                      >
                        <div class="flex items-center">
                          <FileText class="h-5 w-5 text-gray-400 mr-2" />
                          <span class="text-gray-900">{doc.name}</span>
                        </div>
                        <div class="flex space-x-2">
                          <button
                            type="button"
                            class="inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                          >
                            <!-- <Download class="h-4 w-4 mr-1" /> -->
                            Télécharger
                          </button>
                        </div>
                      </li>
                    </ul>
                    <div class="mt-4">
                      <label
                        class="block text-sm font-medium text-gray-700"
                      >
                        Ajouter un document
                      </label>
                      <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                      >
                        <div class="space-y-1 text-center">
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
                              class="mx-auto h-12 w-12 text-gray-400"
                            >
                            <path
                              d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                            ></path>
                            <polyline points="17 8 12 3 7 8"></polyline>
                            <line x1="12" x2="12" y1="3" y2="15"></line>
                          </svg>
                          <!-- <Upload class="" /> -->
                          <div class="flex text-sm text-gray-600">
                            
                            <label
                              htmlFor="file-upload"
                              class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500"
                            >
                              <span>Télécharger un fichier</span>
                              <input
                                id="file-upload"
                                name="file-upload"
                                type="file"
                                class="sr-only"
                              />
                            </label>
                            <p class="pl-1">ou glisser-déposer</p>
                          </div>
                          
                          <p class="text-xs text-gray-500">
                            PDF jusqu'à 10MB
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Historique -->
                  <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-4">
                      Historique
                    </h4>
                    <div class="flow-root">
                      <ul class="-mb-8">
                        <li>
                          <div class="relative pb-8">
                            <span
                              class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                            ></span>
                            <div class="relative flex space-x-3">
                              <div>
                                <span
                                  class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white"
                                >
                                  <CheckCircle class="h-5 w-5 text-white" />
                                </span>
                              </div>
                              <div
                                class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4"
                              >
                                <div>
                                  <p class="text-sm text-gray-500">
                                    {event.action} par
                                    <span class="font-medium text-gray-900"
                                      >{event.actor}</span
                                    >
                                  </p>
                                  <p class="mt-1 text-sm text-gray-500">
                                    {event.comment}
                                  </p>
                                </div>
                                <div
                                  class="text-right text-sm whitespace-nowrap text-gray-500"
                                >
                                  {new
                                  Date(event.date).toLocaleDateString('fr-FR')}
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <!-- Actions -->
                  <div class="border-t border-gray-200 pt-4">
                    <div class="flex flex-col space-y-4">
                      <div>
                        <label
                          htmlFor="comment"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Commentaire
                        </label>
                        <div class="mt-1">
                          <textarea
                            id="comment"
                            rows="3"
                            class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md"
                          ></textarea>
                        </div>
                      </div>
                      <div class="flex justify-end space-x-3">
                        <button
                          type="button"
                          class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                        >
                          <!-- <MessageSquare class="h-4 w-4 mr-2" /> -->
                          Demander des modifications
                        </button>
                        <button
                          type="button"
                          class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                        >
                          <!-- <XCircle class="h-4 w-4 mr-2" /> -->
                          Rejeter
                        </button>
                        <button
                          type="button"
                          class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                        >
                          <!-- <CheckCircle class="h-4 w-4 mr-2" /> -->
                          Approuver
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        {{-- <div class="bg-white shadow rounded-lg">
          <div
            role="dialog"
            class="fixed left-[50%] top-[50%] z-50 grid w-full translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background p-6 shadow-lg duration-200 sm:rounded-lg max-w-3xl"
            style="pointer-events: auto"
          >
            <div class="flex flex-col space-y-1.5 text-center sm:text-left">
              <h2 class="text-lg font-semibold leading-none tracking-tight">
                Détails de la demande DEM-2025-001
              </h2>
            </div>
            <div  class="mt-4 space-y-6"
            >
              <div  class="grid grid-cols-1 md:grid-cols-2 gap-4"
              >
                <div
                >
                  <h3
                    class="font-semibold mb-2"
                  >
                    Information sur l'agent
                  </h3>
                  <div class="grid grid-cols-2 gap-2 text-sm"
                  >
                    <div class="font-medium"
                    >
                      Nom complet:
                    </div>
                    <div
                    >
                      Adéchola Kofi
                    </div>
                    <div class="font-medium"
                    >
                      Matricule:
                    </div>
                    <div
                    >
                      AP2023-1234
                    </div>
                    <div class="font-medium"
                    >
                      Service:
                    </div>
                    <div
                    >
                      Ministère de l'Économie
                    </div>
                    <div class="font-medium"
                    >
                      Type de demande:
                    </div>
                    <div
                    >
                      Détachement
                    </div>
                    <div class="font-medium"
                    >
                      Date de soumission:
                    </div>
                    <div
                    >
                      2025-04-15
                    </div>
                  </div>
                </div>
                <div>
                  <h3 class="font-semibold mb-2"
                  >
                    Documents joints
                  </h3>
                  <div class="space-y-2 max-h-40 overflow-y-auto"
                  >
                    <div class="flex items-center justify-between p-2 border rounded-md hover:bg-gray-50 cursor-pointer"
                    >
                      <div class="flex items-center"
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
                          class="lucide lucide-file-text h-4 w-4 mr-2 text-blue-600"
                        >
                          <path
                            d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                          ></path>
                          <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                          <path d="M10 9H8"></path>
                          <path d="M16 13H8"></path>
                          <path d="M16 17H8"></path>
                        </svg>
                        <span class="text-sm"
                          >Certificat de cessation de paiement</span
                        >
                      </div>
                      <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
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
                          class="lucide lucide-download h-4 w-4"
                        >
                          <path
                            d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                          ></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="flex items-center justify-between p-2 border rounded-md hover:bg-gray-50 cursor-pointer"
                    >
                      <div class="flex items-center">
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
                          class="lucide lucide-file-text h-4 w-4 mr-2 text-blue-600"
                        >
                          <path
                            d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                          ></path>
                          <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                          <path d="M10 9H8"></path>
                          <path d="M16 13H8"></path>
                          <path d="M16 17H8"></path>
                        </svg>
                        <span class="text-sm">Formulaire de demande</span>
                      </div>
                      <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
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
                          class="lucide lucide-download h-4 w-4"
                        >
                          <path
                            d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                          ></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="flex items-center justify-between p-2 border rounded-md hover:bg-gray-50 cursor-pointer"
                    >
                      <div class="flex items-center"
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
                          class="lucide lucide-file-text h-4 w-4 mr-2 text-blue-600"
                        >
                          <path
                            d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                          ></path>
                          <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                          <path d="M10 9H8"></path>
                          <path d="M16 13H8"></path>
                          <path d="M16 17H8"></path>
                        </svg>
                        <span class="text-sm">Pièces justificatives</span>
                      </div>
                      <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
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
                          class="lucide lucide-download h-4 w-4"
                        >
                          <path
                            d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                          ></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="mt-4">
                    <button
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full"
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
                        class="lucide lucide-upload h-4 w-4 mr-2"
                      >
                        <path
                          d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                        ></path>
                        <polyline points="17 8 12 3 7 8"></polyline>
                        <line x1="12" x2="12" y1="3" y2="15"></line>
                      </svg>
                      Ajouter un document signé
                    </button>
                  </div>
                </div>
              </div>
              <div class="space-y-2">
                <h3 class="font-semibold">Commentaire / Avis</h3>
                <textarea
                  class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-24"
                  placeholder="Saisissez votre commentaire, avis ou motif de rejet..."
                ></textarea>
              </div>
              <div class="flex flex-wrap gap-2 justify-end">
                <button
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                  type="button"
                >
                  Fermer</button
                ><button
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  border hover:text-accent-foreground h-10 px-4 py-2 bg-blue-50 text-blue-700 border-blue-200 hover:bg-blue-100 hover:border-blue-300"
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
                    class="lucide lucide-message-circle h-4 w-4 mr-2"
                  >
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                  </svg>
                  Demander des modifications</button
                ><button
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  border hover:text-accent-foreground h-10 px-4 py-2 bg-red-50 text-red-700 border-red-200 hover:bg-red-100 hover:border-red-300"
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
                    class="lucide lucide-circle-x h-4 w-4 mr-2"
                  >
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="m15 9-6 6"></path>
                    <path d="m9 9 6 6"></path>
                  </svg>
                  Rejeter</button
                ><button
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  text-primary-foreground h-10 px-4 py-2 bg-green-600 hover:bg-green-700"
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
                    class="lucide lucide-circle-check-big h-4 w-4 mr-2"
                  >
                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                    <path d="m9 11 3 3L22 4"></path>
                  </svg>
                  Approuver</button
                ><button
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50  bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 ml-4"
                >
                  Suivi du dossier
                </button>
              </div>
            </div>
            <button
              type="button"
              class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none"
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
                class="lucide lucide-x h-4 w-4"
              >
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
              <span class="sr-only">Close</span>
            </button>
          </div>
        </div> --}}

@endsection

