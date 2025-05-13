@extends('admin')

@section('title', '| Agent')

@section('content')
    <div class="">
        {{ $agent->exists ? 'Modifier' : 'Enregistrer' }} un Agent
        <form class="space-y-6" action="{{ route($agent->exists ? 'agent.update' : 'agent.store', $agent) }}" method="post">
            @csrf
            @method($agent->exists ? 'put' : 'post')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Colonne 1 -->
                <div class="space-y-6">
                    <div>
                        <label for="matricule" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Matricule <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="matricule" name="matricule"
                               value="{{ old('matricule', $agent->matricule) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white"
                               required>
                        @error('matricule')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="num_NPI" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Numéro NPI
                        </label>
                        <input type="text" id="num_NPI" name="num_NPI"
                               value="{{ old('num_NPI', $agent->num_NPI) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                        @error('num_NPI')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Nom <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="nom" name="nom"
                               value="{{ old('nom', $agent->nom) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white"
                               required>
                        @error('nom')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="prenom" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Prénom <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="prenom" name="prenom"
                               value="{{ old('prenom', $agent->prenom) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white"
                               required>
                        @error('prenom')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="structure_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Structure <span class="text-red-500">*</span>
                        </label>
                        <select id="structure_id" name="structure_id"
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('structure_id') border-red-500 @enderror">
                            <option value="">-- Choisir un Structure --</option>
                            @foreach ($structures as $struct)
                                <option value="{{ $struct->id }}" @if(old('structure_id', $agent->structure_id) == $struct->id) selected @endif>{{ $struct->nom_structure }}</option>
                            @endforeach
                        </select>
                        @error('structure_id')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Colonne 2 -->
                <div class="space-y-6">
                    <div>
                        <label for="grade" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Grade
                        </label>
                        <input type="text" id="grade" name="grade"
                               value="{{ old('grade', $agent->grade) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                        @error('grade')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="categorie" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Catégorie
                        </label>
                        <input type="text" id="categorie" name="categorie"
                               value="{{ old('categorie', $agent->categorie) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                        @error('categorie')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="date_recrutement" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Date de recrutement
                        </label>
                        <input type="date" id="date_recrutement" name="date_recrutement"
                               value="{{ old('date_recrutement', $agent->date_recrutement) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                        @error('date_recrutement')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="date_debut_service" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Date de début de service
                        </label>
                        <input type="date" id="date_debut_service" name="date_debut_service"
                               value="{{ old('date_debut_service', $agent->date_debut_service) }}"
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                        @error('date_debut_service')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <label for="historique_poste" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Historique de poste
                </label>
                <textarea id="historique_poste" name="historique_poste" rows="3"
                          class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">{{ old('historique_poste', $agent->historique_poste) }}</textarea>
                @error('historique_poste')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-4 mt-8">
                <a href="{{ route('agent.index') }}" type="button"
                    class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                    Abandonner
                </a>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    @if($agent->exists)
                        Modifier
                    @else
                        Enregistrer
                    @endif
                </button>
            </div>
        </form>
    </div>
@endsection