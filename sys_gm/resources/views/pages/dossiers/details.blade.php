@extends('dashboard')

@section('title', '| Dossiers')

@section('content')
    <!-- Dossiers -->
    <div class="">
        <div class="fade-in">
            <div class="mb-6">
                <button
                    class="inline-flex items-center text-gray-600 hover:text-gray-800 mb-4"
                >
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
                        class="lucide lucide-arrow-left mr-1"
                    >
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path></svg
                    >Retour aux demandes
                </button>
                <div
                    class="flex flex-col md:flex-row md:items-center md:justify-between"
                >
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800 mb-2">
                            Demande #1001
                        </h1>
                        <div class="flex items-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 mr-2"
                                >Approuvée</span
                            ><span class="text-gray-600">Soumise le 10/03/2025</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2">
                    <div class="card mb-6">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">
                                Détails de la demande
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Type de mobilité
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">Mutation</p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Agent concerné
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        Kofi Amoah
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Structure actuelle
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        Direction des Ressources Humaines
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Structure de destination
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        Direction du Budget
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Date de soumission
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        10/03/2025
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">
                                        Date souhaitée
                                    </h3>
                                    <p class="mt-1 text-base text-gray-800">
                                        15/04/2025
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">
                                    Motif de la demande
                                </h3>
                                <p class="mt-1 text-base text-gray-800">
                                    Réorganisation du service et nécessité de renforcer
                                    l'équipe de la Direction du Budget. L'agent dispose
                                    des compétences requises pour ce poste.
                                </p>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500 mb-2">
                                    Documents joints
                                </h3>
                                <div class="space-y-2">
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
                                            <p
                                                class="text-sm font-medium text-gray-800"
                                            >
                                                Demande_signée.pdf
                                            </p>
                                            <p class="text-xs text-gray-500">1.2 MB</p>
                                        </div>
                                        <button
                                            class="p-2 text-[#0F2C59] hover:text-[#4CB9E7] transition-colors"
                                        >
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
                                                class="lucide lucide-download"
                                            >
                                                <path
                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                                ></path>
                                                <polyline
                                                    points="7 10 12 15 17 10"
                                                ></polyline>
                                                <line
                                                    x1="12"
                                                    x2="12"
                                                    y1="15"
                                                    y2="3"
                                                ></line>
                                            </svg>
                                        </button>
                                    </div>
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
                                            <p
                                                class="text-sm font-medium text-gray-800"
                                            >
                                                CV_Kofi_Amoah.pdf
                                            </p>
                                            <p class="text-xs text-gray-500">0.8 MB</p>
                                        </div>
                                        <button
                                            class="p-2 text-[#0F2C59] hover:text-[#4CB9E7] transition-colors"
                                        >
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
                                                class="lucide lucide-download"
                                            >
                                                <path
                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                                ></path>
                                                <polyline
                                                    points="7 10 12 15 17 10"
                                                ></polyline>
                                                <line
                                                    x1="12"
                                                    x2="12"
                                                    y1="15"
                                                    y2="3"
                                                ></line>
                                            </svg>
                                        </button>
                                    </div>
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
                                            <p
                                                class="text-sm font-medium text-gray-800"
                                            >
                                                Justificatifs.pdf
                                            </p>
                                            <p class="text-xs text-gray-500">2.4 MB</p>
                                        </div>
                                        <button
                                            class="p-2 text-[#0F2C59] hover:text-[#4CB9E7] transition-colors"
                                        >
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
                                                class="lucide lucide-download"
                                            >
                                                <path
                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                                ></path>
                                                <polyline
                                                    points="7 10 12 15 17 10"
                                                ></polyline>
                                                <line
                                                    x1="12"
                                                    x2="12"
                                                    y1="15"
                                                    y2="3"
                                                ></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-6">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">
                                Historique de la demande
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
                    </div>
                    <div class="card">
                        <div class="p-6 border-b border-gray-100">
                            <div class="flex items-center">
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
                                    class="lucide lucide-message-circle text-gray-500 mr-2"
                                >
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>
                                <h2 class="text-lg font-semibold text-gray-800">
                                    Commentaires
                                </h2>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <div
                                    class="border-b border-gray-100 pb-4 last:border-0 last:pb-0"
                                >
                                    <div class="flex items-start">
                                        <div
                                            class="h-10 w-10 rounded-full bg-[#0F2C59] flex items-center justify-center text-white"
                                        >
                                            A
                                        </div>
                                        <div class="ml-3">
                                            <div class="flex items-baseline">
                                                <h3
                                                    class="text-sm font-medium text-gray-800"
                                                >
                                                    Amadou Diallo
                                                </h3>
                                                <p class="ml-2 text-xs text-gray-500">
                                                    Directeur RH
                                                </p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-600">
                                                Je valide cette demande. L'agent a les
                                                compétences requises.
                                            </p>
                                            <p class="mt-1 text-xs text-gray-500">
                                                14/03/2025
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border-b border-gray-100 pb-4 last:border-0 last:pb-0"
                                >
                                    <div class="flex items-start">
                                        <div
                                            class="h-10 w-10 rounded-full bg-[#0F2C59] flex items-center justify-center text-white"
                                        >
                                            M
                                        </div>
                                        <div class="ml-3">
                                            <div class="flex items-baseline">
                                                <h3
                                                    class="text-sm font-medium text-gray-800"
                                                >
                                                    Marie Acogny
                                                </h3>
                                                <p class="ml-2 text-xs text-gray-500">
                                                    Directrice Budget
                                                </p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-600">
                                                Nous sommes favorables à cette mutation.
                                            </p>
                                            <p class="mt-1 text-xs text-gray-500">
                                                15/03/2025
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="mt-6">
                                <div class="mb-4">
                                    <label for="comment" class="sr-only"
                                        >Ajouter un commentaire</label
                                    ><textarea
                                        id="comment"
                                        rows="3"
                                        class="input-field"
                                        placeholder="Ajoutez un commentaire..."
                                    ></textarea>
                                </div>
                                <div class="flex justify-end">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        disabled=""
                                    >
                                        Ajouter un commentaire
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card mb-6">
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
                                    K
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800">
                                        Kofi Amoah
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Analyste Financier
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
                                    <p class="mt-1 text-sm text-gray-800">AGT12345</p>
                                </div>
                                <div>
                                    <h4
                                        class="text-xs font-medium text-gray-500 uppercase"
                                    >
                                        Email
                                    </h4>
                                    <p class="mt-1 text-sm text-gray-800">
                                        k.amoah@finances.gouv.bj
                                    </p>
                                </div>
                                <div>
                                    <h4
                                        class="text-xs font-medium text-gray-500 uppercase"
                                    >
                                        Téléphone
                                    </h4>
                                    <p class="mt-1 text-sm text-gray-800">
                                        +229 97 123 456
                                    </p>
                                </div>
                                <div>
                                    <h4
                                        class="text-xs font-medium text-gray-500 uppercase"
                                    >
                                        Service actuel
                                    </h4>
                                    <p class="mt-1 text-sm text-gray-800">
                                        Direction des Ressources Humaines
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a
                                    href="/directory/AGT12345"
                                    class="text-[#0F2C59] hover:text-[#4CB9E7] text-sm font-medium inline-flex items-center"
                                    >Voir le profil complet</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="card mb-6">
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
                    <div class="card">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">Actions</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-3">
                                <button
                                    class="btn btn-secondary w-full flex items-center justify-center"
                                >
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
                                        ></line></svg
                                    >Exporter en PDF
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection