@extends('user')

@section('title', '| Acceuil')

@section('content')

<div class="container mx-auto px-4 py-8">
  <div>
      <h2 class="text-xl font-semibold mb-4">
          Bienvenue, Jean Dupont
      </h2>
      <p class="text-muted-foreground mb-6">
          Voici un aperçu de votre activité dans le système de gestion des
          mobilités
      </p>
      <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="p-6 flex flex-row items-center justify-between space-y-0 pb-2">
                  <h3 class="tracking-tight text-sm font-medium">
                      Dossiers à traiter
                  </h3>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-folder-open h-5 w-5 text-blue-500">
                      <path
                          d="m6 14 1.5-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.54 6a2 2 0 0 1-1.95 1.5H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H18a2 2 0 0 1 2 2v2">
                      </path>
                  </svg>
              </div>
              <div class="p-6 pt-0">
                  <div class="text-2xl font-bold">
                      5
                  </div>
                  <p class="text-xs text-muted-foreground">
                      Dossiers en attente de validation
                  </p>
                  <div class="flex items-center mt-2 text-xs">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-arrow-up h-3 w-3 text-green-600 mr-1">
                          <path d="m5 12 7-7 7 7"></path>
                          <path d="M12 19V5"></path>
                      </svg><span class="text-green-600">2 nouveaux aujourd'hui</span>
                  </div>
              </div>
          </div>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="p-6 flex flex-row items-center justify-between space-y-0 pb-2">
                  <h3 class="tracking-tight text-sm font-medium">
                      Dossiers traités
                  </h3>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-file-check h-5 w-5 text-green-500">
                      <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                      <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                      <path d="m9 15 2 2 4-4"></path>
                  </svg>
              </div>
              <div class="p-6 pt-0">
                  <div class="text-2xl font-bold">
                      12
                  </div>
                  <p class="text-xs text-muted-foreground">
                      Ce mois-ci
                  </p>
                  <div class="flex items-center mt-2 text-xs">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-arrow-up h-3 w-3 text-green-600 mr-1">
                          <path d="m5 12 7-7 7 7"></path>
                          <path d="M12 19V5"></path>
                      </svg><span class="text-green-600">5 de plus que le mois dernier</span>
                  </div>
              </div>
          </div>
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="p-6 flex flex-row items-center justify-between space-y-0 pb-2">
                  <h3 class="tracking-tight text-sm font-medium">
                      Retours à faire
                  </h3>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-circle-alert h-5 w-5 text-red-500">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" x2="12" y1="8" y2="12"></line>
                      <line x1="12" x2="12.01" y1="16" y2="16"></line>
                  </svg>
              </div>
              <div class="p-6 pt-0">
                  <div class="text-2xl font-bold">
                      2
                  </div>
                  <p class="text-xs text-muted-foreground">
                      Dossiers nécessitant corrections
                  </p>
                  <div class="flex items-center mt-2 text-xs">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-arrow-down h-3 w-3 text-red-600 mr-1">
                          <path d="M12 5v14"></path>
                          <path d="m19 12-7 7-7-7"></path>
                      </svg><span class="text-red-600">1 de moins qu'hier</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="mt-6">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="flex flex-col space-y-1.5 p-6">
                  <h3 class="text-2xl font-semibold leading-none tracking-tight">
                      Dossiers à traiter en priorité
                  </h3>
                  <p class="text-sm text-muted-foreground">
                      Liste des dossiers nécessitant une attention immédiate
                  </p>
              </div>
              <div class="p-6 pt-0">
                  <div class="space-y-4">
                      <div
                          class="flex items-center justify-between p-4 border rounded-lg border-l-4 border-l-red-500">
                          <div class="flex flex-col">
                              <span class="font-medium">Détachement - Jean Koffi</span><span
                                  class="text-sm text-muted-foreground">Ref: DGFP-2023-045</span>
                          </div>
                          <div class="flex items-center gap-2">
                              <span class="text-sm text-red-600">En attente depuis 3 jours</span><button
                                  class="px-3 py-1 text-xs bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                  Traiter
                              </button>
                          </div>
                      </div>
                      <div
                          class="flex items-center justify-between p-4 border rounded-lg border-l-4 border-l-amber-500">
                          <div class="flex flex-col">
                              <span class="font-medium">Mise à disposition - Marie Sossou</span><span
                                  class="text-sm text-muted-foreground">Ref: DGFP-2023-046</span>
                          </div>
                          <div class="flex items-center gap-2">
                              <span class="text-sm text-amber-600">En attente depuis 2 jours</span><button
                                  class="px-3 py-1 text-xs bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                  Traiter
                              </button>
                          </div>
                      </div>
                      <div
                          class="flex items-center justify-between p-4 border rounded-lg border-l-4 border-l-blue-500">
                          <div class="flex flex-col">
                              <span class="font-medium">Disponibilité - Paul Gbaguidi</span><span
                                  class="text-sm text-muted-foreground">Ref: DGFP-2023-047</span>
                          </div>
                          <div class="flex items-center gap-2">
                              <span class="text-sm text-blue-600">Nouveau dossier</span><button
                                  class="px-3 py-1 text-xs bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                  Traiter
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection