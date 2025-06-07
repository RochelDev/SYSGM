@extends('admin')

@section('title', '| Admin')

@section('content')
    <!-- Tableau de bord -->
    <div class="container mx-auto px-4 py-8">
        <div>
            <h2 class="text-xl font-semibold mb-4">
                Bienvenue, Administrateur
            </h2>
            {{-- <p class="text-muted-foreground mb-6">
                Voici un aperçu de votre activité dans le système de gestion des
                mobilités
            </p> --}}
            {{-- <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
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
            </div> --}}
        </div>
      </div>
@endsection