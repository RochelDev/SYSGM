@extends('dashboard')

@section('title', '| Demandes')

@section('content')
    <!-- Demandes -->
    <div class="fade-in mb-3">
        @auth
        @if(auth()->user()->profilActif()->intitule_profil == 'Service RH') 
        <div class="mb-6">
            <a  href="{{ route('demande.index') }}"
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
                    <path d="M19 12H5"></path></svg>
                Retour aux demandes
            </a>
            <h1 class="text-2xl font-bold text-gray-800 mb-2">
                Nouvelle demande de mobilité
            </h1>
            <p class="text-gray-600">
                Remplissez le formulaire ci-dessous pour créer une nouvelle demande
                de mobilité.
            </p>
        </div>
        @endif
        @endauth
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 border-b border-gray-100">
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
                        class="lucide lucide-file-plus text-[#0F2C59] mr-3"
                    >
                        <path
                            d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                        ></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path d="M9 15h6"></path>
                        <path d="M12 18v-6"></path>
                    </svg>
                    <h2 class="text-lg font-semibold text-gray-800">
                        Formulaire de demande
                    </h2>
                </div>
            </div>
            <form class="p-6" action="{{ route($demande->exists ? 'demande.update' : 'demande.store', $demande) }}" method="post">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="agentId" class="block text-sm font-medium text-gray-700 mb-1">
                            Code Dossier*
                        </label>
                        <input type="text" id="code_dossier" name="code_dossier"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Exemple: 12345A" value="{{ $codeDossier ?? '' }}" @if($codeDossier != '') readonly @endif  />
                    </div>
                    <div>
                        <label for="agentName" class="block text-sm font-medium text-gray-700 mb-1" >Nom complet de l'agent*</label>
                        <input type="text" id="agentName" name="agentName" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom et NOM" value=""
                        />
                    </div>
                    <div>
                        <label for="mobilityType" class="block text-sm font-medium text-gray-700 mb-1">
                            Type de mobilité*
                        </label>
                        <select id="mobilityType" name="mobilityType" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">
                                Sélectionnez le type de mobilité
                            </option>
                            <option value="mutation">Mutation</option>
                            <option value="detachment">Détachement</option>
                            <option value="assignment">Affectation</option>
                            <option value="end_detachment">
                                Fin de détachement
                            </option>
                            <option value="secondment">Mise à disposition</option>
                        </select>
                    </div>
                    {{-- <div>
                        <label for="startDate" class="block text-sm font-medium text-gray-700 mb-1">
                            Date souhaitée*
                        </label
                        ><input
                            type="date"
                            id="startDate"
                            name="startDate"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value=""
                        />
                    </div> --}}
                    @if(auth()->user()->profilActif()->intitule_profil == 'Service RH')
                    
                    <div>
                        <label for="agentName" class="block text-sm font-medium text-gray-700 mb-1" >Titre*</label>
                        <input type="text" id="agentName" name="agentName" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom et NOM" value=""
                        />
                    </div>
                    <div>
                        <label
                            for="currentDepartment"
                            class="block text-sm font-medium text-gray-700 mb-1"
                            >Type Acte*</label
                        ><select
                            id="currentDepartment"
                            name="currentDepartment"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option value="">Sélectionnez un acte</option>
                            <option value="Direction des Ressources Humaines">
                                Lettre
                            </option>
                            <option value="Direction du Budget">
                                Arrêté
                            </option>
                        </select>
                    </div>
                    <div>
                        <label for="agentName" class="block text-sm font-medium text-gray-700 mb-1" >Référence du Dossier*</label>
                        <input type="text" id="agentName" name="agentName" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom et NOM" value=""
                        />
                    </div>
                    @endif
                    <div>
                        <label
                            for="currentDepartment"
                            class="block text-sm font-medium text-gray-700 mb-1"
                            >Structure actuelle*</label
                        ><select
                            id="currentDepartment"
                            name="currentDepartment"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option value="">Sélectionnez une structure</option>
                            <option value="Direction des Ressources Humaines">
                                Direction des Ressources Humaines
                            </option>
                            <option value="Direction du Budget">
                                Direction du Budget
                            </option>
                            <option value="Direction de l'Informatique">
                                Direction de l'Informatique
                            </option>
                            <option value="Direction des Affaires Financières">
                                Direction des Affaires Financières
                            </option>
                            <option value="Direction de la Planification">
                                Direction de la Planification
                            </option>
                            <option value="Direction de l'Audit">
                                Direction de l'Audit
                            </option>
                            <option value="Direction des Statistiques">
                                Direction des Statistiques
                            </option>
                        </select>
                    </div>
                    <div>
                        <label
                            for="destinationDepartment"
                            class="block text-sm font-medium text-gray-700 mb-1"
                            >Structure de destination*</label
                        ><select
                            id="destinationDepartment"
                            name="destinationDepartment"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option value="">Sélectionnez une structure</option>
                            <option value="Direction des Ressources Humaines">
                                Direction des Ressources Humaines
                            </option>
                            <option value="Direction du Budget">
                                Direction du Budget
                            </option>
                            <option value="Direction de l'Informatique">
                                Direction de l'Informatique
                            </option>
                            <option value="Direction des Affaires Financières">
                                Direction des Affaires Financières
                            </option>
                            <option value="Direction de la Planification">
                                Direction de la Planification
                            </option>
                            <option value="Direction de l'Audit">
                                Direction de l'Audit
                            </option>
                            <option value="Direction des Statistiques">
                                Direction des Statistiques
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mb-6">
                    <label
                        for="justification"
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Justification de la demande</label
                    ><textarea
                        id="justification"
                        name="justification"
                        rows="4"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Donnez les raisons motivant cette demande de mobilité..."
                    ></textarea>
                </div>
                @if(auth()->user()->profilActif()->intitule_profil == 'Service RH')
                <div class="mb-6">
                    <label
                        for="justification"
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Contenu de l'acte</label
                    ><textarea
                        id="justification"
                        name="justification"
                        rows="4"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Saisissez le contenu de l'acte..."
                    ></textarea>
                </div>
                @endif
                <div class="mb-8">
                    <label
                        for="documents"
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Documents justificatifs</label
                    >
                    <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                    >
                        <div class="space-y-1 text-center">
                            <svg
                                class="mx-auto h-12 w-12 text-gray-400"
                                stroke="currentColor"
                                fill="none"
                                viewBox="0 0 48 48"
                                aria-hidden="true"
                            >
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label
                                    for="documents"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-[#0F2C59] hover:text-[#4CB9E7] focus-within:outline-none"
                                    ><span>Téléverser des fichiers</span
                                    ><input
                                        id="documents"
                                        name="documents"
                                        type="file"
                                        class="sr-only"
                                        multiple=""
                                /></label>
                                <p class="pl-1">ou glisser-déposer</p>
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, PDF jusqu'à 10MB
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="border-t border-gray-200 pt-6 flex items-center justify-end space-x-3"
                >
                    <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Annuler</button
                    ><button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        Soumettre la demande
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection