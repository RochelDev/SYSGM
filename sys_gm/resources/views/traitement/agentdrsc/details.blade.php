@extends('dashboard')

@section('title', '| Document')

@section('content')
    <!-- Affectation -->
    <div class="">
        <div class="fade-in">
            <div class="mb-6">
                {{-- @if (Route::Has('traitement.index'))
                traitement
                @endif
                @if (Route::has('traitement.encours'))
                traitement en cours
                @endif
                @if (Route::has('traitement.index'))
                traitement reçus
                @endif --}}
                <a href="{{url('/dossiers')}}" class="inline-flex items-center text-gray-600 hover:text-gray-800 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left mr-1">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path></svg>
                    Retour aux dossiers
                </a>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800 mb-2">
                            Dossier #{{ $dossier->code_dossier }} 
                        </h1>
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 mr-2">
                                {{ $dossier->statut }}
                            </span>
                            <span class="text-gray-600">{{ $dossier->created_at->format('d/m/Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2">
                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-6">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">
                                Détails du dossier
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Type de mobilité
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">{{ $dossier->typemobilite->intitule_mobilite }}</p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Agent concerné
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        {{ $dossier->agent->prenom }} {{ $dossier->agent->nom }}
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Structure actuelle
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        {{ $dossier->structure->nom_structure }}
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Structure de destination
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        {{ $dossier->structure_cible }}
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Date de soumission
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        {{ $dossier->created_at->format('d/m/Y') }}
                                    </p>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Suivi du Dossier
                                    </h3>
                                    @if ($dossier->etapes->isNotEmpty())
                                        @foreach ($dossier->etapes as $etape)
                                            <div
                                            >
                                            <p class="mt-1 text-base text-gray-800">
                                                {{ $etape->nom }} : {{ $etape->pivot->statut }}
                                            </p>                                              
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="text-gray-600 text-sm">Aucune étape répertorié.</p>
                                    @endif
                                </div>
                                {{-- <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Date souhaitée
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        15/04/2025
                                    </p>
                                </div> --}}
                            </div>
                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">
                                    Motif du dossier
                                </h3>
                                <p class="mt-1 text-base text-gray-800">
                                    {{ $dossier->motif }} @if ($dossier->motif == null) Aucun @endif

                                </p>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500 mb-2">
                                    Documents joints
                                </h3>
                                <div class="space-y-2">
                                    @if ($dossier->piecesJustificatives->isNotEmpty())
                                        @foreach ($dossier->piecesJustificatives as $document)
                                            <div
                                                class="flex items-center p-3 border border-gray-200 rounded-md hover:bg-gray-50"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-file-text text-gray-500 mr-3"
                                                >
                                                    <path
                                                        d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                                                    ></path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg>
                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-800">
                                                        {{ $document->nom_du_fichier }}
                                                        {{-- @dd($document) --}}
                                                    </p>
                                                    <p class="text-xs text-gray-500">{{ number_format(Storage::size($document->lien) / 1024, 2) }} KB</p>
                                                </div>
                                                {{-- <a href="{{ route('documents.download', $document->id) }}" class="p-2 text-[#0F2C59] hover:text-[#4CB9E7] transition-colors" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download" >
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15" y2="3"></line>
                                                    </svg>
                                                </a> --}}
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="text-gray-600 text-sm">Aucun document joint.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-6">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">
                                Historique de la dossier
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-8">
                                <div class="relative">
                                    <div
                                        class="absolute top-6 left-4 w-0.5 h-full bg-gray-200 -z-10"
                                    ></div>
                                    <div class="flex items-start">
                                        <div
                                            class="h-8 w-8 rounded-full flex items-center justify-center flex-shrink-0 bg-blue-100 text-blue-600"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-clock"
                                            >
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline
                                                    points="12 6 12 12 16 14"
                                                ></polyline>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p
                                                class="text-sm font-medium text-gray-800"
                                            >
                                                Demande créée
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1">
                                                10/03/2025 par Kofi Amoah
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div
                                        class="absolute top-6 left-4 w-0.5 h-full bg-gray-200 -z-10"
                                    ></div>
                                    <div class="flex items-start">
                                        <div
                                            class="h-8 w-8 rounded-full flex items-center justify-center flex-shrink-0 bg-blue-100 text-blue-600"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-clock"
                                            >
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline
                                                    points="12 6 12 12 16 14"
                                                ></polyline>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p
                                                class="text-sm font-medium text-gray-800"
                                            >
                                                Demande soumise pour approbation
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1">
                                                12/03/2025 par Kofi Amoah
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div
                                        class="absolute top-6 left-4 w-0.5 h-full bg-gray-200 -z-10"
                                    ></div>
                                    <div class="flex items-start">
                                        <div
                                            class="h-8 w-8 rounded-full flex items-center justify-center flex-shrink-0 bg-blue-100 text-blue-600"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-clock"
                                            >
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline
                                                    points="12 6 12 12 16 14"
                                                ></polyline>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p
                                                class="text-sm font-medium text-gray-800"
                                            >
                                                Demande examinée par le Directeur RH
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1">
                                                14/03/2025 par Amadou Diallo
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div class="flex items-start">
                                        <div
                                            class="h-8 w-8 rounded-full flex items-center justify-center flex-shrink-0 bg-green-100 text-green-600"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-check-circle"
                                            >
                                                <path
                                                    d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
                                                ></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p
                                                class="text-sm font-medium text-gray-800"
                                            >
                                                Demande approuvée par la Directrice
                                                Budget
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1">
                                                15/03/2025 par Marie Acogny
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                
                <div>
                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-6">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">
                                Détails de l'agent
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-6">
                                <div
                                    class="h-16 w-16 rounded-full bg-[#0F2C59] flex items-center justify-center text-white text-lg font-semibold"
                                >
                                    A
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800">
                                        {{ $dossier->agent->prenom }} {{ $dossier->agent->nom }}
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                       Grade {{ $dossier->agent->grade }}
                                    </p>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <h4
                                        class="text-xs font-medium text-gray-500 uppercase"
                                    >
                                        Matricule
                                    </h4>
                                    <p class="mt-1 text-sm text-gray-800">{{ $dossier->agent->matricule }}</p>
                                </div>
                                <div>
                                    <h4
                                        class="text-xs font-medium text-gray-500 uppercase"
                                    >
                                        Email
                                    </h4>
                                    <p class="mt-1 text-sm text-gray-800">
                                        {{ $dossier->agent->user->email }}
                                    </p>
                                </div>
                                {{-- <div>
                                    <h4
                                        class="text-xs font-medium text-gray-500 uppercase"
                                    >
                                        Téléphone
                                    </h4>
                                    <p class="mt-1 text-sm text-gray-800">
                                        +229 97 123 456
                                    </p>
                                </div> --}}
                                <div>
                                    <h4
                                        class="text-xs font-medium text-gray-500 uppercase"
                                    >
                                        Service actuel
                                    </h4>
                                    <p class="mt-1 text-sm text-gray-800">
                                        {{ $dossier->agent->structure->nom_structure }}
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a
                                    class="text-[#0F2C59] hover:text-[#4CB9E7] text-sm font-medium inline-flex items-center"
                                    >Voir le profil complet</a
                                >
                            </div>
                        </div>
                    </div>
                    {{-- <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-6">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">
                                Approbation
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-check-circle text-green-500 mr-2"
                                >
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                                <p class="text-sm font-medium text-gray-800">
                                    Approuvée le 15/03/2025
                                </p>
                            </div>
                            <div>
                                <h4
                                    class="text-xs font-medium text-gray-500 uppercase mb-1"
                                >
                                    Approuvé par
                                </h4>
                                <p class="text-sm text-gray-800">Amadou Diallo</p>
                            </div>
                            <div class="mt-6">
                                <button class="btn btn-primary w-full">
                                    Télécharger l'acte de mobilité
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">Actions</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-3">
                                <button class="btn btn-secondary w-full flex items-center justify-center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="18"
                                        height="18"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-download mr-2"
                                    >
                                        <path
                                            d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                        ></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line
                                            x1="12"
                                            x2="12"
                                            y1="15"
                                            y2="3"
                                        ></line></svg>
                                    Exporter en PDF
                                </button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    
@endsection