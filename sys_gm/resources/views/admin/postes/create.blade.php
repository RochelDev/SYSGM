@extends('admin')

@section('title', '| Poste')

@section('content')

@php

if (request()->routeIs('admin.poste.edit')) {
    $structure = $poste->structure;
}
    
@endphp
    <div class="">
        @if(isset($structure) || request()->routeIs('admin.poste.edit'))
            {{ $poste->exists ? 'Modifier' : 'Enregistrer' }} un Poste pour la Structure : <span class="font-semibold">{{ $structure->nom_structure }}</span>
            <form class="space-y-8 mt-4" action="{{ route($poste->exists ? 'admin.poste.update':'admin.poste.store', $poste) }}" method="post">
                @csrf
                @method($poste->exists ? 'put' : 'post')

                <input type="hidden" name="structure_id" value="{{ $structure->id }}">

                <div>
                    <label for="intitule_poste" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Intitulé du Poste <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="intitule_poste" name="intitule_poste" value="{{ old('intitule_poste', $poste->intitule_poste) }}"
                           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('intitule_poste') border-red-500 @enderror">
                    @error('intitule_poste')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="code_poste" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Code du Poste <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="code_poste" name="code_poste" value="{{ old('code_poste', $poste->code_poste) }}"
                           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('code_poste') border-red-500 @enderror">
                    @error('code_poste')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="service" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Service
                    </label>
                    <input type="text" id="service" name="service" value="{{ old('service', $poste->service) }}"
                           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('service') border-red-500 @enderror">
                    @error('service')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="direction" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Direction
                    </label>
                    <input type="text" id="direction" name="direction" value="{{ old('direction', $poste->direction) }}"
                           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('direction') border-red-500 @enderror">
                    @error('direction')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('admin.poste.index', $structure) }}" type="button"
                       class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                        Abandonner
                    </a>
                    <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                        @if($poste->exists)
                            Modifier
                        @else
                            Enregistrer
                        @endif
                    </button>
                </div>
            </form>

        @else
            <div class="border rounded-xl overflow-x-auto">
                <div class="flex justify-between items-center mb-3 p-4 bg-gray-100 dark:bg-gray-800 rounded-t-xl">
                    <h2 class="text-xl font-semibold tracking-tight text-gray-700 dark:text-gray-300">Liste des Structures pour créer un Poste</h2>
                    <a href="{{ route('admin.poste.create') }}"
                       class="inline-flex bg-green-500 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-3 py-1.5 gap-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Nouveau Poste
                    </a>
                </div>
                <table class="min-w-full caption-bottom text-sm">
                    <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                    <tr class="border-b transition-colors hover:bg-muted/50">
                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                            Nom de la Structure
                        </th>
                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                            Code de la Structure
                        </th>
                        <th class="h-12 px-4 align-middle font-medium text-muted-foreground text-right">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($structures as $structure)
                        <tr class="border-b transition-colors hover:bg-muted/50">
                            <td class="py-2 px-4 align-middle">{{ $structure->nom_structure }}</td>
                            <td class="py-2 px-4 align-middle">{{ $structure->code_structure }}</td>
                            <td class="py-2 px-4 align-middle flex justify-end gap-2">
                                <a href="{{ route('admin.poste.create', ['structure' => $structure->id]) }}"
                                   class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-green-500 hover:bg-green-700 hover:text-accent-foreground h-9 rounded-md px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Créer un Poste
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="py-2 px-4 text-center text-gray-500 dark:text-gray-400">Aucune structure enregistrée. Veuillez créer une structure d'abord.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection