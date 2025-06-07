@extends('dashboard')

@section('title', '| Demandes')

@section('content')
    <!-- Demandes -->
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
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Erreurs !</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path fill-rule="evenodd" d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.586l-2.651 3.263a1.2 1.2 0 0 1-1.697-1.697L8.303 10l-3.263-2.651a1.2 1.2 0 0 1 1.697-1.697L10 8.414l2.651-3.263a1.2 1.2 0 0 1 1.697 1.697L11.697 10l3.263 2.651a1.2 1.2 0 0 1 0 1.697z" clip-rule="evenodd"></path></svg>
            </span>
        </div>
    @endif
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
            <form class="p-6" action="{{ route($demande->exists ? 'demande.update' : 'demande.store', $demande) }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="code_dossier" class="block text-sm font-medium text-gray-700 mb-1">
                            Code Dossier*
                        </label>
                        <input type="text" id="code_dossier" name="code_dossier"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Exemple: 12345A" value="{{ $codeDossier ?? '' }}" @if($codeDossier != '') readonly @endif  />
                    </div>

                    @if(auth()->user()->profilActif()->intitule_profil == 'Agent' && auth()->user()->agent)
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1" >Nom complet de l'agent*</label>
                        <input type="text" id="agentName" name="nom_agent" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        placeholder="Prénom et NOM" value="{{ $nomAgent ?? '' }}" @if($nomAgent != '') readonly @endif/>
                        <input type="hidden" name="agent_id" value="{{ auth()->user()->agent->id }}">
                    </div>
                    @endif

                    @if(auth()->user()->profilActif()->intitule_profil == 'Service RH')
                        <div>
                            <label for="matricule_agent" class="block text-sm font-medium text-gray-700 mb-1">
                                Matricule de l'agent*
                            </label>
                            <input type="text" id="matricule_agent" name="matricule_agent"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex: 12345" value="" />
                            <input type="hidden" id="reference_dossier" name="reference_dossier" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom et NOM" value=""
                            value="NULL"/>
                        </div>
                    @endif

                    <div>
                        <label for="type_mobilite_id" class="block text-sm font-medium text-gray-700 mb-1">
                            Type de mobilité*
                        </label>
                        <select id="type_mobilite_id" name="type_mobilite_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">
                                Sélectionnez le type de mobilité
                            </option>
                            @foreach ($typemobs as $typemob)
                                <option value="{{ $typemob->id }}" >{{ $typemob->intitule_mobilite }}</option>
                            @endforeach
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
                        <label for="titre" class="block text-sm font-medium text-gray-700 mb-1" >Titre*</label>
                        <input type="text" id="titre" name="titre" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom et NOM" value=""
                        />
                    </div>
                    <div>
                        <label
                            for="type_acte"
                            class="block text-sm font-medium text-gray-700 mb-1"
                            >Type Acte*</label
                        >
                        <select
                            id="type_acte"
                            name="type_acte"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option value="">Sélectionnez un acte</option>
                            <option value="Lettre">Lettre</option>
                            <option value="Arrêté">Arrêté</option>
                        </select>
                    </div>
                    <div>
                        <label for="reference_dossier" class="block text-sm font-medium text-gray-700 mb-1" >Référence du Dossier*</label>
                        <input type="text" id="reference_dossier" name="reference_dossier" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom et NOM" value=""
                        />
                    </div>
                    @endif


                    <div>
                        <label
                            for="structure_id"
                            class="block text-sm font-medium text-gray-700 mb-1"
                            >Structure actuelle*</label
                        >
                        <select id="structure_id" name="structure_id"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('structure_id') border-red-500 @enderror"
                        >
                            <option value="">-- Choisir une Structure --</option>
                            @foreach ($structures as $struct)
                                <option value="{{ $struct->id }}" @if(auth()->user()->structure_id == $struct->id) selected @endif >{{ $struct->nom_structure }}</option>
                            @endforeach
                        </select>
                        @error('structure_id')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label
                            for="structure_cible"
                            class="block text-sm font-medium text-gray-700 mb-1"
                            >Structure de destination*</label
                        >
                        <select id="structure_cible" name="structure_cible"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('structure_id') border-red-500 @enderror"
                        >
                            <option value="">-- Choisir une Structure --</option>
                            @foreach ($structures as $struct)
                                <option value="{{ $struct->code_structure }}">{{ $struct->nom_structure }}</option>
                            @endforeach
                        </select>
                        @error('code_structure')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label
                        for="motif_demande"
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Justification de la demande</label
                    ><textarea
                        id="motif_demande"
                        name="motif_demande"
                        rows="4"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Donnez les raisons motivant cette demande de mobilité..."
                    ></textarea>
                </div>
                @if(auth()->user()->profilActif()->intitule_profil == 'Service RH')
                <div class="mb-6">
                    <label
                        for="contenu_acte"
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Contenu de l'acte</label
                    ><textarea
                        id="contenu_acte"
                        name="contenu_acte"
                        rows="4"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Saisissez le contenu de l'acte..."
                    ></textarea>
                </div>
                @endif
                <div class="mb-8">
                    <label
                        for="documents[]"
                        class="block text-sm font-medium text-gray-700 mb-1"
                        >Documents justificatifs</label
                    >
                    {{-- <div
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
                </div> --}}
                <input id="documents" name="documents[]" type="file" multiple="" class="cursor-pointer"/>
                <div
                    class="border-t border-gray-200 pt-6 flex items-center justify-between space-x-3"
                >
                    <a class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Abandonner
                    </a>
                    <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        @if($demande->exists)
                            Modifier
                        @else
                            Soumettre
                        @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection